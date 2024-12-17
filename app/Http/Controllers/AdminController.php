<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Harga;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function produk()
    {
        $produk = Produk::all();
        $kategoris = Kategori::all();
        $harga = Harga::all();
        return view('admin.produk.index', compact('produk', 'kategoris', 'harga'));
    }

    public function produkEdit($id)
    {
        $produk = Produk::with('harga')->findOrFail($id); // Mengambil produk beserta harga terkait
        $kategoris = Kategori::all(); // Untuk dropdown kategori
        return view('admin.produk.edit', compact('produk', 'kategoris'));
    }

    public function produkUpdate(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        // Validasi input
        $rules = 'required|string';
        $validatedData = $request->validate([
            'nama_produk' => $rules,
            'foto' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'deskripsi' => $rules,
            'kategori_id' => 'required|exists:kategoris,id',
            'harga.*' => 'required|integer',
            'durasi.*' => $rules,
        ]);

        // Update data produk
        $produk->update([
            'nama_produk' => $validatedData['nama_produk'],
            'deskripsi' => $validatedData['deskripsi'],
            'kategori_id' => $validatedData['kategori_id'],
        ]);

        // Jika ada file foto baru, ganti foto lama
        if ($request->hasFile('foto')) {
            $image = $this->uploadFoto($request->file('foto'));
            $produk->update(['foto' => $image]);
        }

        // Hapus harga lama dan simpan harga baru
        $produk->harga()->delete();
        $this->storeHarga($request->harga, $request->durasi, $produk->id);

        return redirect()->route('produk')->with('success', 'Produk berhasil diperbarui!');
    }

    public function produkStore(Request $request)
    {
        $rules = 'required|string';
        $validatedData = $request->validate([
            'nama_produk' => $rules,
            'foto' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'deskripsi' => $rules,
            'kategori_id' => 'required|exists:kategoris,id',
            'harga.*' => 'required|integer',
            'durasi.*' => $rules,
        ]);

        $image = $this->uploadFoto($request->file('foto'));

        $produk = Produk::create([
            'nama_produk' => $validatedData['nama_produk'],
            'foto' => $image,
            'deskripsi' => $validatedData['deskripsi'],
            'kategori_id' => $validatedData['kategori_id'],
        ]);

        $this->storeHarga($request->harga, $request->durasi, $produk->id);

        return redirect()->route('produk')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function produkHapus(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('produk')->with('success', 'Produk berhasil dihapus!');
    }

    private function uploadFoto($foto)
    {
        return $foto->move('foto_produk', time() . '_' . $foto->getClientOriginalName());
    }

    private function storeHarga(array $hargaList, array $durasiList, int $produkId)
    {
        foreach ($hargaList as $index => $harga) {
            Harga::create([
                'produk_id' => $produkId,
                'harga' => $harga,
                'durasi' => $durasiList[$index],
            ]);
        }
    }
}

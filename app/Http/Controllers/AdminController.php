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
    $request->validate([
        'nama_produk' => 'required|string',
        'foto' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        'deskripsi' => 'required|string',
        'kategori_id' => 'required|exists:kategoris,id',
        'harga.*' => 'required|integer',
        'durasi.*' => 'required|string',
    ]);

    // Update data produk
    $produk->update([
        'nama_produk' => $request->nama_produk,
        'deskripsi' => $request->deskripsi,
        'kategori_id' => $request->kategori_id,
    ]);

    // Jika ada file foto baru, ganti foto lama
    if ($request->hasFile('foto')) {
        $image = $request->file('foto')->move('foto_produk', time() . '_' . $request->file('foto')->getClientOriginalName());
        $produk->update(['foto' => $image]);
    }

    // Hapus harga lama
    $produk->harga()->delete();

    // Simpan harga baru
    foreach ($request->harga as $index => $harga) {
        Harga::create([
            'produk_id' => $produk->id,
            'harga' => $harga,
            'durasi' => $request->durasi[$index],
        ]);
    }

    return redirect()->route('produk')->with('success', 'Produk berhasil diperbarui!');
}


    public function produkStore(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string',
            'foto' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'deskripsi' => 'required|string',
            'harga.*' => 'required|integer',
            'durasi.*' => 'required|string',
        ]);

        $image = $request->file('foto')->move('foto_produk', time() . '_' . $request->file('foto')->getClientOriginalName());

        $produk = Produk::create([
            'nama_produk' => $request->nama_produk,
            'foto' => $image,
            'deskripsi' => $request->deskripsi,
            'kategori_id' => $request->kategori_id
        ]);

        foreach ($request->harga as $index => $harga) {
            Harga::create([
                'produk_id' => $produk->id,
                'harga' => $harga,
                'durasi' => $request->durasi[$index]
            ]);
        }

        return redirect()->route('produk')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function produkHapus(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('produk')->with('success', 'Produk berhasil dihapus!');
    }
}

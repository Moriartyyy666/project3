@extends('admin.index')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if (Session('success'))
            <script>
                Swal.fire({
                    title: "Success",
                    text: "{{ session('success') }}",
                    icon: "success"
                });
            </script>
        @endif
        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800">Data Produk</h1>
        <div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Buat Produk
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Buat Produk</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('produk.proses') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" name="foto"
                                        class="form-control @error('foto') is-invalid @enderror" id="foto">
                                    @error('foto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nama_produk" class="form-label">Nama Produk</label>
                                    <input type="text" name="nama_produk"
                                        class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk">
                                    @error('nama_produk')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"></textarea>
                                    @error('deskripsi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="kategori_id" class="form-label">Kategori</label>
                                    <select class="form-select @error('kategori_id') is-invalid @enderror"
                                        name="kategori_id" id="kategori_id" aria-label="Pilih Kategori">
                                        <option selected disabled>Pilih Kategori</option>
                                        @foreach ($kategoris as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div id="hargaDurasiContainer">
                                    <div class="mb-3 harga-durasi-group">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="number" name="harga[]"
                                            class="form-control @error('harga') is-invalid @enderror" id="harga">
                                        @error('harga.*')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <label for="durasi" class="form-label">Durasi</label>
                                        <input type="text" name="durasi[]"
                                            class="form-control @error('durasi') is-invalid @enderror" id="durasi">
                                        @error('durasi.*')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <button type="button" class="btn btn-secondary" id="addMore">Tambah Harga dan
                                    Durasi</button>

                                <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $data)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <th scope="row">
                                <img src="{{ asset($data->foto) }}" alt="{{ asset($data->foto) }}" style="width: 50px">
                            </th>
                            <th scope="row">{{ $data->nama_produk }}</th>
                            <td scope="row">{{ $data->deskripsi }}</td>
                            <td scope="row">{{ $data->kategori->name ?? 'null' }}</td>
                            <td scope="row d-flex gap-2">
                                <!-- Tombol Hapus -->
                                <div>
                                    <form action="{{ route('produk.hapus', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                                <!-- Tombol Edit -->
                                <div>
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{ $data->id }}">Edit</button>
                                </div>
                                <!-- Tombol Detail -->
                                <div>
                                    <button class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#detail{{ $data->id }}">Detail</button>
                                </div>
                            </td>

                        </tr>

                        <div class="modal" id="edit{{ $data->id }}" tabindex="-1" aria-labelledby="editLabel{{ $data->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="editLabel{{ $data->id }}">Edit Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('produk.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="nama_produk_{{ $data->id }}" class="form-label">Nama Produk</label>
                                                <input type="text" name="nama_produk" value="{{ $data->nama_produk }}" class="form-control" id="nama_produk_{{ $data->id }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="deskripsi_{{ $data->id }}" class="form-label">Deskripsi</label>
                                                <textarea name="deskripsi" class="form-control" id="deskripsi_{{ $data->id }}">{{ $data->deskripsi }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kategori_id_{{ $data->id }}" class="form-label">Kategori</label>
                                                <select name="kategori_id" class="form-select">
                                                    @foreach ($kategoris as $kategori)
                                                        <option value="{{ $kategori->id }}" {{ $data->kategori_id == $kategori->id ? 'selected' : '' }}>
                                                            {{ $kategori->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="foto_{{ $data->id }}" class="form-label">Foto</label>
                                                <input type="file" name="foto" class="form-control" id="foto_{{ $data->id }}">
                                                <img src="{{ asset($data->foto) }}" alt="Foto Produk" class="mt-2" style="width: 100px;">
                                            </div>
                                            <div id="hargaDurasiContainer{{ $data->id }}">
                                                @foreach ($data->harga as $index => $harga)
                                                    <div class="mb-3 harga-durasi-group">
                                                        <label for="harga_{{ $data->id }}_{{ $index }}" class="form-label">Harga</label>
                                                        <input type="number" name="harga[]" value="{{ $harga->harga }}" class="form-control" id="harga_{{ $data->id }}_{{ $index }}">
                                                        <label for="durasi_{{ $data->id }}_{{ $index }}" class="form-label">Durasi</label>
                                                        <input type="text" name="durasi[]" value="{{ $harga->durasi }}" class="form-control" id="durasi_{{ $data->id }}_{{ $index }}">
                                                        <button type="button" class="btn btn-danger remove mt-2">Hapus</button>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <button type="button" class="btn btn-secondary" id="addMore{{ $data->id }}">Tambah Harga dan Durasi</button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>                        

                        <div class="modal" id="detail{{ $data->id }}" tabindex="-1" aria-labelledby="detail"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <img src="{{ $data->foto }}" width="50" height="50"
                                                alt="{{ $data->foto }}">
                                        </div>
                                        <div>
                                            <span>{{ $data->nama_produk }}</span>
                                        </div>
                                        <div>
                                            <span>{{ $data->kategori->name }}</span>
                                        </div>
                                        <div>
                                            <h5>Harga dan Durasi</h5>
                                            @foreach ($data->harga as $hargas)
                                                <div class="d-flex justify-content-between">
                                                    <span>Harga: {{ $hargas->harga }}</span>
                                                    <span>Durasi: {{ $hargas->durasi }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        document.getElementById('addMore').addEventListener('click', function() {
            const container = document.getElementById('hargaDurasiContainer');
            const newGroup = document.createElement('div');
            newGroup.classList.add('mb-3', 'harga-durasi-group');
            newGroup.innerHTML = `
                <label for="harga" class="form-label">Harga</label>
                <input type="number" name="harga[]" class="form-control">
                <label for="durasi" class="form-label">Durasi</label>
                <input type="text" name="durasi[]" class="form-control">
                <button type="button" class="btn btn-danger remove">Hapus</button>
            `;
            container.appendChild(newGroup);
        });

        // Event delegation untuk menghapus inputan yang ditambahkan
        document.getElementById('hargaDurasiContainer').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove')) {
                e.target.parentElement.remove();
            }
        });

        document.getElementById('addMore{{ $data->id }}').addEventListener('click', function() {
            const container = document.getElementById('hargaDurasiContainer{{ $data->id }}');
            const newGroup = document.createElement('div');
            newGroup.classList.add('mb-3', 'harga-durasi-group');
            newGroup.innerHTML = `
        <label class="form-label">Harga</label>
        <input type="number" name="harga[]" class="form-control">
        <label class="form-label">Durasi</label>
        <input type="text" name="durasi[]" class="form-control">
        <button type="button" class="btn btn-danger remove mt-2">Hapus</button>
    `;
            container.appendChild(newGroup);
        });

        document.getElementById('hargaDurasiContainer{{ $data->id }}').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove')) {
                e.target.parentElement.remove();
            }
        });
    </script>
@endsection

@extends('admin.index')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
  <div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Launch demo modal
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="namaproduk" class="form-label">nama produk</label>
                <input type="text" name="nama_produk" class="form-control" id="namaproduk">
              </div>
              <div class="mb-3">
                <label for="namaproduk" class="form-label">deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" id="namaproduk">
              </div>
              <div class="mb-3">
                <label for="namaproduk" class="form-label">harga</label>
                <input type="number" name="harga" class="form-control" id="namaproduk">
              </div>
              <div class="mb-3">
                <label for="durasi" class="form-label">durasi</label>
                <input type="text" name="durasi" class="form-control" id="durasi">
              </div>
              <div class="mb-3">
                <label for="kategori" class="form-label">kategori</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>pilih</option>
                  <option value="1">streaming</option>
                  <option value="2">edukasi</option>
                 
                </select>
              </div>
              


              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>

        </div>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>

</div>
<!-- /.container-fluid -->
@endsection
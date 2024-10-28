@extends('admin.admin_master')
@section('admin')


<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Tambah Produk</h1>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div class="card-body">
                    <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="namaProduk" class="form-label">Nama Produk</label>
                          <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                          <label for="discount" class="form-label">Discount</label>
                          <input type="text" class="form-control" id="discount" name="discount">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            {{-- <input type="text" class="form-control" id="description" name="description"> --}}
                            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>  
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="formFile" name="image">
                        </div>    
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar Tambahan</label>
                            <input type="file" class="form-control" id="formFile" name="imageDetail[]" multiple>
                        </div>                    
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button onclick="history.back()" type="button" class="btn btn-danger">Batal</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

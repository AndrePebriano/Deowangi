@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Edit Produk</h1>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div class="card-body">
                    <form method="POST" action="{{route('product.update', $editProduk->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="namaProduk" class="form-label">Nama Produk</label>
                          <input type="text" class="form-control" id="name" name="name" value="{{$editProduk->name}}">
                        </div>
                        <div class="mb-3">
                          <label for="discount" class="form-label">Discount</label>
                          <input type="text" class="form-control" id="discount" name="discount" value="{{$editProduk->discount}}">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{$editProduk->description}}">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{$editProduk->price}}">
                        </div>   
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="formFile" name="image" value="{{asset('storage/'.$editProduk->image)}}" required>
                        </div>                      
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar Tambahan</label>
                            <input type="file" class="form-control" id="formFile" name="imageDetail[]" multiple required>
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

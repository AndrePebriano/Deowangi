@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>
            </div>
            <div class="co text-end mb-2">
                <a href="{{route('product.add')}}"><button type="button" class="btn btn-primary">Tambah Produk</button></a>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Discount</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allDataProduk as $item =>$product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->discount}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td><img src="{{asset('storage/'.$product->image)}}" style="height: 80px; width: 60px;"></td>
                            <td colspan="2">
                                <a href="{{route('product.edit', $product->id)}}" class="btn btn-warning"> Edit </a>
                                <a href="{{route('product.delete', $product->id)}}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div>
@endsection

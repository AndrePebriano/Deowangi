<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['allDataProduk'] = Product::all();
        return view('backend.produk.view_produk', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('backend.produk.add_produk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'discount' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image.*' => 'required|image|mimes:jpeg,jpg,png|max:5120',
        ]);
        $productData = new Product();
        $productData->name = $request->name;
        $productData->discount = $request->discount;
        $productData->description = $request->description;
        $productData->price = $request->price;
        if ($request->hasFile('image')) {
            $productImage = $request->file('image')->store('image');
            $productData->image = $productImage;
        }
        $productData->save();

        foreach ($request->imageDetail as $key => $imageDetail) {
            $productimg = new ProductImage();
            if ($productimg->imageDetail = $imageDetail) {
                $newbaru= $imageDetail->store('imageDetail');
            }
            $productimg['imageDetail'] = $newbaru;
            $productimg->id_products = $productData->id;
            $productimg->save();
        }
        return redirect()->route('product.view');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editProduk = Product::find($id);
        return view('backend.produk.edit_produk', compact('editProduk'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editProduct = Product::find($id);
        $editProduct->name = $request->name;
        $editProduct->discount = $request->discount;
        $editProduct->description = $request->description;
        $editProduct->price = $request->price;
        if ($request->hasFile('image')) {
            Storage::delete($editProduct->image);
            $productImage = $request->file('image')->store('image');
            $editProduct->image = $productImage;
        }
        $editProduct->update();

        foreach ($request->imageDetail as $key => $imageDetail) {
            $productimg = new ProductImage();
            if ($productimg->imageDetail = $imageDetail) {
                $newbaru= $imageDetail->store('imageDetail');
            }
            $productimg['imageDetail'] = $newbaru;
            $productimg->id_products = $editProduct->id;
            $productimg->save();
        }
        return redirect()->route('product.view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteData = Product::find($id);
        $deleteData->delete();
        return redirect()->route('product.view');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ProductDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( ProductDataTable $dataTable )
    {
        //
        return $dataTable->render('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        //
        $product = new Product();
        $request->validate([
            'price'=>['required'],
            'quantity'=>['required', 'max:200'],
            'description'=>['required'],
            'skin_type'=>['required'],
            'skin_problem'=>['required'],
            'sex'=>['required'],
            'enable'=>['required'],
            'provider'=>['required'],
            'type'=>['required'],
            'name'=>['required','unique:products,name'],
            'link_photo'=>['required']
        ]);
        
    if ($request->hasFile('link_photo')) {
        $image = $request->file('link_photo');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);
        $product->link_photo = '/uploads/' . $imageName;
    }
        $product->name = $request->name;
        $product->type = $request->type;
        $product->provider = $request->provider;
        $product->enable = $request->enable;
        $product->sex = $request->sex;
        $product->skin_problem = $request->skin_problem;
        $product->skin_type = $request->skin_type;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('manage_product.index');
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
    public function edit(string $id)
    {
        //
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'price'=>['required'],
            'quantity'=>['required', 'max:200'],
            'description'=>['required'],
           
        ]);
        $product = Product::findOrFail($id);
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->enable = $request->price;
        $product->save();
        
        toastr('Update Successfully', 'success');

        return redirect()->route('manage_product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Product::findOrFail($id);
        if (!empty($product->link_photo)) {
            $imagePath = public_path($product->link_photo);
            
             if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the file
            }
        }
        $product->delete();
        return response(['status' => 'success', 'Deleted Successfully']);
        // try {
        //     $product = Product::findOrFail($id);
        //     $product->delete();
        //     return response()->json(['status' => 'success', 'message' => 'Deleted Successfully']);
        // } catch (\Exception $e) {
        //     return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        // }
    
    }
   
}

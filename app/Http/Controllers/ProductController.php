<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function indexProduct()
    {
        $data = DB::table("products")->get();
        return view('product.indexProduct',['products'=>$data]);
    }
    
    public function deleteProduct($id){
        $delete = DB::table("products")
        ->where("id", "=" , $id)
        ->delete();
        return redirect('/')->with('success', 'Deleted Product');
    }
    public function editProduct($id){
        $data=product::findOrFail($id);
        return view('product.editProduct', ['product' => $data]);

    }

    public function updateProduct(Request $request){
        $request->validate([
            "name"=>['required' , 'min:1'],
            "quantity"=>['required' , 'min:1'],
            "price"=> ['required' , 'min:1']
        ]);

        $data = product::find($request->id);
        $data->name=$request->name;
        $data->quantity=$request->quantity;
        $data->price=$request->price;
        
        $data->save();
        return redirect("/")->with('success2', 'product Saved');
    }

    public function saveProduct(Request $req){
        $validated=$req->validate([
            "name"=>['required' , 'min:1'],
            "quantity"=>['required' , 'min:1'],
            "price"=> ['required' , 'min:1']
        ]);
        $data=product::create($validated);
        return redirect("/")->with('success2', 'product added successfully.');

    }

    public function addProduct(){
        return view('product.addProduct');
    }
}

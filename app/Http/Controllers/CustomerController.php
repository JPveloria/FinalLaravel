<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $data = DB::table("customers")->get();
        return view('customer.index',['customers'=>$data]);
    }
    
    public function delete($id){
        $delete = DB::table("customers")
        ->where("id", "=" , $id)
        ->delete();
        return redirect('/')->with('success', 'MAY NAMAALAM NA CUSTOMER');
    }
    public function edit($id){
        $data=Customer::findOrFail($id);
        return view('customer.edit', ['customer' => $data]);

    }

    public function updateCustomer(Request $request){
        $request->validate([
            "lastName"=>['required' , 'min:4'],
            "firstName"=>['required' , 'min:4'],
            "email"=>['required','email', Rule::unique('users','email')],
            "contactNumber"=>['required','min:11'],
            "address"=> ['required' , 'min:4']
        ]);

        $data = Customer::find($request->id);
        $data->lastName=$request->lastName;
        $data->firstName=$request->firstName;
        $data->contactNumber=$request->contactNumber;
        $data->address=$request->address;
        $data->email=$request->email;
        
        $data->save();
        return redirect("/")->with('success2', 'Customer Saved');
    }

    public function saveCustomer(Request $req){
        $validated=$req->validate([
            "lastName"=>['required' , 'min:1'],
            "firstName"=>['required' , 'min:1'],
            "email"=>['required','email', Rule::unique('users','email')],
            "contactNumber"=>['required','min:1'],
            "address"=> ['required' , 'min:1']
        ]);
        $data=Customer::create($validated);
        return redirect("/")->with('success2', 'Customer added successfully.');

    }

    public function addCustomer(){
        return view('customer.add');
    }
}

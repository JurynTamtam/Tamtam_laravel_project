<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function index(){
        $data = DB::table('customer')->get(); //customer is the  table in db
        return view('pages.customer', compact('data')); // book here is the book.blade.php in pages
   
    }
    //add form
    public function show_add_form(){
        return view('pages.add-customer-form');
    }
    //adding
    public function do_add(Request $request){
        $query = DB::table('customer')
        ->insert([
            'name' =>$request->input('name'),
            'contact' =>$request->input('contact')
        ]);
        if($query){
            return redirect(url('/customer'))->with('success', 'Add customer successfully');
        }
    }
    //deleting
public function do_delete($id){
    // Find the record in the database
    $query = DB::table('customer')
    ->where('id', $id)
    ->delete();

    if ($query) {
        // Delete the book record from the database
            return redirect(url('/customer'))->with('success', 'Book deleted successfully');
    }
}
public function show_edit_form($id) {
    // Fetch the book record by its ID
    $data = DB::table('customer')->where('id', $id)->get();
        return view('pages.edit-customer-form', compact('data'));
    } 
//updating
public function do_update(Request $request){
    $query = DB::table('customer')
    ->where('id',$request->input('id'))
    ->update([
        'name' =>$request->input('name'),
        'contact' =>$request->input('contact')
    ]);
    if($query ){
        return redirect(url('/customer'))->with('success', 'Update customer successfully');
    }
}
}

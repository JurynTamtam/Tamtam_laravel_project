<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
        $data = DB::table('book')->get(); //book is the book table in db
        return view('pages.book', compact('data')); // book here is the book.blade.php in pages
   
    }
    //add form
    public function show_add_form(){
        return view('pages.add-book-form');
    }
    //adding
    public function do_add(Request $request){
        //check image
        $filename = NULL;
        if($request->file('photo')){
            $file=$request->file('photo');
            //print_r($file);
            $filename = $file->getClientOriginalName();
            $file->move('_uploads',$filename);
        }
        $query = DB::table('book')
        ->insert([
            'title' =>$request->input('title'),
            'description' =>$request->input('description'),
            'country_id' =>$request->input('country_id'),
            'stock' =>$request->input('stock'),
            'amount' =>$request->input('amount'),
            'photo' =>$filename
        ]);
        if($query){
            return redirect(url('/book'))->with('success', 'Add book successfully');
        }
    }
    //deleting
public function do_delete($id){
    // Find the record in the database
    $query = DB::table('book')
    ->where('id', $id)
    ->delete();

    if ($query) {
        // Delete the book record from the database
            return redirect(url('/book'))->with('success', 'Book deleted successfully');
    }
}
public function show_edit_form($id) {
    // Fetch the book record by its ID
    $data = DB::table('book')->where('id', $id)->get();
        return view('pages.edit-book-form', compact('data'));
    } 
//updating
public function do_update(Request $request){
    $filename = NULL;
    if($request->file('photo')){
        $file=$request->file('photo');
        $filename=$file->getClientOriginalName();
        $file->move('_uploads',$filename);
    }
    $query = DB::table('book')
    ->where('id',$request->input('id'))
    ->update([
        'title' =>$request->input('title'),
        'description' =>$request->input('description'),
        'country_id' =>$request->input('country_id'),
        'stock' =>$request->input('stock'),
        'amount' =>$request->input('amount'),
        'photo' =>$filename
    ]);
    if($query ){
        return redirect(url('/book'))->with('success', 'Update Book successfully');
    }
}
}

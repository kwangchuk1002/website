<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     public function index()
    {
        $contact = DB::select('select * from contacts');
        $photo = DB::select('select * from photos');
        return view('home',['contact'=>$contact],['photo'=>$photo]);
    }
    public function destroy($id) {
        DB::delete('delete from contacts where id = ?',[$id]);
        return redirect('home');
    }
    public function destroyproject($id) {
        DB::delete('delete from photos where id = ?',[$id]);
        return redirect('home') ;
    }
    

    
}

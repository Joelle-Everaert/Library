<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
class BookListController extends Controller
{
    // public function index()
    // {
    //     $books = Books::all();
    //     return view('welcome', compact('books'));
    // }

    public function index()
    {
        $books = Books::paginate(15);
        return view('welcome', ['books'=>$books]);
    }
     
}

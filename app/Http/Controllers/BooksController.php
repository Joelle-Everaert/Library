<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::paginate(15);
        return view('dashboard',['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user=$request->user();
        if($user){
            return view('books.create', compact('user'));
        }else{
            return redirect()->route('books.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category'=> 'required',
            'quantity'=> 'required',
        ]);
        
        Books::create($request->all());

        return redirect()->route('books.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(Books $book)
    // {
    //     return view('books.show', compact('book'));
        
    // }
    public function show(Books $book)
    {
        $category = Books::where('category', '=', $book->category)->inRandomOrder()->take(3)->get();
        $author = Books::where('author', '=', $book->author)->inRandomOrder()->take(3)->get();
        return view('books.show', [
            'book' => $book,
            'category' => $category,
            'author' => $author,

        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $book)
    {
        return view('books.edit', compact('book'));
    }

    // public function edit(Request $request, Books $book)
    // {   
    //     $user=$request->user();
    //     if($user){
    //         return view('books.edit', compact('user'));
    //     }else{
    //         return redirect()->route('books.index');
    //     }
    // }


    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $book)
    {
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'category'=>'required',
            'quantity'=>'required',
        ]);

        $book->update($request->all());
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $book)
    {
        $book->delete($book);
        return redirect()->route('books.index');
    }

    

}

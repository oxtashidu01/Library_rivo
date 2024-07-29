<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['books'] = Book::all();
        return view('books.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       // $book = new Book();
       // $book-> = author = $request['author']
       // $book-> = title = $request['title'];
       // $book-> = description = $request['description'];
       // $book-> = isbn = $request['isbn'];
       // $book-> = published_year = $request['published_year'];
       // $book->save();
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->  author = $request['author'];
        $book-> title = $request['title'];
        $book->  description = $request['description'];
        $book->  isbn = $request['isbn'];
        $book->  published_year = $request['published_year'];
        $book->save();
        
        return redirect()->to('books');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $data['books'] = Book::find();
        return view('books.edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $data['book'] = Book::find();
        return view('books.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book = new Book();
        $book->  author = $request['author'];
        $book-> title = $request['title'];
        $book->  description = $request['description'];
        $book->  isbn = $request['isbn'];
        $book->  published_year = $request['published_year'];
        $book->save();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $book = Book::find($id);
        $book-> delete();
        return redirect()->to('books');
    }
}

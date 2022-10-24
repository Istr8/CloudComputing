<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{

    public $books;
    public function getBooks()
    {
        $this->books = json_decode(Storage::disk()->get('books.json'));
        return $this->books;
    }

    public function saveBooks()
    {
        Storage::disk()->put('books.json', json_encode($this->books, JSON_PRETTY_PRINT));
    }
    public function show()
    {
        $this->getBooks();
        return view("pagina1",['books' => $this->books]);
    }

    public function pagina2()
    {
        // $this->getBooks();
        // $this->books = [];
        // $this->saveBooks();
        return view("pagina2");
        
    }

    public function post(Request $request)
    {
        $this->getBooks();
        array_push($this->books, collect($request->all())->only(['nume','autor','editura','numar_pagini']));
        $this->saveBooks();
        return redirect()->route('book_form');
    }
}

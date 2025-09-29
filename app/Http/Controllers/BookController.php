<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Http\Resources\BookResources;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $books = Book::all();

        return $this->sendResponse(BookResources::collection($books), 'Books retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {

        $book = Book::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id);

        return $this->sendResponse(new BookResources($book), 'Book retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, string $id)
    {
        $book = Book::findOrFail($id);

        $book->update($request->validated());

        $book->refresh();

        return $this->sendResponse(new BookResources($book), 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);

        $book->delete();

        return $this->sendResponse([], 'Book deleted successfully.');
    }
}

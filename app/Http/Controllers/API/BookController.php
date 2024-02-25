<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
            ]);

            $book = Book::create($request->all());
            return response()->json(['message' => 'Book created successfully.', 'book' => $book], 201);
        } catch (ValidationException $exception) {
            return response()->json(['errors' => $exception->errors()], 422);
        } catch (\Exception $exception) {
            return response()->json(['error' => 'Error creating book.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return $book;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string'
            ]);

            $book->update($request->all());
            return response()->json(['message' => 'Book updated successfully.', 'book' => $book], 200);
        } catch (ValidationException $exception) {
            return response()->json(['errors' => $exception->errors()], 422);
        } catch (\Exception $exception) {
            return response()->json(['error' => 'Error updating book.'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        try {
            $foundBook = Book::findOrFail($book->id);
            $foundBook->delete();
            return response()->json(['message' => 'Book deleted successfully.'], 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'Book not found.'], 404);
        } catch (\Exception $exception) {
            return response()->json(['error' => 'Error deleting book.'], 500);
        }
    }
}

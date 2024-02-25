<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class UserBookContrller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getBooksByUser(int $id)
    {
        return User::find($id)->books()->get();
    }

    public function getUsersByBook(int $id)
    {
        return Book::find($id)->users()->get();
    }

    public function detach(int $userId, int $bookId)
    {
        return User::find($userId)->books()->detach($bookId);
    }

    public function attach(Request $request, $userId, $bookId)
    {
        return User::find($userId)->books()->attach($bookId, ['quantity' => $request->quantity]);
    }

    public function modifyQuantity(Request $request, $userId, $bookId)
    {
        return User::find($userId)->books()->sync($bookId, ['quantity' => $request->quantity]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

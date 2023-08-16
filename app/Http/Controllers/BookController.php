<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\Destination;
use App\Models\Details;
use Dotenv\Validator;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function book()
    {
        return view('user.book');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required', // Add any other validation rules you need
            'address' => 'required',
            'phone' => 'required',
            'where' => 'required',
            'how' => 'required',
            'arrival' => 'required',
            'leaving' => 'required',
        ]);
        $book = new book();
        $book->name = $request->name;
        $book->email = $request->email;
        $book->address = $request->address;
        $book->phone = $request->phone;
        $book->where = $request->where;
        $book->how = $request->how;
        $book->arrival = $request->arrival;
        $book->leaving = $request->leaving;
        $book->user_id = $request->user()->id;
        $book->save();
        return redirect('/details');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function details()
    {
        $user=auth()->user();
        $books = book::where('user_id',$user->id)->get();
        return view('user.Details',compact('books'));
    }

    /**
     * Display the specified resource.
     */
    public function booking()
    {
        $details = Details::latest()->get();
        $books = book::latest()->get();
        return view('admin.booking',compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        //
    }
}

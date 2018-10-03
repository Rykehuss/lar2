<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @param Book $book
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function index(Book $book)
    {
        $books = $book->owned()->orderBy('id', 'asc')->get(); // $books = Book::all();
        return view('book.index', compact('books'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function create()
    {
        return view('book.create');
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Book $book
	 * @param BookRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function store(Book $book, BookRequest $request)
    {
        $book->create($request->all());
        return redirect()->route('book.index');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param Book $book
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param Book $book
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function edit(Book $book)
    {
        return view('book.edit', compact('book'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param Book $book
	 * @param BookRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function update(Book $book, BookRequest $request)
    {
		$book->update($request->all());
		return redirect()->route('book.index');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param Book $book
	 * @return \Illuminate\Http\RedirectResponse
	 * @throws \Exception
	 */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.index');
    }
}

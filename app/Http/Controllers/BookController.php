<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$books = Book::all();
		return $books;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(Request $request) {
		Book::create([
				'name'   => $request['name'],
				'author' => $request['author']
			]);

		return ['sucess' => 'The book successfully added'];
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function show(Book $book) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id, Book $book) {
		$book = $book->findOrFail($id);

		return $book;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function update($id, Request $request, Book $book) {
		$book = $book->findOrFail($id);
		$book->update($request->all());

		return ['success' => 'The book successfully updated'];
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id, Book $book) {
		$book = $book->findOrFail($id);
		$book->delete();

		return ['success' => 'The book successfully deleted'];
	}
}

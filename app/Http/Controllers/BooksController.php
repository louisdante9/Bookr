<?php

namespace App\Http\Controllers;

use App\Book;

/**
 * Class BooksController
 * @package App\Http\Controller
 */

class BooksController
{

    /**
     * GET /books
     * @return array
     */

    public function index() {
        return Book::all();
    }
}
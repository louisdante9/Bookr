<?php

//use Laravel\Lumen\Testing\DatabaseMigrations;
//use Laravel\Lumen\Testing\DatabaseTransactions;

namespace Tests\App\Http\Controllers;

use TestCase;

class BooksControllerTest extends TestCase
{
    /**
     * A test for getting all books`/books`.
     *
     * @test
     */
    public function index_status_code_should_be_200()
    {
       $this->get('/books')->seeStatusCode(200);
    }

    /**
     * @test
     */
    public function index_should_return_a_collection_of_records()
    {
        $this->get('/books')
            ->seeJson([
                'title' => 'Wars of the Worlds'
            ])
            ->seeJson([
              'title' => 'A Wrinkle in Time'
            ]);
    }
}

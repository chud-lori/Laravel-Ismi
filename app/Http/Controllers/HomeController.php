<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function category() {
        $data = DB::select('select * from categories where id < ?', [5]);
        return json_encode($data);
    }

    public function book() {
        // $category = Category::create([
        //     'title' => 'novel'
        // ]);

        // $books = Book::create([
        //     'title' => 'Bumi Manusia',
        //     'stock' => 3,
        //     'author' => 'Pramoedya Ananta Toer',
        //     'category_id' => $category->id
        // ]);

        $books = Book::all();

        return view("book", ["books" => $books]);

        // return json_encode($book);
    }
}

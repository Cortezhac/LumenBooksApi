<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return Book list
     * @return JsonResponse
     */
    public function index(){
        $books = Book::all();
        return $this->successResponse($books);
    }

    /**
     * Create Book instance
     * @param Request $request
     */
    public function store(Request $request){
        $rules = [
            'title'=> 'required|max:255',
            'description'=>'required|max:400',
            'price' => 'required|min:1',
            'author_id' => 'required|min:1'
        ];

        $this->validate($request, $rules);

        $book = Book::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'price' => $request->price,
            'author_id' => $request->author_id
        ]);

        return $this->successResponse($book, Response::HTTP_CREATED);
    }

    /**
     * Return one Book instance
     * @param $id
     */
    public function show($id){

    }

    /**
     * Update on Book existing instance
     * @param Request $request
     * @param $id
     */
    public function update(Request $request, $id){

    }

    /**
     * Delete Book existing instance
     * @param $id
     */
    public function destroy($id){

    }
}

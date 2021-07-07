<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Request;

class BookController extends Controller
{
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

    }

    /**
     * Create Book instance
     * @param Request $request
     */
    public function store(Request $request){
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

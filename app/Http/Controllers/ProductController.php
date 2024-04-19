<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products = [
        [
            'id' => 1,
            'name' => 'nn',
            'email' => 'wiw@example.com',
            'contact' => 'xxxxxxxx'
        ],[
            'id' => 2,
            'name' => 'nn',
            'email' => 'wiw@example.com',
            'contact' => 'xxxxxxxx'
        ],[
            'id' => 3,
            'name' => 'nn',
            'email' => 'wiw@example.com',
            'contact' => 'xxxxxxxx'
        ],[
            'id' => 4,
            'name' => 'nn',
            'email' => 'wiw@example.com',
            'contact' => 'xxxxxxxx'
        ]
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return response() -> json($this->products);
        return response() -> json([
            "message" => "Displayed all items"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response() -> json([
            "message" => "Created Succesfully"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response() -> json([
            "message" => "Showing ID: " . $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return response() -> json([
            "message" => "Item ID: ". $id ." updated"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response() -> json([
            "message" => "Item ID: ". $id ." deleted"
        ]);
    }
}

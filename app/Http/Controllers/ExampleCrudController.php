<?php

namespace App\Http\Controllers;

use App\Example;
use Illuminate\Http\Request;

class ExampleCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $example = Example::all();
        return view('products.index',compact('example'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comics = $request->all();

        // inserisco un nuovo record
        $newExample = new Example();
        $newExample->title = $comics["title"];
        $newExample->description = $comics["description"];
        if(!empty($comics["thumb"])){
            $newExample->thumb = $comics["thumb"];
        }
        $newExample->price = $comics["price"];
        $newExample->series = $comics["series"];
        $newExample->sale_date = $comics["sale_date"];
        $newExample->type = $comics["type"];

        $newExample->save();

        return redirect()->route('welcome.show', $newExample->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Example $example)
    {
        return view('products.show', compact('example'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Example $example)
    {
        return view('products.edit', compact('example'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Example $example)
    {
        $comics = $request->all();

        // inserisco un nuovo record
        $example = new Example();
        $example->title = $comics["title"];
        $example->description = $comics["description"];
        if(!empty($comics["thumb"])){
            $example->thumb = $comics["thumb"];
        }
        $example->price = $comics["price"];
        $example->series = $comics["series"];
        $example->sale_date = $comics["sale_date"];
        $example->type = $comics["type"];

        $example->save();

        return redirect()->route('welcome.show', $example->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Example $example)
    {
        $example->delete();
        
        return redirect()->route('welcome.index');
    }
}

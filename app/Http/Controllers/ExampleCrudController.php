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

        $newExample = new Example();

        /* $newExample->title = $comics["title"];
        $newExample->description = $comics["description"];
        if(!empty($comics["thumb"])){
            $newExample->thumb = $comics["thumb"];
        }
        $newExample->price = $comics["price"];
        $newExample->series = $comics["series"];
        $newExample->sale_date = $comics["sale_date"];
        $newExample->type = $comics["type"]; */

        $newExample->fill($comics);
        $newExample->save();

        return redirect()->route('welcome.show', $newExample->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Example $welcome)
    {
        return view('products.show', compact('welcome'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Example $welcome)
    {
        return view('products.edit', compact('welcome'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Example $welcome)
    {
        $comics = $request->all();

        // inserisco un nuovo record
        $welcome = new Example();
/*         $welcome->title = $comics["title"];
        $welcome->description = $comics["description"];
        if(!empty($comics["thumb"])){
            $welcome->thumb = $comics["thumb"];
        }
        $welcome->price = $comics["price"];
        $welcome->series = $comics["series"];
        $welcome->sale_date = $comics["sale_date"];
        $welcome->type = $comics["type"]; */

        $welcome->fill($comics);
        $welcome->save();

        return redirect()->route('welcome.show', $welcome->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Example $welcome)
    {
        $welcome->delete();
        
        return redirect()->route('welcome.index');
    }
}

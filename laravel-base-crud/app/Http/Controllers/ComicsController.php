<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics= Comic::all();
        return view('comics.index',['comics'=>$comics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputData= $request->all();
        $newComic = new Comic();
        $newComic->title= $inputData['title'];
        $newComic->description= $inputData['description'];
        $newComic->price= $inputData['price'];
        $newComic->series= $inputData['series'];
        $newComic->sale_date= $inputData['sale_date'];
        $newComic->type= $inputData['type'];
        $newComic->save();
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::find($id);
        return view('comics.show',['comics'=>$comics]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics= Comic::find($id);
        return view('comics.edit', ['comics'=>$comics]);
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
        $comics= Comic::find($id);
        $inputData= $request->all();
        $comics->title= $inputData['title'];
        $comics->description= $inputData['description'];
        $comics->price= $inputData['price'];
        $comics->series= $inputData['series'];
        $comics->sale_date= $inputData['sale_date'];
        $comics->type= $inputData['type'];
        $comics->save();
        return redirect()->route('comics.index', ['comics'=>$comics]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

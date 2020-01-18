<?php

namespace App\Http\Controllers;

use App\Garbage;
use Illuminate\Http\Request;

class GarbageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('garbage.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $garbage = new Garbage();
        $garbage->number = rand(0, 9999999999999999);
        $garbage->save();
        return view('garbage.edit', ['garbage' => $garbage]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Garbage  $garbage
     * @return \Illuminate\Http\Response
     */
    public function show(Garbage $garbage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Garbage  $garbage
     * @return \Illuminate\Http\Response
     */
    public function edit(Garbage $garbage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Garbage  $garbage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garbage $garbage)
    {
      // Here's basically it
      $val = $request->value;
      if($val == '>'){
        $garbage->min = $garbage->number;
      }
      else if($val == '<'){
        $garbage->max = $garbage->number;
      }
      else if($val == '='){
        $garbage->min = $garbage->number;
        $garbage->max = $garbage->number;
      }
      $garbage->number = floor(($garbage->min ?? 0 + $garbage->max ?? $garbage->number * 2) / 2);
      $garbage->save();
      return view('garbage.edit', ['garbage' => $garbage]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Garbage  $garbage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garbage $garbage)
    {
        //
    }
}

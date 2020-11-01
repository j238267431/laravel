<?php

namespace App\Http\Controllers\forms;

use App\Http\Controllers\Controller;
use App\Models\feedBack;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\feedBack  $feedBack
     * @return \Illuminate\Http\Response
     */
    public function show(feedBack $feedBack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\feedBack  $feedBack
     * @return \Illuminate\Http\Response
     */
    public function edit(feedBack $feedBack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\feedBack  $feedBack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, feedBack $feedBack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\feedBack  $feedBack
     * @return \Illuminate\Http\Response
     */
    public function destroy(feedBack $feedBack)
    {
        //
    }
}

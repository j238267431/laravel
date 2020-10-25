<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        echo "news list admin";
    }
    public function create()
    {
        return view('news.create');
    }
    public function edit(int $id)
    {
        echo "edit news with id " .$id;
    }
    public function destroy(int $id)
    {
        echo "delete news with id " .$id ;
    }

}

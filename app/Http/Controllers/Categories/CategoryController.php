<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $titleNews = $this->newsList[0];
        return view('categories.index', ['categories' => $this->categoryList, 'titleNews' => $titleNews]);
    }

    public function show(int $id)
    {
        $category = '';

        foreach ($this->categoryList as $c){
            if($id === $c['id']){
                $category = $c['category_name'];
            }
        }
        $newsList = [];
        foreach ($this->newsList as $n){
            if ($id === $n['categoryId']){
                $newsList[] = $n;
            }
        }
        return view('categories.show',
            [
                'id' => $id,
                'category' => $category,
                'news' => $newsList,
                'categories' => $this->categoryList
            ]);
    }
}

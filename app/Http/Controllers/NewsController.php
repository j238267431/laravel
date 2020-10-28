<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function indexNews($id, $newsId)
    {
        $oneNews = [];
        foreach ($this->newsList as $n){
            if($n['id'] == $newsId){
                $oneNews = $n;
            }
        }
        return view(
            'news.showNews',
            [
                'oneNews' => $oneNews,
                'id' => $id,
                'newsId' => $newsId,
                'categories' => $this->categoryList
            ]);
    }
}

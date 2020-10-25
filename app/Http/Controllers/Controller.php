<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $categoryList =
        [
            [
                'id' => 1,
                'category_name' => 'Nature'
            ],
            [
                'id' => 2,
                'category_name' => 'Politics'
            ],
            [
                'id' => 3,
                'category_name' => 'Games'
            ],
            [
                'id' => 4,
                'category_name' => 'High tech'
            ],
            [
                'id' => 5,
                'category_name' => 'Auto'
            ],
        ];
    protected $newsList = [
        [
            'id' => 1,
            'categoryId' => 1,
            'slug' => 'one',
            'title' => 'news 1',
            'description' => 'description of the news 1'
        ],
        [
            'id' => 2,
            'categoryId' => 1,
            'slug' => 'two',
            'title' => 'news 2',
            'description' => 'description of the news 2'
        ],
        [
            'id' => 3,
            'categoryId' => 1,
            'slug' => 'three',
            'title' => 'news 3',
            'description' => 'description of the news 3'
        ],
        [
            'id' => 4,
            'categoryId' => 1,
            'slug' => 'four',
            'title' => 'news 4',
            'description' => 'description of the news 4'
        ],
        [
            'id' => 5,
            'categoryId' => 2,
            'slug' => 'one',
            'title' => 'news 5',
            'description' => 'description of the news 5'
        ],
        [
            'id' => 6,
            'categoryId' => 2,
            'slug' => 'two',
            'title' => 'news 6',
            'description' => 'description of the news 6'
        ],
        [
            'id' => 7,
            'categoryId' => 2,
            'slug' => 'three',
            'title' => 'news 7',
            'description' => 'description of the news 7'
        ],
        [
            'id' => 8,
            'categoryId' => 2,
            'slug' => 'four',
            'title' => 'news 8',
            'description' => 'description of the news 8'
        ],
        [
            'id' => 9,
            'categoryId' => 3,
            'slug' => 'one',
            'title' => 'news 9',
            'description' => 'description of the news 9'
        ],
        [
            'id' => 10,
            'categoryId' => 3,
            'slug' => 'two',
            'title' => 'news 10',
            'description' => 'description of the news 10'
        ],
        [
            'id' => 11,
            'categoryId' => 3,
            'slug' => 'three',
            'title' => 'news 11',
            'description' => 'description of the news 11'
        ],
        [
            'id' => 12,
            'categoryId' => 3,
            'slug' => 'four',
            'title' => 'news 12',
            'description' => 'description of the news 12'
        ],
        [
            'id' => 13,
            'categoryId' => 4,
            'slug' => 'one',
            'title' => 'news 13',
            'description' => 'description of the news 13'
        ],
        [
            'id' => 14,
            'categoryId' => 4,
            'slug' => 'two',
            'title' => 'news 14',
            'description' => 'description of the news 14'
        ],
        [
            'id' => 15,
            'categoryId' => 4,
            'slug' => 'three',
            'title' => 'news 15',
            'description' => 'description of the news 15'
        ],
        [
            'id' => 16,
            'categoryId' => 4,
            'slug' => 'four',
            'title' => 'news 16',
            'description' => 'description of the news 16'
        ],
        [
            'id' => 17,
            'categoryId' => 5,
            'slug' => 'one',
            'title' => 'news 17',
            'description' => 'description of the news 17'
        ],
        [
            'id' => 18,
            'categoryId' => 5,
            'slug' => 'two',
            'title' => 'news 18',
            'description' => 'description of the news 18'
        ],
        [
            'id' => 19,
            'categoryId' => 5,
            'slug' => 'three',
            'title' => 'news 19',
            'description' => 'description of the news 19'
        ],
        [
            'id' => 20,
            'categoryId' => 5,
            'slug' => 'four',
            'title' => 'news 20',
            'description' => 'description of the news 20'
        ],
    ];

    public function showStartingPage()
    {
        return view ('news.welcome');
    }

    public function index()
    {
        return view('news.index', ['category' => $this->categoryList]);
    }
    public function showCategoryList($category)
    {
        return view('news.show', ['categoryId' => $category, 'news' => $this->newsList, 'category' => $this->categoryList]);
    }
    public function showNewsList($category, $id)
    {
        return view(
            'news.showNews',
            ['categoryId' => $category, 'id' => $id, 'news' => $this->newsList, 'category' => $this->categoryList]
        );
    }
    public function greetUser()
    {
        return view('news.greetingPage');
    }


}

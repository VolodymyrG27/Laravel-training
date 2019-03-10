<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class IndexController extends Controller
{
    // створення конструктора
    protected $message;
    protected $header;
    protected $logo;
    public function __construct() {
        $this->header = 'Hello World!';
        $this->logo = 'Test Laravel';
        $this->message = 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.';
    }
    public function index() {
        $articles = Article::select(['Id', 'title', 'text'])->get();
        //dump($articles)
        return view('page_one')->with(['message'=>$this->message, 
                                       'header'=>$this->header,
                                        'articles'=>$articles,
                                        'logo'=>$this->logo
                                        ]);
    }
    public function show($Id) {
        // $article = Article::find($Id);
        $article = Article::select(['Id', 'title', 'text'])->where('Id', $Id)->first();
        // dump($article);
        return view('article-content')->with(['message'=>$this->message, 
                                              'header'=>$this->header,
                                              'article'=>$article,
                                              'logo'=>$this->logo
                                            ]);
    }
    public function add() {
        return view('add-content')->with(['message'=>$this->message,
                                          'header'=>$this->header
                                        ]);
    }

    public function store() {

    }

}



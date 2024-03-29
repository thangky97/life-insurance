<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;

class NewController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request) {
        //get all news
        $this->v['news'] = News::where('status', '=', 1)->get();
        
        return view('client.news', $this->v);
    }

    public function detail($id, Request $request)
    {    

        $this->v['relatedNew'] = News::where('status', '=', 1)->get();

        $this->v['news'] = News::where('status', '=', 1)->find($id);
        
        return view('client.news_detail', $this->v);
    }
}

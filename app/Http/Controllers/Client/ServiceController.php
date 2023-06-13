<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request) {
        //No delete
        $this->v['banner'] = Banner::select('image', 'status')
            ->where('status', '=', 1)
            ->get();
        //No delete
        $this->v['listMenuService'] = Service::where('status', '=', 1)->get();

        //No delete
        $this->v['news'] = News::where('status', '=', 1)->paginate(4);

        //No delete footer
        $this->v['newsFooter'] = News::select('id' , 'title', 'images_news', 'sort_content', 'content', 'status')
            ->where('status', '=', 1)
            ->paginate(4);

        return view('client.service', $this->v);
    }

    public function detail($id, Request $request)
    {    
        $this->v['banner'] = Banner::select('image', 'status')
            ->where('status', '=', 1)
            ->get();

        //No delete
        $this->v['listMenuService'] = Service::where('status', '=', 1)->get();

        //No delete
        $this->v['news'] = News::where('status', '=', 1)->paginate(4);

        //No delete footer
        $this->v['newsFooter'] = News::where('status', '=', 1)->paginate(4);

        $this->v['service'] = Service::where('status', '=', 1)->find($id);
        
        return view('client.service_detail', $this->v);
    }
}

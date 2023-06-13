<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
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

        $this->v['listService'] = Service::where('status', '=', 1)->paginate(4);
        
        //No delete
        $this->v['listMenuService'] = Service::where('status', '=', 1)->get();

        //No delete footer
        $this->v['newsFooter'] = News::where('status', '=', 1)->paginate(4);

        $this->v['news'] = News::where('status', '=', 1)->paginate(4);

        return view('home', $this->v);
    }

}

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Introduce;
use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;

class IntroduceController extends Controller
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
        //No delete header
        $this->v['listMenuService'] = Service::where('status', '=', 1)->get();

        //No delete footer
        $this->v['newsFooter'] = News::where('status', '=', 1)->paginate(4);

        $this->v['introduce'] = Introduce::select('title', 'image', 'description', 'status')
            ->get();

        return view('client.introduce', $this->v);
    }
}

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Ask_Question;
use App\Models\Banner;
use App\Models\CustomerUse;
use App\Models\News;
use App\Models\Service;
use App\Models\Setting_home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request) {

        //Danh sách dịch vụ
        $this->v['listService'] = Service::where('status', '=', 1)->paginate(4);

        //Danh sách khách hàng sử dụng
        $this->v['customerUse'] = CustomerUse::where('status', '=', 1)->get();

        //Câu hỏi thường gặp
        $this->v['questions'] = Ask_Question::select('id', 'title', 'image_question', 'content')->orderBy('id','desc')->get();

        //Danh sách bài viết
        $this->v['news'] = News::where('status', '=', 1)->paginate(3);

        return view('home', $this->v);
    }

    

}

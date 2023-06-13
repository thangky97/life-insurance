<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        $this->v['newsFooter'] = News::where('status', '=', 1)->paginate(4);
        
        //lấy dũ liệu liên hệ
        $this->v['contact'] = Contact::where('status', '=', 1)->get();

        return view('client.contact', $this->v);
    }
}

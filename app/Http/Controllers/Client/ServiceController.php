<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Insurance_services;
use App\Models\News;
use App\Models\Service;
use App\Models\Setting_home;
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
        $this->v['news'] = News::where('status', '=', 1)->paginate(4);

        //Danh sách dịch vụ
        $this->v['listService'] = Service::where('status', '=', 1)->get();

        return view('client.service', $this->v);
    }

    public function detail($id, Request $request)
    {    
        //No delete
        $this->v['news'] = News::where('status', '=', 1)->paginate(4);
        //No delete
        $this->v['support'] = Setting_home::get();

        //ds service
        $this->v['listService'] = Service::where('status', '=', 1)->get();
        //lấy detail service
        $this->v['service'] = Service::with('insurance_services')->find($id);
        
        return view('client.service_detail', $this->v);
    }
}

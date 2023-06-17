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

        $this->v['introduce'] = Introduce::get();

        return view('client.introduce', $this->v);
    }
}

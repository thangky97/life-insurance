<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\ContactConfirmation;
use App\Mail\ContactNotification;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        // Lưu dữ liệu vào cơ sở dữ liệu
        // $data = [
        //     'contact_name' => $request->input('contact_name'),
        //     'phone_number' => $request->input('phone_number'),
        //     'message' => $request->input('message')
        // ];

        // $data = Contact::create([
        //     'contact_name' => $request->input('contact_name'),
        //     'phone_number' => $request->input('phone_number'),
        //     'message' => $request->input('message')
        //     ]);
        // Lưu dữ liệu vào database, ví dụ:
        // Contact::create($data);

        // Gửi email xác nhận cho người dùng
        // Mail::to($data['email'])->send(new ContactConfirmation($data));

        // Gửi email thông báo cho người quản trị
        // Mail::to('youremail@example.com')->send(new ContactNotification($data));

        return view('client.contact', $this->v);
    }
}

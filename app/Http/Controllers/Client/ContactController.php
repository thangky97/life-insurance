<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\ContactConfirmation;
use App\Mail\ContactNotification;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\News;
use App\Models\Service;
use App\Models\Setting_home;
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
        $this->v['support'] = Setting_home::get();
        //No delete
        $this->v['news'] = News::where('status', '=', 1)->paginate(4);
        
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

    public function create(Request $request) {
        $rules = [
            'contact_name' => 'required',
            'phone_number' => 'required',
            'message' => 'required',
        ];

        $messages =[
            'contact_name.required' => 'Không được bỏ trống tên!',
            'phone_number.required' => 'Không được bỏ trống số điện thoại!',
            'message.required' => 'Không được bỏ trống nội dung!',
        ];
    $validatedData = $request->validate($rules,$messages);

        $data = new Contact([
                'contact_name' => $request->contact_name,
                'phone_number' => $request->phone_number,
                'message' => $request->message,
            ]
        ) ;
        $data->save();

        return redirect()->route('route_FrontEnd_Contact')
            ->with('success', 'Gửi thành công! Chúng tôi sẽ phản hồi sớm nhất');
    }

    public function addFooter(Request $request) {
        $rules = [
            'contact_name' => 'required',
            'phone_number' => 'required',
            'message' => 'required',
        ];

        $messages =[
            'contact_name.required' => 'Không được bỏ trống tên!',
            'phone_number.required' => 'Không được bỏ trống số điện thoại!',
            'message.required' => 'Không được bỏ trống nội dung!',
        ];
    $validatedData = $request->validate($rules,$messages);

        $data = new Contact([
                'contact_name' => $request->contact_name,
                'phone_number' => $request->phone_number,
                'message' => $request->message,
            ]
        ) ;
        $data->save();

        return redirect()->back();
    }
}

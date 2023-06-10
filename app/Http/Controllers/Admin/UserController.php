<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request)
    {
        // $name = $request->get('name');
        // $phone = $request->get('phone');
        // $email = $request->get('email');
        // if($name){
        //     $users = User::where('name','like','%'.$name.'%')
        // ->paginate(10);
        // } elseif ($phone){
        //     $users = User::where('phone','like','%'.$phone.'%')
        // ->paginate(10);
        // } elseif ($email){
        //     $users = User::where('email','like','%'.$email.'%')
        // ->paginate(10);
        // } else{
        //     $users = User::select('name', 'email', 'phone', 'password', 'address', 'cccd', 'date', 'gender', 'status')->orderBy('id','desc')
        // ->paginate(10);
        // }   

        return view('admin.user.list');
    }

    public function add(Request $request) {
        // $method_route = "route_BackEnd_Users_Add";

        // if ($request->isMethod('post')) {
        //     $request->validate([
        //         'name' => 'required|min:3|max:40',
        //         'email' => 'required|email|max:50|unique:users',
        //         'phone' => 'required|numeric|min:10',
        //         'status' => 'required',
        //         'images' =>
        //         [
        //             'image',
        //             'mimes:jpeg,png,jpg',
        //             'mimetypes:image/jpeg,image/png',
        //             'max:2048',
        //         ],
        //     ], [
        //         'name.required' => 'Tên bắt buộc nhập!',
        //         'name.min' => 'Tên tối thiểu 3 ký tự!',
        //         'name.max' => 'Tên tối đa là 40 ký tự!',
        //         'email.required' => 'Email bắt buộc nhập!',
        //         'email.unique' => 'Email đã tồn tại!',
        //         'email.email' => 'Email không đúng định dạng!',
        //         'email.max' => 'Email tối đa 50 ký tự!',
        //         'phone.required' => 'Số điện thoại bắt buộc nhập!',
        //         'phone.numeric' => 'Số điện thoại phải là số!',
        //         'phone.min' => 'Số điện thoại tối thiểu 10 số!',
        //         'images.image' => 'Bắt buộc phải là ảnh!',
        //         'images.max' => 'Ảnh không được lớn hơn 2MB!',
        //         'status.required' => 'Bạn chưa chọn trạng thái',
        //     ], []);

        //     $params = [];
        //     $params['cols'] = $request->post();
        //     unset( $params['cols']['_token']);
        //     if ($request->hasFile('images') && $request->file('images')->isValid())
        //     {
        //         $params['cols']['cccd'] = $this->uploadFile($request->file('images'));
        //     }
        //     $modelTes = new User();
        //     $res = $modelTes->saveNew($params);
        //     if ($res == null) {
        //         return  redirect()->route($method_route);
        //     } elseif ($res > 0) {
        //         Session::flash('success','Thêm mới thành công!');
        //         return redirect()->route('route_BackEnd_Users_List');
        //     } else {
        //         Session::flash('error','Thêm mới không thành công!');
        //         return redirect()->route($method_route);
        //     }
        // }
        return view('admin.user.create');
    }

    // public function edit($id, Request $request) {
    //     $modelUser = new User();
    //     $users = $modelUser->loadOne($id);
    //     $this->v['title'] = ' Sửa người dùng';
    //     $this->v['users'] = $users;
    //     return view('admin.user.edit', $this->v);
    // }

    // public function update($id, UserRequest $request) {

    //     $method_route = 'route_BackEnd_Users_Edit';
    //     $params = [];

    //     $params['cols'] = $request->post();

    //     if ($request->hasFile('images') && $request->file('images')->isValid())
    //         {
    //             $params['cols']['cccd'] = $this->uploadFile($request->file('images'));
    //         }

    //     unset( $params['cols']['_token']);
    //     $params['cols']['id'] = $id;
    //     if (!is_null($params['cols']['password'])) {
    //         $params['cols']['password'] = Hash::make($params['cols']['password']);
    //     }

    //     $modelUser = new User();
    //     $res = $modelUser->saveUpdate($params);
    //     if ($res == null) {
    //         return redirect()->route($method_route,['id'=>$id]);
    //     } elseif ($res == 1) {
    //         Session::flash('success', 'Cập nhật thành công!');
    //         return redirect()->route('route_BackEnd_Users_List');
    //     } else {
    //         Session::flash('error', 'Cập nhật không thành công!');
    //         return redirect()->route($method_route,['id'=>$id]);
    //     }
    // }

    // public function uploadFile($file) {
    //     $fileName = time().'_'.$file->getClientOriginalName();
    //     return $file->storeAs('cccd',$fileName,'public');
    // }
}

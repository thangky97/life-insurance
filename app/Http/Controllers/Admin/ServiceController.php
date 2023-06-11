<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request)
    {
        $name = $request->get('name');
        $phone = $request->get('phone');
        $email = $request->get('email');
        if($name){
            $services = Service::where('name','like','%'.$name.'%')
        ->paginate(10);
        } elseif ($phone){
            $services = Service::where('phone','like','%'.$phone.'%')
        ->paginate(10);
        } elseif ($email){
            $services = Service::where('email','like','%'.$email.'%')
        ->paginate(10);
        } else{
            $services = Service::select('id', 'service_name', 'thumbnail', 'description', 'status')->orderBy('id','desc')
        ->paginate(10);
        }   

        return view('admin.service.list', compact('services'));
    }

    public function create(Request $request) {
        $method_route = "route_BackEnd_Services_Create";

        if ($request->isMethod('post')) {
            $request->validate([
                'service_name' => 'required|max:40',
                'description' => 'required',
                'status' => 'required',
                'images' =>
                [
                    'image',
                    'mimes:jpeg,png,jpg',
                    'mimetypes:image/jpeg,image/png',
                    'max:2048',
                ],
            ], [
                'service_name.required' => 'Tên dịch vụ bắt buộc nhập!',
                'service_name.max' => 'Tên tối đa là 40 ký tự!',
                'description.required' => 'Mô tả bắt buộc nhập!',
                'images.image' => 'Bắt buộc phải là ảnh!',
                'images.max' => 'Ảnh không được lớn hơn 2MB!',
                'status.required' => 'Bạn chưa chọn trạng thái',
            ], []);

            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);
            if ($request->hasFile('images') && $request->file('images')->isValid())
            {
                $params['cols']['thumbnail'] = $this->uploadFile($request->file('images'));
            }

            $modelTes = new Service();
            $res = $modelTes->saveNew($params);

            if ($res == null) {
                return  redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success','Thêm mới thành công!');
                return redirect()->route('route_BackEnd_Services_List');
            } else {
                Session::flash('error','Thêm mới không thành công!');
                return redirect()->route($method_route);
            }
        }
        return view('admin.service.create');
    }

    public function edit($id, Request $request) {
        $modelService = new Service();
        $services = $modelService->loadOne($id);
        $this->v['services'] = $services;
        return view('admin.service.edit', $this->v);
    }

    public function update($id, ServiceRequest $request) {

        $method_route = 'route_BackEnd_Services_Edit';
        $params = [];

        $params['cols'] = $request->post();

        if ($request->hasFile('images') && $request->file('images')->isValid())
            {
                $params['cols']['thumbnail'] = $this->uploadFile($request->file('images'));
            }

        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelUser = new Service();
        $res = $modelUser->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success', 'Cập nhật thành công!');
            return redirect()->route('route_BackEnd_Services_List');
        } else {
            Session::flash('error', 'Cập nhật không thành công!');
            return redirect()->route($method_route,['id'=>$id]);
        }
    }

    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('services',$fileName,'public');
    }
}

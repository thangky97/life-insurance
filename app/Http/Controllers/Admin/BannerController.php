<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request)
    {
        $name = $request->get('name');
        if($name){
            $banner = Banner::where('name','like','%'.$name.'%')
        ->paginate(10);
    } else{
            $banner = Banner::select('id', 'title', 'image', 'status')->orderBy('id','desc')
        ->paginate(10);
        }   

        return view('admin.banner.list', compact('banner'));
    }

    public function create(Request $request) {
        $method_route = "route_BackEnd_Banner_Create";

        if ($request->isMethod('post')) {
            $request->validate([
                'status' => 'required',
                'images' =>
                [
                    'image',
                    'mimes:jpeg,png,jpg',
                    'mimetypes:image/jpeg,image/png',
                    'max:2048',
                ],
            ], [
                'images.image' => 'Bắt buộc phải là ảnh!',
                'images.max' => 'Ảnh không được lớn hơn 2MB!',
                'status.required' => 'Bạn chưa chọn trạng thái',
            ], []);

            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);
            if ($request->hasFile('images') && $request->file('images')->isValid())
            {
                $params['cols']['image'] = $this->uploadFile($request->file('images'));
            }

            $modelTes = new Banner();
            $res = $modelTes->saveNew($params);

            if ($res == null) {
                return  redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success','Thêm mới thành công!');
                return redirect()->route('route_BackEnd_Banner_List');
            } else {
                Session::flash('error','Thêm mới không thành công!');
                return redirect()->route($method_route);
            }
        }
        return view('admin.banner.create');
    }

    public function edit($id, Request $request) {
        $modelBanner = new Banner();
        $banner = $modelBanner->loadOne($id);
        $this->v['banner'] = $banner;
        return view('admin.banner.edit', $this->v);
    }

    public function update($id, BannerRequest $request) {

        $method_route = 'route_BackEnd_Banner_Edit';
        $params = [];

        $params['cols'] = $request->post();

        if ($request->hasFile('images') && $request->file('images')->isValid())
            {
                $params['cols']['image'] = $this->uploadFile($request->file('images'));
            }

        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelUser = new Banner();
        $res = $modelUser->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success', 'Cập nhật thành công!');
            return redirect()->route('route_BackEnd_Banner_List');
        } else {
            Session::flash('error', 'Cập nhật không thành công!');
            return redirect()->route($method_route,['id'=>$id]);
        }
    }

    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('banner',$fileName,'public');
    }
}

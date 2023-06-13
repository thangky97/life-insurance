<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewController extends Controller
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
        if($name){
            $news = News::where('name','like','%'.$name.'%')
        ->paginate(10);
        } elseif ($phone){
            $news = News::where('phone','like','%'.$phone.'%')
        ->paginate(10);
        } else{
            $news = News::select('id', 'title', 'content', 'sort_content', 'images_news', 'status')->orderBy('id','desc')
        ->paginate(10);
        }   

        return view('admin.new.list', compact('news'));
    }

    public function create(Request $request) {
        $method_route = "route_BackEnd_News_Create";

        if ($request->isMethod('post')) {
            $request->validate([
                'title' => 'required|min:3|max:40',
                'content' => 'required',
                'status' => 'required',
                'images' =>
                [
                    'image',
                    'mimes:jpeg,png,jpg',
                    'mimetypes:image/jpeg,image/png',
                    'max:2048',
                ],
            ], [
                'title.required' => 'Tiêu đề bắt buộc nhập!',
                'title.min' => 'Tiêu đề tối thiểu 3 ký tự!',
                'title.max' => 'Tiêu đề tối đa là 40 ký tự!',
                'content.required' => 'Nội dung bắt buộc nhập!',
                'images.image' => 'Bắt buộc phải là ảnh!',
                'images.max' => 'Ảnh không được lớn hơn 2MB!',
                'status.required' => 'Bạn chưa chọn trạng thái',
            ], []);

            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);
            if ($request->hasFile('images') && $request->file('images')->isValid())
            {
                $params['cols']['images_news'] = $this->uploadFile($request->file('images'));
            }

            $modelTes = new News();
            $res = $modelTes->saveNew($params);

            if ($res == null) {
                return  redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success','Thêm mới thành công!');
                return redirect()->route('route_BackEnd_News_List');
            } else {
                Session::flash('error','Thêm mới không thành công!');
                return redirect()->route($method_route);
            }
        }
        return view('admin.new.create');
    }

    public function edit($id, Request $request) {
        $modelNew = new News();
        $news = $modelNew->loadOne($id);
        $this->v['news'] = $news;
        return view('admin.new.edit', $this->v);
    }

    public function update($id, NewRequest $request) {

        $method_route = 'route_BackEnd_News_Edit';
        $params = [];

        $params['cols'] = $request->post();

        if ($request->hasFile('images') && $request->file('images')->isValid())
            {
                $params['cols']['images_news'] = $this->uploadFile($request->file('images'));
            }

        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelNew = new News();
        $res = $modelNew->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success', 'Cập nhật thành công!');
            return redirect()->route('route_BackEnd_News_List');
        } else {
            Session::flash('error', 'Cập nhật không thành công!');
            return redirect()->route($method_route,['id'=>$id]);
        }
    }

    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('news',$fileName,'public');
    }
}

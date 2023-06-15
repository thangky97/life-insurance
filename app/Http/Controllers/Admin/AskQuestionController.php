<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AskQuestionRequest;
use App\Models\Ask_Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AskQuestionController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request)
    {
        $questions = Ask_Question::select('id', 'title', 'image_question', 'content', 'status')->orderBy('id','desc')
            ->paginate(10); 

        return view('admin.frequently_asked_question.list', compact('questions'));
    }

    public function create(Request $request) {
        $method_route = "route_BackEnd_Ask_Question_Create";

        if ($request->isMethod('post')) {
            $request->validate([
                'title' => 'required',
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
                $params['cols']['image_question'] = $this->uploadFile($request->file('images'));
            }

            $modelQuestion = new Ask_Question();
            $res = $modelQuestion->saveNew($params);

            if ($res == null) {
                return  redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success','Thêm mới thành công!');
                return redirect()->route('route_BackEnd_Ask_Question_List');
            } else {
                Session::flash('error','Thêm mới không thành công!');
                return redirect()->route($method_route);
            }
        }
        return view('admin.frequently_asked_question.create');
    }

    public function edit($id, Request $request) {
        $modelAskQuestion = new Ask_Question();
        $questions = $modelAskQuestion->loadOne($id);
        $this->v['questions'] = $questions;
        return view('admin.frequently_asked_question.edit', $this->v);
    }

    public function update($id, AskQuestionRequest $request) {

        $method_route = 'route_BackEnd_Ask_Question_Edit';
        $params = [];

        $params['cols'] = $request->post();

        if ($request->hasFile('images') && $request->file('images')->isValid())
            {
                $params['cols']['image_question'] = $this->uploadFile($request->file('images'));
            }

        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelAskQuestion = new Ask_Question();
        $res = $modelAskQuestion->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success', 'Cập nhật thành công!');
            return redirect()->route('route_BackEnd_Ask_Question_List');
        } else {
            Session::flash('error', 'Cập nhật không thành công!');
            return redirect()->route($method_route,['id'=>$id]);
        }
    }

    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('ask_question',$fileName,'public');
    }
}

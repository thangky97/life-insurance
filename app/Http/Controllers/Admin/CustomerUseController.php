<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerUseRequest;
use App\Models\CustomerUse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerUseController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request)
    {
        $customers_use = CustomerUse::select('id', 'customer_name', 'job', 'customer_photo', 'status')->orderBy('id','desc')
        ->paginate(10);  

        return view('admin.customer_use.list', compact('customers_use'));
    }

    public function create(Request $request) {
        $method_route = "route_BackEnd_Customers_Use_Create";

        if ($request->isMethod('post')) {
            $request->validate([
                'customer_name' => 'required',
                'job' => 'required',
                'status' => 'required',
                'images' =>
                [
                    'image',
                    'mimes:jpeg,png,jpg',
                    'mimetypes:image/jpeg,image/png',
                    'max:2048',
                ],
            ], [
                'customer_name.required' => 'Tên bắt buộc nhập!',
                'job.required' => 'Công việc buộc nhập!',
                'images.image' => 'Bắt buộc phải là ảnh!',
                'images.max' => 'Ảnh không được lớn hơn 2MB!',
                'status.required' => 'Bạn chưa chọn trạng thái',
            ], []);

            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);
            if ($request->hasFile('images') && $request->file('images')->isValid())
            {
                $params['cols']['customer_photo'] = $this->uploadFile($request->file('images'));
            }

            $modelCustomerUse = new CustomerUse();
            $res = $modelCustomerUse->saveNew($params);

            if ($res == null) {
                return  redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success','Thêm mới thành công!');
                return redirect()->route('route_BackEnd_Customers_Use_List');
            } else {
                Session::flash('error','Thêm mới không thành công!');
                return redirect()->route($method_route);
            }
        }
        return view('admin.customer_use.create');
    }

    public function edit($id, Request $request) {
        $modelCustomerUse = new CustomerUse();
        $customers_use = $modelCustomerUse->loadOne($id);
        $this->v['customers_use'] = $customers_use;
        return view('admin.customer_use.edit', $this->v);
    }

    public function update($id, CustomerUseRequest $request) {

        $method_route = 'route_BackEnd_Customers_Use_Edit';
        $params = [];

        $params['cols'] = $request->post();

        if ($request->hasFile('images') && $request->file('images')->isValid())
            {
                $params['cols']['customer_photo'] = $this->uploadFile($request->file('images'));
            }

        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelCustomerUse = new CustomerUse();
        $res = $modelCustomerUse->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success', 'Cập nhật thành công!');
            return redirect()->route('route_BackEnd_Customers_Use_List');
        } else {
            Session::flash('error', 'Cập nhật không thành công!');
            return redirect()->route($method_route,['id'=>$id]);
        }
    }

    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('customer_use',$fileName,'public');
    }
}

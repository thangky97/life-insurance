<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
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
            $customer = Customer::where('name','like','%'.$name.'%')
        ->paginate(10);
        } elseif ($phone){
            $customer = Customer::where('phone','like','%'.$phone.'%')
        ->paginate(10);
        } elseif ($email){
            $customer = Customer::where('email','like','%'.$email.'%')
        ->paginate(10);
        } else{
        //     $customer = Customer::select('id', 'full_name', 'calling_date', 'call_back', 'phone_number', 'address', 'date_of_birth', 'source', 'gender', 'content', 'service_id', 'status_customer', 'status')->orderBy('id','desc')
        // ->paginate(10);
            $customer = Customer::with('service')->orderBy('id', 'desc')->paginate(10);
        }   

        return view('admin.customer.list', compact('customer'));
    }

    public function create(Request $request) {
        $method_route = "route_BackEnd_Customers_Create";
        $services = DB::table('services')->get();

        if ($request->isMethod('post')) {
            $request->validate([
                'full_name' => 'required|max:40',
                'phone_number' => 'required|numeric|min:10',
                'status' => 'required',
                'status_customer' => 'required',
                'gender' => 'required',
                'address' => 'required',
                'source' => 'required',
                'calling_date' => 'required',
                'call_back' => 'required',
                'service_id' => 'required',
            ], [
                'full_name.required' => 'Tên khách hàng bắt buộc nhập!',
                'full_name.max' => 'Tên tối đa là 40 ký tự!',
                'phone_number.required' => 'Số điện thoại bắt buộc nhập!',
                'phone_number.numeric' => 'Số điện thoại phải là số!',
                'phone_number.min' => 'Số điện thoại tối thiểu 10 số!',
                'status.required' => 'Bạn chưa chọn trạng thái',
                'status_customer.required' => 'Bạn chưa chọn trạng thái quan tâm',
                'source.required' => 'Bạn chưa nhập nguồn',
                'gender.required' => 'Bạn chưa chọn giới tính',
                'address.required' => 'Bạn chưa nhập địa chỉ',
                'calling_date.required' => 'Bạn chưa chọn ngày gọi',
                'call_back.required' => 'Bạn chưa chọn ngày gọi lại',
                'service_id.required' => 'Bạn chưa chọn dịch vụ',
            ], []);

            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);

            $modelTes = new Customer();
            $res = $modelTes->saveNew($params);

            if ($res == null) {
                return  redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success','Thêm mới thành công!');
                return redirect()->route('route_BackEnd_Customers_List');
            } else {
                Session::flash('error','Thêm mới không thành công!');
                return redirect()->route($method_route);
            }
        }
        return view('admin.customer.create', compact('services'));
    }

    public function edit($id, Request $request) {
        $modelCustomer = new Customer();
        $customer = $modelCustomer->loadOne($id);
        $this->v['customer'] = $customer;
        return view('admin.customer.edit', $this->v);
    }

    public function update($id, CustomerRequest $request) {

        $method_route = 'route_BackEnd_Customers_Edit';
        $params = [];

        $params['cols'] = $request->post();

        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelCustomer = new Customer();
        $res = $modelCustomer->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success', 'Cập nhật thành công!');
            return redirect()->route('route_BackEnd_Customers_List');
        } else {
            Session::flash('error', 'Cập nhật không thành công!');
            return redirect()->route($method_route,['id'=>$id]);
        }
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InsuranceServicesRequest;
use App\Models\Insurance_services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class InsuranceServicesController extends Controller
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
            $insurance_services = Insurance_services::where('name','like','%'.$name.'%')
        ->paginate(10);
        } elseif ($phone){
            $insurance_services = Insurance_services::where('phone','like','%'.$phone.'%')
        ->paginate(10);
        } elseif ($email){
            $insurance_services = Insurance_services::where('email','like','%'.$email.'%')
        ->paginate(10);
        } else{
            $insurance_services = Insurance_services::with('service')->orderBy('id','desc')
        ->paginate(10);
        }   

        return view('admin.insurance_service.list', compact('insurance_services'));
    }

    public function create(Request $request) {
        $method_route = "route_BackEnd_Insurance_Services_Create";
        $listService = DB::table('services')->where('status', '=', 1)->get();

        $Insurance_services = new Insurance_services();

        $arrInsurance_services = array();
            foreach ($Insurance_services->loadAll() as $index => $insurance_service) {
                $arrInsurance_service = array($index => $insurance_service->service_id);
                $arrInsurance_services = $arrInsurance_service + $arrInsurance_services;
        }
        $list = $arrInsurance_services;

        if ($request->isMethod('post')) {
            $request->validate([
                'service_id' => 'required',
                'dead' => 'required',
                'accidental_death' => 'required',
                'status' => 'required',
                'death_due_special_accident' => 'required',
                'temporary_disability_benefits' => 'required',
                'serious_illness_mild' => 'required',
                'serious_illness' => 'required',
                'benefits_pay_medical_expenses' => 'required',
            ], [
                'service_id.required' => 'Tên dịch vụ bắt buộc nhập!',
                'dead.required' => 'Bạn không được để trống!',
                'accidental_death.required' => 'Bạn không được để trống!',
                'status.required' => 'Bạn chưa chọn trạng thái!',
                'temporary_disability_benefits.required' => 'Bạn không được để trống',
                'death_due_special_accident.required' => 'Bạn không được để trống!',
                'serious_illness_mild.required' => 'Bạn không được để trống!',
                'serious_illness.required' => 'Bạn không được để trống!',
                'benefits_pay_medical_expenses.required' => 'Bạn không được để trống!',
            ], []);

            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);

            
            $modelTes = new Insurance_services();
            // $property_select = implode(',', $request->service_id);

            // $property_select['service_id'] = $modelTes;
            $res = $modelTes->saveNew($params);
            
            if ($res == null) {
                return  redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success','Thêm mới thành công!');
                return redirect()->route('route_BackEnd_Insurance_Services_List');
            } else {
                Session::flash('error','Thêm mới không thành công!');
                return redirect()->route($method_route);
            }
        }
        return view('admin.insurance_service.create', compact('listService', 'list'));
    }

    public function edit($id, Request $request) {
        $modelInsuranceServices = new Insurance_services();
        $insurance_services = $modelInsuranceServices->loadOne($id);
        $this->v['service_id'] = DB::table('services')->get();
        $this->v['insurance_services'] = $insurance_services;
        return view('admin.insurance_service.edit', $this->v);
    }

    public function update($id, InsuranceServicesRequest $request) {

        $method_route = 'route_BackEnd_Insurance_Services_Edit';
        $params = [];

        $params['cols'] = $request->post();

        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelInsuranceServices = new Insurance_services();
        $res = $modelInsuranceServices->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success', 'Cập nhật thành công!');
            return redirect()->route('route_BackEnd_Insurance_Services_List');
        } else {
            Session::flash('error', 'Cập nhật không thành công!');
            return redirect()->route($method_route,['id'=>$id]);
        }
    }

}

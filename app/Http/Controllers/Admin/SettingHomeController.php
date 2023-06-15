<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting_home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingHomeController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request)
    {
        $setting = Setting_home::get();

        return view('admin.setting_home.list', compact('setting'));
    }

    public function edit($id = 1, Request $request) {
        $modelSettingHome = new Setting_home();
        $setting = $modelSettingHome->loadOne($id);
        $this->v['setting'] = $setting;
        return view('admin.setting_home.edit', $this->v);
    }

    public function update($id = 1, Request $request) {

        $method_route = 'route_BackEnd_Setting_Home_Edit';
        $params = [];

        $params['cols'] = $request->post();
        // Logo
        if ($request->hasFile('images_logo') && $request->file('images_logo')->isValid())
            {
                $params['cols']['logo'] = $this->uploadFile($request->file('images_logo'));
            }
        // Favicon
        if ($request->hasFile('images_favicon') && $request->file('images_favicon')->isValid())
            {
                $params['cols']['favicon'] = $this->uploadFileFavicon($request->file('images_favicon'));
            }

        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelSettingHome = new Setting_home();
        $res = $modelSettingHome->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success', 'Cập nhật thành công!');
            return redirect()->route('route_BackEnd_Setting_Home_List');
        } else {
            Session::flash('error', 'Cập nhật không thành công!');
            return redirect()->route($method_route,['id'=>$id]);
        }
    }

    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('logo',$fileName,'public');
    }

    public function uploadFileFavicon($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('favicon',$fileName,'public');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\RestPasswordRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function edit($id, Request $request)
    {
        $modelUser = new User();
        $user = $modelUser->loadOne($id);
        $this->v['user'] = $user;
        return view('admin.profile.index', $this->v);
    }

    public function update($id, ProfileRequest $request)
    {

        $method_route = 'route_BackEnd_Profile_Edit';
        $params = [];

        $params['cols'] = $request->post();

        if ($request->hasFile('images') && $request->file('images')->isValid())
            {
                $params['cols']['avatar'] = $this->uploadFile($request->file('images'));
            }

        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelUser = new User();
        $res = $modelUser->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route, ['id' => $id]);
        } elseif ($res == 1) {
            Session::flash('success', 'Cập nhật thành công!');
            return redirect()->route($method_route, ['id' => $id]);
        } else {
            Session::flash('error', 'Cập nhật không thành công!');
            return redirect()->route($method_route, ['id' => $id]);
        }
    }

    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('users',$fileName,'public');
    }

    public function update_password($id, RestPasswordRequest $request)
    {
        $method_route = "route_BackEnd_Profile_Edit";
        $params = [];
        $params['cols'] = $request->post();
        unset($params['cols']['_token']);

        $user = User::findOrFail($id);
        $params['cols']['id'] = $id;
        if (Hash::check($request->password, $user->password)) {
            $res = $user->fill([
                'password' => Hash::make($request->new_password)
            ])->save();
            if ($res == null) {
                return redirect()->route($method_route, ['id' => $id]);
            } elseif ($res == 1) {
                Session::flash('success', 'Cập nhật mật khẩu thành công !');
                return redirect()->route($method_route, ['id' => $id]);
            } else {
                Session::flash('error', 'Lỗi cập nhật mật khẩu');
                return redirect()->route($method_route, ['id' => $id]);
            }
        } else {
            Session::flash('error', 'Mật khẩu cũ không chính xác !');
            return redirect()->route($method_route, ['id' => $id]);
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function index( Request $request)
    {
        //tổng số liên hệ hôm nay
        $this->v['countContactToday'] = DB::table('contact')
            ->whereDate('created_at', today())
            ->count();

        //Bao liên hệ chưa gọi
        $this->v['totalNoContact'] = Contact::where('status', "0")
            ->whereDate('created_at', today())
            ->count();

        //Tổng liên hệ trong tháng/năm
        $this->v['totalContactsMonth'] = DB::table('contact')
            ->whereMonth('created_at', '=', date('m'))
            ->whereYear('created_at', '=', date('Y'))
            ->count();



        return view('admin.dashboard', $this->v);
    }

    public function markAsRead($notificationId)
    {
        $notification = Auth::user()->notifications()->find($notificationId);

        if ($notification) {
            $notification->update(['is_read' => true]);
        }
    }
}

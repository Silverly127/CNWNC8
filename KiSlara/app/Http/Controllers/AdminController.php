<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
	public function adminlogin()
	{
		return view('admin.admin_login');
	}
	public function show_admin_dashboard()
	{
		return view('admin.admin_dashboard');
	}
	public function admin_dashboard(Request $request){
		$tkAD = $request->tkAD;
		$mkAD = md5($request->mkAD);
		$result = DB::table('quantri')->where('tkAD',$tkAD)->where('mkAD',$mkAD)->first();
		if ($result) {
			Session::put('tenAD',$result->tenAD);
			Session::put('idAD',$result->idAD);
			Session::put('message',null);
			return view('admin.admin_dashboard');
		}
		else{
			Session::put('message','Mật khẩu hoặc tài khoản không đúng!');
			return Redirect::to('kislara/admin');
		}
	}
	public function logout(){
		Session::put('tenAD',null);
		Session::put('idAD',null);
		return Redirect::to('kislara/admin');
	}
}

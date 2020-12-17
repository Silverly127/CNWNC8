<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Product;
use Mail;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
session_start();
class HomeController extends Controller
{
    public function get_best_sell()
    {
        $best_sell = DB::table('mathe')->where('statusDM',1)->get();
        return $best_sell;
    }
    public function index()
    {
    	return view('pages.home')->with('danhmuc',Category::get_category())->with('theloai',Genre::get_genre())->with('other',Product::get_other())->with('sale_off',Product::get_sale_off());
    }

    public function aboutuser()
    {
    	return view('pages.aboutuser')->with('danhmuc',Category::get_category())->with('theloai',Genre::get_genre());
    }

    public function aboutwebsite()
    {
    	return view('pages.aboutwebsite')->with('danhmuc',Category::get_category())->with('theloai',Genre::get_genre());
    }

    public function register()
    {
        return view('pages.register');
    }

    public function register_xl(Request $request)
    {
        
        if ($request->tenUS!=null && $request->tkUS!=null && $request->mkUS!=null && $request->mkUS2!=null && $request->emailUS!=null && $request->sdtUS!=null) 
        {
            if ($request->ck!=1) {
                $request->session()->flash('status', 'Vui lòng tích vào ô điều khoản!');
                return Redirect::to('kislara/register');
            }
            $user = new User;
            $user->tenUS = $request->tenUS;
            $user->tkUS = $request->tkUS;
            if ($request->mkUS!=$request->mkUS2) 
            {
                $request->session()->flash('status', 'Mật khẩu lặp lại không đúng!');
                return Redirect::to('kislara/register');
            }
            else
            {
                $user->mkUS = md5($request->mkUS);
            }
            $user->emailUS = $request->emailUS;
            $user->sdtUS = $request->sdtUS;
            $user->statusUS = 1;
            $user->anhUS = 'unknownus.jpg';
            $user->ngayUS = Carbon::now('Asia/Ho_Chi_Minh');
            $user->capnhatUS = Carbon::now('Asia/Ho_Chi_Minh');
            $user->save();
            $request->session()->flash('status', 'Tạo tài khoản thành công, vui lòng đăng nhập!');
            return Redirect::to('kislara/home');
        }
        else
        {
            $request->session()->flash('status', 'Vui lòng điền đầy đủ thông tin!');
            return Redirect::to('kislara/register');
        }
    }
    public function login_xl(Request $request){
        $tkUS = $request->tkUS;
        $mkUS = md5($request->mkUS);
        $result = User::where('tkUS',$tkUS)->where('mkUS',$mkUS)->first();
        if ($result) {
            Session::put('tenUS',$result->tenUS);
            Session::put('idUS',$result->idUS);
            $request->session()->flash('status', 'Đăng nhập thành công!');
            return Redirect::to('kislara/home');
        }
        else{
            $request->session()->flash('status', 'Mật khẩu hoặc tài khoản không đúng!');
            return Redirect::to('kislara/home');
        }
    }
    public function logout_user(){
        Session::put('tenUS',null);
        Session::put('idUS',null);
        return Redirect::to('kislara/home');
    }
}

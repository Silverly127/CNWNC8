<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use Carbon\Carbon;
session_start();

class CategoryController extends Controller
{
	public function show_admin_list_category()
	{
		return view('admin.admin_list_category', ['list' => Category::all()]);
	}
	public function show_admin_add_category()
	{
		return view('admin.admin_add_category');
	}
	public function admin_add_category_xl(Request $request)
	{
		$category = new Category;
		$category->idDM = $request->idDM;
		$category->tenDM = $request->tenDM;
		$category->statusDM = $request->statusDM;
		$category->ngayDM = Carbon::now('Asia/Ho_Chi_Minh');
		$category->capnhatDM = Carbon::now('Asia/Ho_Chi_Minh');
		$category->save();
		$request->session()->flash('status', 'Thêm danh mục thành công!');
		return Redirect::to('kislara/admin_add_category');
	}
	public function admin_status_category(Request $request)
	{
		$category = Category::where('idDM',$request->idDM)->first();
		$category->statusDM = $request->statusDM;
		$category->capnhatDM = Carbon::now('Asia/Ho_Chi_Minh');
		$category->save();
		$request->session()->flash('status', 'Thay đổi trạng thái danh mục thành công!');
		return Redirect::to('kislara/admin_list_category');
	}
	public function admin_delete_category(Request $request)
	{
		Category::where('idDM', $request->idDM)->delete();
		$request->session()->flash('status', 'Xóa danh mục thành công!');
		return Redirect::to('kislara/admin_list_category');
	}
}

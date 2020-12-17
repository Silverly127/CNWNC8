<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\Genre;
use Carbon\Carbon;
session_start();

class GenreController extends Controller
{
    public function show_admin_list_genre()
	{
		return view('admin.admin_list_genre', ['list' => Genre::all()]);
	}
	public function show_admin_add_genre()
	{
		return view('admin.admin_add_genre');
	}
	public function admin_add_genre_xl(Request $request)
	{
		$genre = new Genre;
		$genre->idTL = $request->idTL;
		$genre->tenTL = $request->tenTL;
		$genre->statusTL = $request->statusTL;
		$genre->ngayTL = Carbon::now('Asia/Ho_Chi_Minh');
		$genre->capnhatTL = Carbon::now('Asia/Ho_Chi_Minh');
		$genre->save();
		$request->session()->flash('status', 'Thêm thể loại thành công!');
		return Redirect::to('kislara/admin_add_genre');
	}
	public function admin_status_genre(Request $request)
	{
		$genre = Genre::where('idTL',$request->idTL)->first();
		$genre->statusTL = $request->statusTL;
		$genre->capnhatTL = Carbon::now('Asia/Ho_Chi_Minh');
		$genre->save();
		$request->session()->flash('status', 'Thay đổi trạng thái thể loại thành công!');
		return Redirect::to('kislara/admin_list_genre');
	}
	public function admin_delete_genre(Request $request)
	{
		Genre::where('idTL', $request->idTL)->delete();
		$request->session()->flash('status', 'Xóa thể loại thành công!');
		return Redirect::to('kislara/admin_list_genre');
	}
}

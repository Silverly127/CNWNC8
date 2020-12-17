<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use App\Models\Category;
use App\Models\Genre;
use Carbon\Carbon;
class ProductController extends Controller
{
	public function get_tag(Request $request)
	{
		$tag = DB::table('theloaisanpham')
		->join('theloai', 'theloaisanpham.idTL', '=', 'theloai.idTL')
		->where('theloaisanpham.idSP', $request->idSP)
		->get();
		return $tag;
	}
	public function show_product(Request $request)
	{
		$request->idSP = $request->route('id');
		return view('pages.view_product')->with('product',Product::where('idSP',$request->route('id'))->first())->with('danhmuc',Category::get_category())->with('theloai',Genre::get_genre())->with('genres',Genre::where('statusTL',1)->get())->with('tag',$this->get_tag($request));
	}
	public function show_admin_list_product()
	{
		return view('admin.admin_list_product', ['list' => Product::paginate(8)]);
	}
	public function show_admin_add_product()
	{
		return view('admin.admin_add_product');
	}
	public function show_admin_set_product(Request $request)
	{
		$product =  Product::where('idSP',$request->idSP)->first();
		return view('admin.admin_set_product')->with('product',$product)->with('categories',Category::where('statusDM',1)->get())->with('genres',Genre::where('statusTL',1)->get())->with('tag',$this->get_tag($request));
	}
	public function admin_add_product_xl(Request $request)
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		$product = new Product;
		$product->tenSP = $request->tenSP;
		$product->idDM = '';
		$product->giaSP = 0;
		$product->giamSP = 0;
		$product->anhSP = $request->anhSP;
		$product->statusSP = $request->statusSP;
		$product->ngaySP = Carbon::now('Asia/Ho_Chi_Minh');
		$product->capnhatSP = Carbon::now('Asia/Ho_Chi_Minh');
		$product->ndSP = '';
		$product->ngayphathanh = 'Chưa rõ';
		$product->nph = 'Chưa rõ';
		$product->npt = 'Chưa rõ';
		$product->windows = '';
		$product->macos = '';
		$product->videoSP = '';
		$product->anhthemSP = '';
		$product->save();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
		echo "<script language='javascript'>alert('Thêm sản phẩm thành công!');</script>";
		return Redirect::to('kislara/admin_set_product');
	}
	public function admin_set_product_xl(Request $request)
	{
		$product = Product::where('idSP',$request->idSP)->first();
		$product->tenSP = $request->tenSP;
		$product->giaSP = $request->giaSP;
		$product->giamSP = $request->giamSP;
		if ($request->idDM!=null) {
			$product->idDM = $request->idDM;
		}
		if ($request->anhSP==null) {
			$product->anhSP = $request->anhcu;
		}
		else{
			$product->anhSP = $request->anhSP;
		}
		if ($request->statusSP!=null) {
			$product->statusSP = $request->statusSP;
		}
		$product->capnhatSP = Carbon::now('Asia/Ho_Chi_Minh');
		if ($request->ndSP!=null) {
			$product->ndSP = $request->ndSP;
		}
		if ($request->ngayphathanh!=null) {
			$product->ngayphathanh = $request->ngayphathanh;
		}
		if ($request->nph!=null) {
			$product->nph = $request->nph;
		}
		if ($request->npt!=null) {
			$product->npt = $request->npt;
		}
		if ($request->windows!=null) {
			$product->windows = $request->windows;
		}
		if ($request->macos!=null) {
			$product->macos = $request->macos;
		}
		if ($request->videoSP!=null) {
			$product->videoSP = $request->videoSP;
		}
		if ($request->anhthemSP!=null) {
			$product->anhthemSP = $request->anhthemSP;
		}
		$product->save();
		$theloai = $request->idTL;
		if($theloai)
		{
			DB::table('theloaisanpham')->where('idSP', $request->idSP)->delete();
			for ($i=0; $i < count($request->idTL); $i++) { 
				DB::table('theloaisanpham')->insert([
					'idTL' => $request->idTL[$i],
					'idSP' => $request->idSP
				]);
			}
		}
		$request->session()->flash('status', 'Đã sửa sản phẩm!');
		return Redirect::to('kislara/admin_list_product');
	}
	public function admin_delete_product(Request $request)
	{
		Product::where('idSP', $request->idSP)->delete();
		$request->session()->flash('status', 'Đã xóa sản phẩm!');
		return Redirect::to('kislara/admin_list_product');
	}
	public function view_category(Request $request)
	{
		$danhmuc = Category::where('idDM',$request->route('id'))->first();
		return view('pages.search_product')->with('product',Product::where('idDM',$request->route('id'))->get())->with('danhmuc',Category::get_category())->with('theloai',Genre::get_genre())->with('genres',Genre::where('statusTL',1)->get())->with('label','DANH MỤC: '.mb_strtoupper($danhmuc->tenDM));
	}
	public function view_genre(Request $request)
	{
		$theloai = Genre::where('idTL',$request->route('id'))->first();
		$product = DB::table('theloaisanpham')
		->where('idTL',$request->route('id'))
		->join('sanpham', 'theloaisanpham.idSP', '=', 'sanpham.idSP')
		->get();
		return view('pages.search_product')->with('product',$product)->with('danhmuc',Category::get_category())->with('theloai',Genre::get_genre())->with('genres',Genre::where('statusTL',1)->get())->with('label','THỂ LOẠI: '.mb_strtoupper($theloai->tenTL));
	}
	public function view_search(Request $request)
	{
		return view('pages.search_product')->with('product',Product::where('tenSP','like','%'.$request->vls.'%')->get())->with('danhmuc',Category::get_category())->with('theloai',Genre::get_genre())->with('genres',Genre::where('statusTL',1)->get())->with('label','TÌM KIẾM CHO TỪ KHÓA: '.mb_strtoupper($request->vls));
	}
}

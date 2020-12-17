<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use DB;
use Cart;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use App\Models\Category;
use App\Models\Genre;
use App\Models\User;
use Carbon\Carbon;
class CartController extends Controller
{
	public function add_cart(Request $request)
	{
		$data = Product::where('idSP',$request->idSP)->first();
		Cart::add(['id' => $data->idSP, 'name' => $data->tenSP, 'qty' => $request->soluongmua, 'weight' => 0, 'price' => $data->giaSP, 'options' => ['giamSP' => $data->giamSP]]);
		return Redirect::to('kislara/view_cart');
	}
	public function view_cart()
	{
		$data = Cart::content();
		return view('pages.cart')->with('data',$data)->with('danhmuc',Category::get_category())->with('theloai',Genre::get_genre());
	}
	public function delete_cart(Request $request)
	{
		for ($i=0; $i < Cart::count() ; $i++) { 
			if (isset($request->rowId[$i])) {
				Cart::remove($request->rowId[$i]);
			}
		}
		return Redirect::to('kislara/view_cart');
	}
	public function update_cart(Request $request)
	{
		Cart::update($request->rowId,$request->qty);
	}
}

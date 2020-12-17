<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use HasFactory;
	protected $table = 'sanpham';
	protected $primaryKey = 'idSP';
	public $timestamps = false;
	public static function get_sale_off()
    {
        $sale_off = Product::where('giamSP','<>',0)->orderByDesc('giamSP')->limit(8)->get();
        return $sale_off;
    }
	public static function get_other()
	{
		$other = Product::whereIn('idDM',['other','garena','steamwallet'])->limit(8)->get();
		return $other;
	}
}

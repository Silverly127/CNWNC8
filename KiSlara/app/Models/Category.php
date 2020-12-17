<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'danhmuc';
    protected $primaryKey = 'idDM';
    protected $keyType = 'string';
    public $timestamps = false;
    public static function get_category()
    {
    	$categories = Category::where('statusDM',1)->get();
    	return $categories;
    }
}

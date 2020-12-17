<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table = 'theloai';
    protected $primaryKey = 'idTL';
    protected $keyType = 'string';
    public $timestamps = false;
    public static function get_genre()
    {
    	$genres = Genre::where('statusTL',1)->get();
    	return $genres;
    }
}

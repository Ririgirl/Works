<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banners extends Model
{
    public static function incomplete() {
    	$result = static::inRandomOrder()->limit(1)->value('id');
    	return $result;
    }
}

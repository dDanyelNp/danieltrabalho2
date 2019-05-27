<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{


//campos em atribuição em massa

protected $fillable = ['titulo','texto'];

public function getCreatedATAttribute($value)
{
   return (Carbon::parse($value)->format('d/m/Y H:i:s'));
}

}

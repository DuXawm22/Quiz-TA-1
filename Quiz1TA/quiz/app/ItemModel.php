<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemModel extends Model
{
    public $timestamps = false;
    protected $fillable =['user_id','name','price','stock']
    protected $table = "item";
    ;
    protected $guarded = [];  
}
 ?>

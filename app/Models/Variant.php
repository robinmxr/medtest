<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = [
        'title', 'description'
    ];



    public function productvariant()
    {
        return $this->hasMany('App\Models\ProductVariant')->distinct('variant');
    }

//     public function uniquevariant()
// {
    
//    return  $this->productvariant()->groupBy('variant');
      
// }  

}

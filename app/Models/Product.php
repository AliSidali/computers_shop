<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelMethods;

class Product extends Model
{
    use ModelMethods;



    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}

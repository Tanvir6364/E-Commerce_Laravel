<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //For Process two
    protected $fillable=['categoryName','categoryDescription','publicationStatus'];
}

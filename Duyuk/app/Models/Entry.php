<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\hTTP\Controllers\IndexController;

class Entry extends Model
{
    use HasFactory;

    protected $table = 'entries';

    protected $guarded = [];
    //protected $fillable = ['title','content','imageEntry','user_name','user_id','categories_id','categories_id'];


}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    public $fillable = ['title' , 'desc' , 'thumb' , 'editor'];
}

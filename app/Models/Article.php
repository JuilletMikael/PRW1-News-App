<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /*
     * fillable allow to mass assign a fill
     * https://laracasts.com/series/laravel-8-from-scratch/episodes/22
     */
    protected $fillable = [
        'title',
        'body'
    ];

    /*
     * Guarded guard fill to be mass assign
     */

}

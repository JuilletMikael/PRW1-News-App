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
        'body',
        'archived_at'
    ];

    /*
     * Guarded guard fill to be mass assign
     */

    public function archive() {
        $this->timestamps = false;
        $this->update(['archived_at' => now()]);
        $this->timestamps = true;
    }

    //static cause we need to acces to ann object
    public static function unarchived() {
        return self::whereNull('archived_at')->get();
    }

}

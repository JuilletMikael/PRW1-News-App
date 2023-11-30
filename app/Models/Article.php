<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

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

    //scope is the same as a static function like unarchived
    /*
     * ORM = eloquent sert à faire le lien avec la poo et les bases de donéée en relationel
     * Patern
     */

    public function scopeUnarchived(Builder $query) :void {
        $query->whereNull('archived_at');
    }

    //static cause we need to acces to ann object but prefarable to use scope cause its an eloquent model
    public function scopeArchived(Builder $query) :void {
        $query->whereNotNull('archived_at');
    }

    public function scopeFilter(Builder $query) :void {
        $query->where('title', 'like', '%oui%');
    }

}

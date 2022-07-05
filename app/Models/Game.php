<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'url_game',
        'url_image',
        'status_id',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    /* Funciones de Busqueda */
    public function scopeSearchIdGame($query, $argument)
    {
        $query->when($argument, function ($query) use ($argument) {
            $query->where('id', '=', "{$argument}");
        });
    }
    public function scopeSearchNameGame($query, $argument)
    {
        $query->when($argument, function ($query) use ($argument) {
            $query->where('name', 'like', "%{$argument}%");
        });
    }
    public function scopeSearchDescriptionGame($query, $argument)
    {
        $query->when($argument, function ($query) use ($argument) {
            $query->where('description', 'like', "%{$argument}%");
        });
    }
    public function scopeSearchStatusGame($query, $argument)
    {
        $query->when($argument, function ($query) use ($argument) {
            $query->where('status_id', '=', "{$argument}");
        });
    }

}

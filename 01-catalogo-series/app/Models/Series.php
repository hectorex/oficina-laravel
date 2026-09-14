<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bootstrap\BootProviders;
use Illuminate\Database\Eloquent\Builder;

class Series extends Model
{
    protected $fillable = ['nome'];

    public function seasons() 
    {
        return $this->hasMany(Season::class, 'series_id');
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('nome');
        });
    }
}


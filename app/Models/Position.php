<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name'];

    protected $fillable = ['name'];

    public function workForces()
    {
        return $this->hasMany(WorkForce::class);

    }
}

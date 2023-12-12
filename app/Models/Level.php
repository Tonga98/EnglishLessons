<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class Level extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function lessons():HasOneOrMany{

        return $this->hasMany(Lesson::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['slug'];

    public function translations() {
        return $this->hasMany(PostTranslation::class);
    }

    public function translation() {
        return $this->hasOne(PostTranslation::class)
            ->where('locale', app()->getLocale());
    }

    public function translate($locale = null) {
        $locale = $locale ?? app()->getLocale();
        return $this->translations()->where('locale', $locale)->first();
    }
}

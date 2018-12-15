<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @method static orderBy(string $string, string $string1)
 */
class Category extends Model
{
    //mass
    protected $fillable
        = [
            'title',
            'slug',
            "parent_id",
            'published',
            'created_by',
            'modified',
        ];

    /**
     * @return void mother
     */
    public function setSlugAttribute(): void
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0,
                40)) . '-' . \Carbon\Carbon::now()->format('dmyHi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function parentCategoryProduct()
    {
        return $this->hasMany(Products::class, 'parent_id');
    }
}

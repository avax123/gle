<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @method static orderBy(string $string, string $string1)
 * @method static create(array $all)
 */
class Products extends Model
{
    protected $fillable
        = [
            'Name',
            'description',
            "price",
            'parent_id',
            'published',
        ];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
     * Products constructor.
     *
     * @param array $attributes
     */
    function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}

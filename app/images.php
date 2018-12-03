<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $id;
    /**
     * images constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function upload_images($img)
    {

    }
}

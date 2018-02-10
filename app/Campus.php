<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campus extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'campuses';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'address', 'postal_code', 'status'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}

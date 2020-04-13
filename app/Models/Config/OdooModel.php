<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Model;

class OdooModel extends Model
{
    protected $table = 'config_odoo_models';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'latest_external_id'];

}

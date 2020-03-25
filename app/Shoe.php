<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    protected $fillable = [
      'brand',
      'size',
      'color',
      'type',
      'material',
      'description',
      'price',
      'date_procuction',
      'updated_at'
    ];
}

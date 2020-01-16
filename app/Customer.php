<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $fillable = [
      'name', 'address1', 'phone1', 'email1'
  ];

  public function users() {
    return $this->hasMany(User::class);
  }
}

<?php

namespace App\Models;

use Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use HasFactory, SoftDeletes, SoftCascadeTrait;

    protected $fillable = [
      'fullname',
      'phone',
      'status',
  ];

  public function debts()
  {
      return $this->hasMany(Debt::class);
  }
}

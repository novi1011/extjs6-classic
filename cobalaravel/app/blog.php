<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class blog extends Model
{
  use SoftDeletes;
  protected $dates=	['deleted_at'];	


  public $timestamp = false; //menggunakan waktu
	protected $fillable=['title','description']; //yang boleh diisi
}

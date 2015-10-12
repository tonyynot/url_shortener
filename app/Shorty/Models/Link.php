<?php

namespace Shorty\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Link extends Eloquent
{
  public $table = 'links';
  public $fillable = ['url', 'code'];
}

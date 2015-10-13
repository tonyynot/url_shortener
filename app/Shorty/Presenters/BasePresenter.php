<?php

namespace Shorty\Presenters;

class BasePresenter
{
  public function encodeOutput()
  {
    return json_encode($input);
  }
}

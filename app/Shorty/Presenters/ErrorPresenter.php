<?php

namespace Shorty\Presenters;

class ErrorPresenter extends BasePresenter
{

  protected $code;
  protected $message;

  public function __contstruct($code, $message)
  {
    $this->code = $code;
    $this->message = $message;
  }

  public function __toString()
  {
    return $this->encodeOutput([
        'error' => [
            'code' => $this->code,
            'message' => $this->message
        ]
    ]);
  }
}

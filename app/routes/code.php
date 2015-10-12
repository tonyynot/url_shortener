<?php

use Shorty\Models\Link;

$app->get('/:code', function($code) use ($app) {
  $link = Link::where('code', $code)->first();

  if (!$link) {
    $app->notFound();
  }

  $app->response->redirect($link->url);
});

<?php

$app->post('/api/generate', function() use ($app) {
  $payload = json_decode($app->request->getBody());

  if (empty($payload) || empty(trim($payload->url))) {
    $app->response->setStatus(400);

    return $app->response->write(json_encode([
      'error' => [
          'code' => 1000,
          'message' => 'A URL is required.'
        ]
      ]));
  }

  if (!filter_var($payload->url, FILTER_VALIDATE_URL)) {
    $app->response->setStatus(400);

    return $app->response->write(json_encode([
      'error' => [
          'code' => 1001,
          'message' => 'A valid URL is required.'
        ]
      ]));
  }

});

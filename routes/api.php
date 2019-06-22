<?php

$app->get('/test',function ($request,$response) {
    return $response->withJson(['message' => 'just for fun!']);
});
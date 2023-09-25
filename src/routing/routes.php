<?php

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];


if ($requestMethod === 'GET' && $requestUri === '/healthcheck') {

}

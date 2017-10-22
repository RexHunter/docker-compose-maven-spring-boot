<?php

echo "Hello";

$res = file_get_contents('http://main-service:8080');

echo "Response: " . $res;


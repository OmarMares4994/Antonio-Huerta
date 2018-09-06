<?php
// File: /config/routes.php

$app->get('/', '\MiWeb\Controllers\HomeController:index');
$app->get('/contactanos', '\MiWeb\Controllers\ContactanosController:index');
$app->get('/gallery', '\MiWeb\Controllers\GalleryController:index');

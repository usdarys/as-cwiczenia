<?php

$conf->serverName = 'localhost:80';
$conf->serverUrl = 'http://' . $conf->serverName;
$conf->rootPath = dirname(__DIR__);
$conf->appRoot = '/as-cwiczenia';
$conf->mainController = '/app/controllers/mainController.php';
$conf->actionRoot = $conf->appRoot . $conf->mainController . '?action=';

$conf->actionUrl = $conf->serverUrl . $conf->actionRoot;
$conf->appUrl = $conf->serverUrl . $conf->appRoot;



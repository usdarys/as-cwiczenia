<?php

$conf->serverName = 'localhost:80';
$conf->serverUrl = 'http://' . $conf->serverName;
$conf->appRoot = '/as-cwiczenia';
$conf->actionRoot = $conf->appRoot . '/app/controllers/mainController.php?action=';

$conf->actionUrl = $conf->serverUrl . $conf->actionRoot;
$conf->appUrl = $conf->serverUrl . $conf->appRoot;
$conf->rootPath = dirname(__DIR__);


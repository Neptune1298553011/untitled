<?php
    $database = require 'core/database/bootstrap.php';
    $tasks = $database->selectAll('igg');
    require 'views/index.view.php';

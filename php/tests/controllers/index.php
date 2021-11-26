<?php
$tasks = $database->selectAll('igg');
    require '../views/index.view.php';

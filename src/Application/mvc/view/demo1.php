<?php
require "../dao/SQLSession.php";
require '../dao/ProductCategoryDao.php';
$zsresult=ProductCategoryDao::select1();
var_dump($zsresult);
<?php
 $config = require  '../../config.php';
 require 'Connection.php';
 require'QueryBuilder.php';
 return new QueryBuilder(

     Connection:: make($config['database'])
 );

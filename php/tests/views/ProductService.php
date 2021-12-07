<?php

include_once  'imgdao.php';
class imgService
{
    private $imgcategoryDao;
    public function __construct()
    {
        $this->imgcategoryDao = new imgCategoryDao();
    }

    public function selectById($id){
        return $this->imgcategoryDao->selectById($id);
    }
}


<?php

include_once  '../dao/ProductCategoryDao.php';
class ProductService
{
    private $categoryDao;
    public function __construct()
    {
        $this->categoryDao = new ProductCategoryDao();
    }

    public function selectById($id){
        return $this->categoryDao->selectById($id);
    }
}

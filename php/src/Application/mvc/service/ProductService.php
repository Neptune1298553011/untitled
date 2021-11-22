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



include_once '../dao/ProductCategoryDao2.php';
class ProductService2
{
    private $categoryDaoHot;
    public function __construct()
    {
        $this->categoryDaoHot = new ProductCategoryDaoHot();
    }

    public function selectById($id)
    {
        return $this->categoryDaoHot->selectById($id);
    }
}

include_once '../dao/ProductCategoryDao2.php';
class ProductService3
{
    private $categoryDaoHot;
    public function __construct()
    {
        $this->categoryDaoHot = new hotswiperwrapperDao();
    }

    public function selectById($id)
    {
        return $this->categoryDaoHot->selectById($id);
    }
}
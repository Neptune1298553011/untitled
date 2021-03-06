<?php
include_once '../dao/ProductCategoryDao.php';
class ProductController
{
    private $service;
    public function __construct()
    {
        $this->service = new ProductService();
    }
    /**
     * 获取商品详情信息
     * @param $id 商品详情ID
     */
    public function productDetail($id){
        return $this->service->selectById($id);
    }
}

?>
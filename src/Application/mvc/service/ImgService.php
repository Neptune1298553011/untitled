<?php
namespace Application\mvc\service;

interface ImgService
{
    /**
     * 通过图片Id查找
     * @param int $id
     * @return mixed
     */
    public function findImgById(int $id);
    public function demo();
}
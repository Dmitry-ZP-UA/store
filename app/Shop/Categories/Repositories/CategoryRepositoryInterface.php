<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 06.10.18
 * Time: 11:02
 */

namespace App\Shop\Categories\Repositories;


use App\Interfaces\BaseRepositoryInterface;

interface CategoryRepositoryInterface extends BaseRepositoryInterface
{
    public function findCategoryBySlug($slug);
}
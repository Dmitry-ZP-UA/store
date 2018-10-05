<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 05.10.18
 * Time: 14:19
 */

namespace App\Interfaces;


interface CategoryRepositoryInterface extends BaseRepositoryInterface
{
    public function findCategoryById($id);
}

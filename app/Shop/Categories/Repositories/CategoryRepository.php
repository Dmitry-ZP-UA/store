<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 06.10.18
 * Time: 11:03
 */

namespace App\Shop\Categories\Repositories;


use App\Repositories\BaseRepository;
use App\Shop\Categories\Category;
use function Sodium\randombytes_uniform;

abstract class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{


    public function __construct(Category $model)
    {
        perent::__construct($model);
    }

    public function findCategoryBySlug($slug)
    {
        return $this->findBy($slug);
    }
}
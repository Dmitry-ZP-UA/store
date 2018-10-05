<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 05.10.18
 * Time: 14:19
 */

namespace App\Repositories;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    /**
     * CategoryRepository constructor.
     * @param Category $model
     */
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }
    /**
     * @param $id
     * @return mixed
     */
    public function findCategoryById($id)
    {
        return $this->find($id);
    }
}

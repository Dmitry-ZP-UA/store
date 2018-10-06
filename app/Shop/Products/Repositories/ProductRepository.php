<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 06.10.18
 * Time: 11:15
 */

namespace App\Shop\Products\Repositories;


use App\Models\Model;
use App\Repositories\BaseRepository;
use App\Shop\Products\Product;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 06.10.18
 * Time: 10:55
 */

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Shop\Products\Repositories\ProductRepositoryInterface;

class ProductController extends Controller
{
    protected $productRepo;

    public function __construct(ProductRepositoryInterface $productRepo)
    {
        $this->productRepo = $productRepo;
    }


}
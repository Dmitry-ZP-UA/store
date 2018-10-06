<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 06.10.18
 * Time: 10:56
 */

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Shop\Categories\Repositories\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    protected $categoryRepo;

    public function __construct(CategoryRepositoryInterface $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function getCategory($slug)
    {
        $category = $this->categoryRepo->findBy($slug);
        $categories = $this->categoryRepo->all();

        return view('front.categories.category', compact('category', 'categories'));

    }
}

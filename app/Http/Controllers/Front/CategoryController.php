<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 04.10.18
 * Time: 18:12
 */

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Interfaces\CategoryRepositoryInterface;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryRepositoryInterface $category)
    {
        $this->category = $category;

    }

    public function index($id)
    {
        $category = $this->category->findOneOrFail($id);
        $categories = $this->category->all();

        return view('front.categories.category', compact('category', 'categories'));
    }

}

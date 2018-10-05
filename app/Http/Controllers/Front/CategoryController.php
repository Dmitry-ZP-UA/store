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
    protected $repository;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;

    }

    public function index($id)
    {
        $category = $this->repository->findOneOrFail($id);
        $categories = $this->repository->all();

        return view('front.categories.category', compact('category', 'categories'));
    }

}

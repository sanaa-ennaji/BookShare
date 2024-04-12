<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceInterface\CategoryServiceInterface;
use App\Http\Requests\CategoryRequest;
class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function createCategory(CategoryRequest $request)
    {
        $data = $request->validated();
        $this->categoryService->createCategory($data);
        return redirect()->back()->with('success', 'Category created successfully');
    }

    public function updateCategory(Request $request, $id)
    {
        $data = $request->validated();
        $this->categoryService->updateCategory($data, $id);
        return redirect()->back()->with('success', 'Category updated successfully');
    }

    public function deleteCategory($id)
    {
        $this->categoryService->deleteCategory($id);
        return redirect('/admin/category')->with('success', 'Category deleted successfully');
    }
 
    public function showCategories()
    {
        $categories = $this->categoryService->getCategories();
        return view('admin/category', ['categories' => $categories]);

    }
}

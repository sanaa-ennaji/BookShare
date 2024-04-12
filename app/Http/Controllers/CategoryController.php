<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\ServiceInterface\CategoryServiceInterface;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryService;

    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function createCategory(CategoryRequest $request)
    {
        $data = $request->validated();
        $image = $request->file('image');

        try {
            $category = $this->categoryService->createCategory($data, $image);
            return redirect()->back()->with('success', 'Category created successfully!');
        } catch (\Exception $e) {
            report($e);
            return back()->withInput()->withErrors(['error' => 'Failed to create category.']);
        }
    }

    

    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image',
        ]);
    
        try {
            $category = $this->categoryService->findCategoryById($id);
    
            if (!$category) {
                return back()->withErrors(['error' => 'Category not found.']);
            }
    
            $data = $request->only('title');
            $image = $request->file('image');
    
            $category = $this->categoryService->updateCategory($category, $data, $image);
    
            return redirect()->back()->with('success', 'Category updated successfully!');
        } catch (\Exception $e) {
            report($e);
            return back()->withInput()->withErrors(['error' => 'Failed to update category.']);
        }
    }
    
}

// class CategoryController extends Controller
// {
//     /**
//      * Create a new category.
//      *
//      * @param CategoryRequest $request
//      * @return \Illuminate\Http\RedirectResponse
//      */
//     public function createCategory(CategoryRequest $request)
//     {
//         $data = $request->validated();

//         $data['user_id'] = Auth::id();

//         try {
//             $category = Category::create($data);

//             if ($request->hasFile('image')) {
//                 $imageName = $this->storeImage($request->file('image'));
//                 $category->update(['image' => $imageName]);
//             }

//             return redirect()->back()->with('success', 'Category created successfully!');
//         } catch (\Exception $e) {
//             report($e); 
//             return back()->withInput()->withErrors(['error' => 'Failed to create category.']);
//         }
//     }

   
//     private function storeImage(UploadedFile $file)
//     {
//         $imageName = time() . '.' . $file->getClientOriginalExtension();
//         try {
//             $path = Storage::disk('public')->put('img', $file); 
//             return $path; 
//         } catch (\Exception $e) {
//             report($e);
//             throw new \Exception('Failed to store image.');
//         }
//     }
    

   
//     public function showCategory()
//     {
//         $categories = Category::all();
//         return view('admin.categories', compact('categories'));
//     }

   
//     public function updateCategory(Request $request, $id)
//     {
//         $request->validate([
//             'title' => 'required',
//             'image' => 'nullable|image', 
//         ]);

//         try {
//             $category = Category::findOrFail($id);

//             $data = $request->only('title');

//             if ($request->hasFile('image')) {
//                 $imageName = $this->storeImage($request->file('image'));
//                 $data['image'] = $imageName;
//             }

//             $category->update($data);

//             return redirect()->back()->with('success', 'Category updated successfully!');
//         } catch (\Exception $e) {
//             report($e);
//             return back()->withInput()->withErrors(['error' => 'Failed to update category.']);
//         }
//     }

   
//     public function deleteCategory(Category $category)
//     {
//         try {
//             $category->delete();
//             return redirect('/admin/category')->with('success', 'Category deleted successfully!');
//         } catch (\Exception $e) {
//             report($e);
//             return back()->withErrors(['error' => 'Failed to delete category.']);
//         }
//     }
// }

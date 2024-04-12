<?php

  
namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\ServiceInterface\CategoryServiceInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\RepositoryInterfaces\CategoryRepositoryInterface;

class CategoryService  implements CategoryServiceInterface
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function createCategory(array $data, UploadedFile $image = null): Category
    {
        $data['user_id'] = Auth::id();
        $category = $this->categoryRepository->create($data);

        if ($image) {
            $imageName = $this->storeImage($image);
            $category->update(['image' => $imageName]);
        }

        return $category;
    }

    private function storeImage(UploadedFile $file)
    {
        $imageName = time() . '.' . $file->getClientOriginalExtension();
        $path = Storage::disk('public')->put('img', $file);
        return $path; 
    }

    public function findCategoryById(int $id): ?Category
    {
        return $this->categoryRepository->findById($id);
    }

    public function getAllCategories(): array
    {
        return $this->categoryRepository->all();
    }

    public function updateCategory(Category $category, array $data, UploadedFile $image = null): Category
    {
        $category = $this->categoryRepository->update($category, $data);

        if ($image) {
            $imageName = $this->storeImage($image);
            $category->update(['image' => $imageName]);
        }

        return $category;
    }

    public function deleteCategory(Category $category): void
    {
        $this->categoryRepository->delete($category);
    }
}


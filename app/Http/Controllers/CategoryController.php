<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
  
    public function  createCategory (CategoryRequest $request){

        $data = $request->validated();



    }
    
    public function updateCategory () {

    }

    public function deleteCategory () {

    }



}

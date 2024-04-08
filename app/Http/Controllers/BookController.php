<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BookService;
class BookController extends Controller
{
    protected $bookService;
              
    public function __construct( BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function createBook(Request $request) {
      
        
        $data = $request->validate([
            'title' => ['required', 'string', 'max:200'],
            'image' => ['nullable', 'string'],
            'author' => ['nullable', 'string'],
            'ISBN' => ['nullable', 'integer'],
            'quantity' => ['nullable', 'integer'],
            'status' => ['nullable', 'string', 'max:45'],
            'description' => ['nullable', 'string'],
            'lang' => ['nullable', 'json'],
            'price' => ['required', 'numeric'],
            'store_id' => ['required', 'exists:stores,id'],
            'categorie_id' => ['required'],
            'rating' => ['nullable', 'string'],
        ]);

 
        $book = $this->bookService->create($data);


        return response()->json($book, 201);
    }

    // public function index()
    // {
    //     $books = $this->bookService->getAll();
    //     return view('books.index', compact('books'));
    // }



    // public function edit($id)
    // {
    //     $book = $this->bookService->getById($id);
    //     return view('books.edit', compact('book'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $validatedData = $request->validate([
        
    //     ]);

    //     $this->bookService->update($validatedData, $id);

    //     return redirect()->route('books.index')->with('success', 'Book updated successfully');
    // }

    // public function destroy($id)
    // {
    //     $this->bookService->delete($id);
    //     return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    // }
}

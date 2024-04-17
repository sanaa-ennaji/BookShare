<?php
namespace App\Http\Controllers;
use App\Models\Book;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\ServiceInterface\BookServiceInterface;

class BookController extends Controller
{
    protected $bookService;
              
    public function __construct(BookServiceInterface $bookService)
    {
        $this->bookService = $bookService;
    }

    public function createBook(BookRequest $request)
    {
      
        $data = $request->validated();
       
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '.' . $file->extension();
            $file->storeAs('public/img', $imageName);
            $data['image'] = $imageName;
        }
      
 
        $book = $this->bookService->create($data);

        // return response()->json($book, 201);
        return redirect()->back()->with('success', 'Category created successfully');
    }

    public function showDetails($id)
    {
        $book = Book::findOrFail($id);
        if (!$book) {
            return abort(404); 
        }
        return view('public.BookDetails', compact('book')); 
    }


    public function showCategoryAndBooks()
    {
        $store = auth()->user()->store()->first();
        if (!$store) {
            return redirect()->back()->with('error', 'Store not found');
        }
    
        $categories = Category::all();
        $books = Book::where('store_id', $store->id)->get();
    
        return view('stores.dashboard', compact('categories', 'books'));
    }
    


    public function index()
    {
        $books = $this->bookService->getAll();
        return view('welcome', compact('books'));
    }



    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        
        // ]);

        // $this->bookService->update($validatedData, $id);

        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }

    public function destroy($id)
    {
        // $this->bookService->delete($id);
        // return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }

    public function searchBook () {

    }

    public function filterByCategory () {

    }

}


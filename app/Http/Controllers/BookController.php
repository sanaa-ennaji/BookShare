<?php
namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Pagination\Paginator;
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

    public function updatebook(BookRequest $request, $id)
{
    $data = $request->validated();
    
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = time() . '.' . $file->extension();
        $file->storeAs('public/img', $imageName);
        $data['image'] = $imageName;
    }

    $this->bookService->updatebook($data, $id);

    return redirect()->route('stores.books')->with('success', 'Book updated successfully');
}


    public function edit($id)
    {
        $book = Book::findOrFail($id); 

        return view('stores.updatebook', compact('book')); 
    }

    public function destroy($id)
    {
        $this->bookService->deletebook($id);
        return redirect()->back()->with('success', 'Book deleted successfully');
    }

    public function searshbook(Request $request)
    {
        $books = $this->bookService->All();
        $searchQuery = $request->input('search');
    
        if ($searchQuery) {
            $books = $this->bookService->searchBooks($searchQuery);
        }
    
        if ($request->ajax()) {
            return response()->json(['books' => $books]);
        } else {
            return view('public.books', compact('books'));
        }
    }
    
    
    public function filterByCategory () {

    }

}


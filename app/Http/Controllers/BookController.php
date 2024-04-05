<?php
namespace App\Http\Controllers;

use App\Repositories\BookRepositoryInterface;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $bookRepository;

    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function index()
    {
        $books = $this->bookRepository->getAll();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
        
        ]);

        $this->bookRepository->create($validatedData);

        return redirect()->route('books.index')->with('success', 'Book created successfully');
    }

    public function edit($id)
    {
        $book = $this->bookRepository->getById($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
        
        ]);

        $this->bookRepository->update($validatedData, $id);

        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }

    public function destroy($id)
    {
        $this->bookRepository->delete($id);
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}

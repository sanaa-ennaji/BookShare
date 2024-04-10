<?php
namespace App\Http\Controllers;
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
       $file = $request->file('image'); 
        if ($request->hasFile('image')) {
            $imageName = $this->bookService->storeImage($file);
            $data['image'] = $imageName;
        }

 
        $book = $this->bookService->create($data);


        return response()->json($book, 201);
    }




    public function index()
    {
        // $books = $this->bookService->getAll();
        // return view('books.index', compact('books'));
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



    public function addCart () {

    }

    public function deleteCartItem () {

    }
}


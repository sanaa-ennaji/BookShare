<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  
  </head>
      <body >
     
          @include('components/navbar')
  
          @include('components/navbar2')

          <div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4 mt-20">
            <div class="xl:w-2/6 lg:w-2/5 w-80 md:block hidden">
              <img class="w-full" alt="img" src="{{asset('storage/img/' . $book->image)}}" />

            </div>
            <div class="md:hidden">
              <img class="w-full" alt="image"  src="{{asset('storage/img/' . $book->image)}}" />
            </div>
        
            <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
              <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="book_id" value="{{ $book->id }}">
              <div class="border-b border-gray-200 pb-6">
                <h1 class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 text-gray-800 dark:text-white mt-2">{{$book->title}}</h1>
              </div> 
              <div class="col-span-6 sm:col-span-3">
                <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                <input type="number" name="quantity" id="quantity" autocomplete="quantity" required
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
              {{-- <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                <input type="checkbox" name="type" id="normal_price" value=" {{$book->id}}">
                <p class="text-base leading-4 text-gray-800 dark:text-gray-300"> Normal -  {{$book->price}}$</p>
              </div>
              {{-- @if ($book->reservations->count() >= $book->)
              <p class="flex text-base leading-4 text-red-800 dark:text-red-300 mt-6">
                <svg class="mx-3 text-gray-400 w-6 h-5 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
              </svg>
                All are Reserved no more availbale places 
              </p>
            
          @else --}}
          {{-- <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <div class="px-4 py-5 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="book_id" class="block text-sm font-medium text-gray-700">Book ID</label>
                        <input type="text" name="book_id" id="book_id" autocomplete="book_id" required
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                        <input type="number" name="quantity" id="quantity" autocomplete="quantity" required
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add to Cart
                </button>
            </div>
        </form> --}}


          @auth
              <button type="submit" class="bg-blue-600 dark:text-gray-900 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white  w-full py-4  focus:outline-none">
              add  to cart
              </button>
              @else
              <a  href="/register" class="bg-blue-600 dark:text-gray-900 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white w-full py-4 focus:outline-none">
             register to cart!
              </a>
               @endauth
              {{-- @endif --}}
              <div>
              </form>
                <p class="xl:pr-48 text-base lg:leading-tight leading-normal text-gray-600 dark:text-gray-300 mt-7"> {{$book->description}}</p>
                <p class="text-base leading-4 mt-7 text-gray-600 dark:text-gray-300">ISBN:  {{$book->ISBN}}</p>
                <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">author:  {{$book->author}}</p>
                <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">price: {{$book->price}}</p>
                <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">en stock:  {{$book->price}}</p>
                <p class="md:w-96 text-base leading-normal text-gray-600 dark:text-gray-300 mt-4"> category :{{$book->category->title}}</p>
              </div>
             
            </div>
          </div>
    
</body>
</html>
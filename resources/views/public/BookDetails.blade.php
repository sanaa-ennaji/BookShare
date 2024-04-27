<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> --}}
  
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
                <h1 class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 text-gray-800 dark:text-white mt-2"></h1>

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





<section class="text-gray-700 body-font overflow-hidden bg-white">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="https://www.whitmorerarebooks.com/pictures/medium/2465.jpg">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">The Catcher in the Rye</h1>
        <div class="flex mb-4">
          <span class="flex items-center">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <span class="text-gray-600 ml-3">4 Reviews</span>
        
        </div>
        <a  href="/register" class="bg-blue-600 dark:text-gray-900 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white w-full py-4 focus:outline-none mb-8">
          register to cart!
           </a>
        <p class="leading-relaxed">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY.
           XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. 
          Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over,
           neutra jean shorts keytar banjo tattooed umami cardigan.</p>
       
        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
          <div class="flex">
            <span class="mr-3">Color</span>
            <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
            <button class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
            <button class="border-2 border-gray-300 ml-1 bg-red-500 rounded-full w-6 h-6 focus:outline-none"></button>
          </div>
          <div class="flex ml-6 items-center">
            <span class="mr-3">Size</span>
            <div class="relative">
              <select class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10">
                <option>SM</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
              </select> 

              <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"></path>
                </svg>
              </span>
            </div>
          </div>
        </div>
        <div class="flex">
          <span class="title-font font-medium text-2xl text-gray-900">$58.00</span>
          <button class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Button</button>
          <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>


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

      
              {{-- @if ($book->reservations->count() >= $book->)
              <p class="flex text-base leading-4 text-red-800 dark:text-red-300 mt-6">
                <svg class="mx-3 text-gray-400 w-6 h-5 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
              </svg>
                All are Reserved no more availbale places 
              </p>
            
          @else
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
        </form>

{{-- 
          @auth
              <button type="submit" class="bg-blue-600 dark:text-gray-900 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white  w-full py-4  focus:outline-none">
              add  to cart
              </button>
              @else
              <a  href="/register" class="bg-blue-600 dark:text-gray-900 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white w-full py-4 focus:outline-none">
             register to cart!
              </a>
               @endauth --}}
             




<section class="text-gray-700 body-font overflow-hidden bg-white">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <div class="xl:w-2/6 lg:w-2/5 w-80 md:block ">
        <img class="w-full" alt="img" src="{{asset('storage/img/' . $book->image)}}" />

      </div>
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-900  tracking-widest pb-4">michel moth <span class="text-gray-400 ">(auth)</span></h2>
        <h1 class="text-gray-900 text-5xl title-font font-medium mb-1">The Catcher in the Rye</h1>

       

        <p class="leading-relaxed">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY.
           XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. 
          Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over,
           neutra jean shorts keytar banjo tattooed umami cardigan.</p>
       
           <div class="flex mt-6">
            <span class="flex items-center">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-400" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-400" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-400" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-400" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <span class="text-gray-600 ml-3">4 reviews</span>
          
          </div>
          <form action="{{ route('cart.add') }}" method="POST" class="w-[45%] ">
            @csrf
          <div class="col-span-6 sm:col-span-3">
            <label for="quantity" class="block text-sm font-medium text-gray-700 mt-2">Quantity</label>
            <input type="number" name="quantity" id="quantity" autocomplete="quantity" value="1" required
                class="mt-1 w-[20%]  border-2 border-gray-500 block w-full shadow-sm sm:text-sm  rounded-md">
        </div>
        <div class="flex w-[80vh] items-center pb-5 border-b-2 border-gray-200 mb-5">
         
        </div>
        <div class="flex mt-5">
          
            <input type="hidden" name="book_id" value="{{ $book->id }}">
          <button type="submit" class="bg-blue-600 dark:text-gray-900 hover:bg-blue-800 border-0  rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white w-full py-4 focus:outline-none mb-8">
            add to cart
          </button>
         </form>
             <button class="rounded-full mt-1 w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-blue-500 ml-4">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
              </svg>
            </button>
              </div>
  
              <div class="ml-4">
     
        <h2 class="text-gray-900 text-3xl title-font font-medium ">Book Details</h1>
         
              <p class="text-base leading-4 mt-5 text-gray-600 dark:text-gray-300"><span class="text-gray-400 ">ISBN:</span> {{$book->ISBN}}</p>
              <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300"><span class="text-gray-400 ">author: </span>  {{$book->author}}</p>
              <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300"> <span class="text-gray-400 ">price: </span> {{$book->price}}</p>
              <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300"> <span class="text-gray-400 ">en stock:</span>  {{$book->price}}</p>
              <p class="md:w-96 text-base leading-normal text-gray-600 dark:text-gray-300 mt-4"><span class="text-gray-400 ">category:  </span>{{$book->category->title}}</p>
            </div>
      </div>
    </div>
  </div>
</section>


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
       
           
          <form action="{{ route('cart.add') }}" method="POST" class="w-[45%] ">
            @csrf
          <div class="col-span-6 sm:col-span-3">
            <label for="quantity" class="block text-sm font-medium text-gray-700 mt-2">Quantity</label>
            <input type="number" name="quantity" id="quantity" autocomplete="quantity" value="1" required
            class="h-8 w-8 border bg-white text-center text-xs outline-none">
                
        </div>
        <div class="flex w-[80vh] items-center pb-5 border-b-2 border-gray-200 mb-5">
         
        </div>
        <div class="flex mt-5">
          @auth
            <input type="hidden" name="book_id" value="{{ $book->id }}">
          <button type="submit" class="bg-blue-600 dark:text-gray-900 hover:bg-blue-800 border-0  rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white w-full py-4 focus:outline-none mb-8">
            add to cart
          </button>
          @else
          <a href="/login" class="bg-blue-600 dark:text-gray-900 hover:bg-blue-800 border-0  rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white w-full py-4 focus:outline-none mb-8">
            add to cart
          </a>
          @endauth
         </form>
           
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


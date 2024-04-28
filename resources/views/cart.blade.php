<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body>

    @include('components/navbar')
    @include('components/navbar2')

    {{-- <div class="container mx-auto py-8">
          <h1 class="text-2xl font-semibold mb-4">Your Cart</h1>
          @if ($cartItems->isEmpty())
          <p>Your cart is empty.</p>
          @else
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              @foreach ($cartItems as $cartItem)
              <div class="bg-white shadow-md rounded-md p-4">
                  <p class="text-lg font-semibold">{{ $cartItem->book->title }}</p>
                  <p>Quantity: {{ $cartItem->quantity }}</p>
                  <p>Price: ${{ $cartItem->book->price }}</p>
              </div>
             
          </div>
          @endif
      </div> --}}

    <div class="h-screen bg-gray-100 pt-20">
        <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
        <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
            <div class="rounded-lg md:w-2/3">
                @if ($cartItems->isEmpty())
                <p>Your cart is empty.</p>
             @else
                    @foreach ($cartItems as $cartItem)
                        <div
                            class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start sm:h-[20vh] ">
                            <img src="img/9780399185793.jpg" alt="product-image"
                                class="w-full rounded-lg  md:h-20  sm:w-40" />
                            <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                                <div class="mt-5 sm:mt-0">
                                    <h2 class="text-lg font-bold text-gray-900">{{ $cartItem->book->title }} </h2>
                                    <p class="mt-1 text-xs text-gray-700">{{ $cartItem->book->price }}$</p>
                                    <div class="flex items-center border-gray-100 mt-5">
                                        {{-- <span
                                            class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50">
                                            - </span> --}}
                                        {{-- <input class="h-8 w-8 border bg-white text-center text-xs outline-none"
                                            type="number" value="{{$cartItem->quantity}}" min="1" /> --}}
                                        {{-- <span
                                            class="cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50">
                                            + </span> --}}
                                    </div>
                                </div>

                                <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                                    <div class="flex items-center space-x-4">
                                        <form class="px-2" action="/deleteItem/{{$cartItem->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <button
                                            class="rounded-full group flex items-center justify-center focus-within:outline-red-500">
                                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle
                                                    class="fill-red-50 transition-all duration-500 group-hover:fill-red-400"
                                                    cx="17" cy="17" r="17" fill="" />
                                                <path
                                                    class="stroke-red-500 transition-all duration-500 group-hover:stroke-white"
                                                    d="M14.1673 13.5997V12.5923C14.1673 11.8968 14.7311 11.333 15.4266 11.333H18.5747C19.2702 11.333 19.834 11.8968 19.834 12.5923V13.5997M19.834 13.5997C19.834 13.5997 14.6534 13.5997 11.334 13.5997C6.90804 13.5998 27.0933 13.5998 22.6673 13.5997C21.5608 13.5997 19.834 13.5997 19.834 13.5997ZM12.4673 13.5997H21.534V18.8886C21.534 20.6695 21.534 21.5599 20.9807 22.1131C20.4275 22.6664 19.5371 22.6664 17.7562 22.6664H16.2451C14.4642 22.6664 13.5738 22.6664 13.0206 22.1131C12.4673 21.5599 12.4673 20.6695 12.4673 18.8886V13.5997Z"
                                                    stroke="#EF4444" stroke-width="1.6" stroke-linecap="round" />
                                            </svg>
                                        </button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @endif
                {{-- <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
            <img src="img/9780593448793.jpg" alt="product-image" class="w-full rounded-lg sm:w-40" />
            <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
              <div class="mt-5 sm:mt-0">
                <h2 class="text-lg font-bold text-gray-900"> book 2019</h2>
                <p class="mt-1 text-xs text-gray-700">360 mad</p>
              </div>
              <div class="mt-4 flex justify-between im sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                <div class="flex items-center border-gray-100">
                  <span class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50"> - </span>
                  <input class="h-8 w-8 border bg-white text-center text-xs outline-none" name="quantity"pe="number" value="" min="1" />
                  <span class="cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50"> + </span>
                </div>
                <div class="flex items-center space-x-4">
                  <p class="text-sm">259.000 </p>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-blue-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </div>
              </div>
            </div>
          </div> --}}

            </div>


            <form id="create-order-form" action="{{ route('orders.create') }}" method="POST"
                class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
                @csrf
                <div class="mb-2 flex justify-between">
                    <p class="text-gray-700">Subtotal</p>
                    <p class="text-gray-700">$129.99</p>
                </div>
                <div class="flex justify-between">
                    <p class="text-gray-700">Shipping</p>
                    <p class="text-gray-700">$4.99</p>
                </div>

                <hr class="my-4" />

                <div class="flex justify-between">

                    <p class="text-lg font-bold">Total</p>
                    <div class="">
                        <p class="mb-1 text-lg font-bold">${{ $totalPrice }} MAD</p>
                        <input type="hidden" name="total_price" value="${{ $totalPrice }}">
                    </div>
                </div>
                <button class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600"
                    type="submit">Check out</button>
              </form>
    </div>
    </div>
</body>


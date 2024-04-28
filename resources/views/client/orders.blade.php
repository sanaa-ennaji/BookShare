<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!doctype html>
    <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite('resources/css/app.css')
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </head>
        <body >
          @include('components/navbar')
            @include('components/navbar2')
  
    <main class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:pb-24">
      <div class="max-w-xl">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Order history</h1>
        <p class="mt-1 text-sm text-gray-500">Check the status of recent orders, manage returns, and download invoices.</p>
      </div>
  
      <section aria-labelledby="recent-heading" class="mt-16">
        <h2 id="recent-heading" class="sr-only">Recent orders</h2>
  
        <div class="space-y-20">
          <div>
            <h3 class="sr-only">Order placed on <time datetime="2021-01-22">January 22, 2021</time></h3>
            <table class="mt-4 w-full text-gray-500 sm:mt-6">
              <caption class="sr-only">
                Products
              </caption>
              <thead class="sr-only text-left text-sm text-gray-500 sm:not-sr-only">
                <tr>
                  <th scope="col" class="hidden w-1/5 py-3 pr-8 font-normal sm:table-cell">order </th>
                  <th scope="col" class="hidden w-1/5 py-3 pr-8 font-normal sm:table-cell">date</th>
                  <th scope="col" class="hidden w-1/5 py-3 pr-8 font-normal sm:table-cell">status</th>
                  <th scope="col" class="hidden py-3 pr-8 font-normal sm:table-cell">total</th>
                  <th scope="col" class="hidden py-3 pr-8 font-normal sm:table-cell">Info</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 border-b border-gray-200 text-sm sm:border-t">
               
              
             
                @foreach ($orders as $order)
                <tr>
                    <td class="hidden py-6 pr-8 sm:table-cell"> {{ $order->id }}</td>
                    <td class="hidden py-6 pr-8 sm:table-cell">{{ $order->created_at }}</td>
                  <td class="hidden py-6 pr-8 sm:table-cell">Delivered</td>
                  <td class="hidden py-6 pr-8 sm:table-cell">{{ $order->total_price }}</td>
                  <td class="whitespace-nowrap py-6 text-right font-medium">
                    <a href="{{url('/invoice/' .$order->id. '/generate' )}}" class="mt-6 flex w-full text-white items-center justify-center rounded-md border border-gray-300 bg-blue-500  py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:mt-0 sm:w-auto">
                        download Invoice
                       
                      </a>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
  
      
        </div>
      </section>
    </main>
  
    <footer aria-labelledby="footer-heading" class="bg-gray-50">
      <h2 id="footer-heading" class="sr-only">Footer</h2>
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-8 py-20 sm:grid-cols-2 sm:gap-y-0 lg:grid-cols-4">
          <div class="grid grid-cols-1 gap-y-10 lg:col-span-2 lg:grid-cols-2 lg:gap-x-8 lg:gap-y-0">
            <div>
              <h3 class="text-sm font-medium text-gray-900">Account</h3>
              <ul role="list" class="mt-6 space-y-6">
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Manage Account</a>
                </li>
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Saved Items</a>
                </li>
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Orders</a>
                </li>
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Redeem Gift card</a>
                </li>
              </ul>
            </div>
            <div>
              <h3 class="text-sm font-medium text-gray-900">Service</h3>
              <ul role="list" class="mt-6 space-y-6">
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Shipping &amp; Returns</a>
                </li>
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Warranty</a>
                </li>
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">FAQ</a>
                </li>
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Find a store</a>
                </li>
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Get in touch</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="grid grid-cols-1 gap-y-10 lg:col-span-2 lg:grid-cols-2 lg:gap-x-8 lg:gap-y-0">
            <div>
              <h3 class="text-sm font-medium text-gray-900">Company</h3>
              <ul role="list" class="mt-6 space-y-6">
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Who we are</a>
                </li>
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Press</a>
                </li>
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Careers</a>
                </li>
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Terms &amp; Conditions</a>
                </li>
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Privacy</a>
                </li>
              </ul>
            </div>
            <div>
              <h3 class="text-sm font-medium text-gray-900">Connect</h3>
              <ul role="list" class="mt-6 space-y-6">
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Instagram</a>
                </li>
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Pinterest</a>
                </li>
                <li class="text-sm">
                  <a href="#" class="text-gray-500 hover:text-gray-600">Twitter</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
  
        <div class="border-t border-gray-100 py-10 sm:flex sm:items-center sm:justify-between">
          <div class="flex items-center justify-center text-sm text-gray-500">
            <p>Shipping to Canada ($CAD)</p>
            <p class="ml-3 border-l border-gray-200 pl-3">English</p>
          </div>
          <p class="mt-6 text-center text-sm text-gray-500 sm:mt-0">&copy; 2021 Your Company, Inc.</p>
        </div>
      </div>
    </footer>
  </div>
  

</body>
</html>
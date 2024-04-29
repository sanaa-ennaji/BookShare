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
                  <td class="hidden py-6 pr-8 sm:table-cell">{{ $order->status }}</td>
                  <td class="hidden py-6 pr-8 sm:table-cell">{{ $order->total_price }}</td>
                  <td class="whitespace-nowrap py-6 text-right font-medium">
                    <a href="{{url('/invoice/' .$order->id. '/generate' )}}" class="mt-6 flex w-full text-white items-center justify-center rounded-md border border-gray-300 bg-blue-500  py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:mt-0 sm:w-auto">
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
  
    
  </div>
  

</body>
</html>
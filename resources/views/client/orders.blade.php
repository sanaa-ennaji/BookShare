<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
   

  
        <!-- Secondary navigation -->
        <div class="bg-white">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
              <div class="flex h-16 items-center justify-between">
                <!-- Logo (lg+) -->
                <div class="hidden lg:flex lg:items-center">
                  <a href="#">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                  </a>
                </div>
  
                <div class="hidden h-full lg:flex">
                  <!-- Mega menus -->
                  <div class="ml-8">
                    <div class="flex h-full justify-center space-x-8">
                      <div class="flex">
                        <div class="relative flex">
                          <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                          <button type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false">Women</button>
                        </div>
  
                      
                        <div class="absolute inset-x-0 top-full text-gray-500 sm:text-sm">
                          <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                          <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
  
                          <div class="relative bg-white">
                            <div class="mx-auto max-w-7xl px-8">
                              <div class="grid grid-cols-2 items-start gap-x-8 gap-y-10 pb-12 pt-10">
                                <div class="grid grid-cols-2 gap-x-8 gap-y-10">
                                  <div>
                                    <p id="desktop-featured-heading-0" class="font-medium text-gray-900">Featured</p>
                                    <ul role="list" aria-labelledby="desktop-featured-heading-0" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Sleep</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Swimwear</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Underwear</a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div>
                                    <p id="desktop-categories-heading" class="font-medium text-gray-900">Categories</p>
                                    <ul role="list" aria-labelledby="desktop-categories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Basic Tees</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Artwork Tees</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Bottoms</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Underwear</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Accessories</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="grid grid-cols-2 gap-x-8 gap-y-10">
                                  <div>
                                    <p id="desktop-collection-heading" class="font-medium text-gray-900">Collection</p>
                                    <ul role="list" aria-labelledby="desktop-collection-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Everything</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Core</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">New Arrivals</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Sale</a>
                                      </li>
                                    </ul>
                                  </div>
  
                                  <div>
                                    <p id="desktop-brand-heading" class="font-medium text-gray-900">Brands</p>
                                    <ul role="list" aria-labelledby="desktop-brand-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Full Nelson</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">My Way</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Significant Other</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="flex">
                        <div class="relative flex">
                          <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                          <button type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false">Men</button>
                        </div>
  
                
                        <div class="absolute inset-x-0 top-full text-gray-500 sm:text-sm">
                          <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                          <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
  
                          <div class="relative bg-white">
                            <div class="mx-auto max-w-7xl px-8">
                              <div class="grid grid-cols-2 items-start gap-x-8 gap-y-10 pb-12 pt-10">
                                <div class="grid grid-cols-2 gap-x-8 gap-y-10">
                                  <div>
                                    <p id="desktop-featured-heading-1" class="font-medium text-gray-900">Featured</p>
                                    <ul role="list" aria-labelledby="desktop-featured-heading-1" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Casual</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Boxers</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Outdoor</a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div>
                                    <p id="desktop-categories-heading" class="font-medium text-gray-900">Categories</p>
                                    <ul role="list" aria-labelledby="desktop-categories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Artwork Tees</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Pants</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Accessories</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Boxers</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Basic Tees</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="grid grid-cols-2 gap-x-8 gap-y-10">
                                  <div>
                                    <p id="desktop-collection-heading" class="font-medium text-gray-900">Collection</p>
                                    <ul role="list" aria-labelledby="desktop-collection-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Everything</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Core</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">New Arrivals</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Sale</a>
                                      </li>
                                    </ul>
                                  </div>
  
                                  <div>
                                    <p id="desktop-brand-heading" class="font-medium text-gray-900">Brands</p>
                                    <ul role="list" aria-labelledby="desktop-brand-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Significant Other</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">My Way</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                      </li>
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Full Nelson</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
  
                      <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>
                      <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
                    </div>
                  </div>
                </div>
  
             
                <div class="flex flex-1 items-center lg:hidden">
              
                  <button type="button" class="-ml-2 rounded-md bg-white p-2 text-gray-400">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                  </button>
  
                  <!-- Search -->
                  <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Search</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                  </a>
                </div>
  
                <!-- Logo (lg-) -->
                <a href="#" class="lg:hidden">
                  <span class="sr-only">Your Company</span>
                  <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto">
                </a>
  
                <div class="flex flex-1 items-center justify-end">
                  <div class="flex items-center lg:ml-8">
                    <div class="flex space-x-8">
                      <div class="hidden lg:flex">
                        <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                          <span class="sr-only">Search</span>
                          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                          </svg>
                        </a>
                      </div>
  
                      <div class="flex">
                        <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                          <span class="sr-only">Account</span>
                          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                          </svg>
                        </a>
                      </div>
                    </div>
  
                    <span class="mx-4 h-6 w-px bg-gray-200 lg:mx-6" aria-hidden="true"></span>
  
                    <div class="flow-root">
                      <a href="#" class="group -m-2 flex items-center p-2">
                        <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                        <span class="sr-only">items in cart, view bag</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
  
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
                  <th scope="col" class="hidden w-1/5 py-3 pr-8 font-normal sm:table-cell">order number</th>
                  <th scope="col" class="hidden w-1/5 py-3 pr-8 font-normal sm:table-cell">date</th>
                  <th scope="col" class="hidden w-1/5 py-3 pr-8 font-normal sm:table-cell">status</th>
                  <th scope="col" class="hidden py-3 pr-8 font-normal sm:table-cell">total</th>
                  <th scope="col" class="hidden py-3 pr-8 font-normal sm:table-cell">Info</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 border-b border-gray-200 text-sm sm:border-t">
                <tr>
                    <td class="hidden py-6 pr-8 sm:table-cell">id</td>
                    <td class="hidden py-6 pr-8 sm:table-cell">Jan 25, 2021</td>
                  <td class="hidden py-6 pr-8 sm:table-cell">Delivered</td>
                  <td class="hidden py-6 pr-8 sm:table-cell"> $36.00</td>
                  <td class="whitespace-nowrap py-6 text-right font-medium">
                    <a href="#" class="mt-6 flex w-full items-center justify-center rounded-md border border-gray-300 bg-white  py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:w-auto">
                        download Invoice
                        <span class="sr-only">for order WU88191111</span>
                      </a>
                  </td>
                </tr>
  
                <!-- More products... -->
              </tbody>
            </table>
          </div>
  
          <!-- More orders... -->
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
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="bg-white">
    <!--
      Mobile menu
  
      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
      <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.
  
        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="fixed inset-0 bg-black bg-opacity-25"></div>
  
      <div class="fixed inset-0 z-40 flex">
        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.
  
          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
        <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
          <div class="flex px-4 pb-2 pt-5">
            <button type="button" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
              <span class="sr-only">Close menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
  
          <!-- Links -->
          <div class="mt-2">
            <div class="border-b border-gray-200">
              <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                <button id="tabs-1-tab-1" class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium" aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>
                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                <button id="tabs-1-tab-2" class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium" aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
              </div>
            </div>
  
            <!-- 'Women' tab panel, show/hide based on tab state. -->
            <div id="tabs-1-panel-1" class="space-y-12 px-4 pb-6 pt-10" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
              <div class="grid grid-cols-1 items-start gap-x-6 gap-y-10">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10">
                  <div>
                    <p id="mobile-featured-heading-0" class="font-medium text-gray-900">Featured</p>
                    <ul role="list" aria-labelledby="mobile-featured-heading-0" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Sleep</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Swimwear</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Underwear</a>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <p id="mobile-categories-heading" class="font-medium text-gray-900">Categories</p>
                    <ul role="list" aria-labelledby="mobile-categories-heading" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Basic Tees</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Artwork Tees</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Bottoms</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Underwear</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Accessories</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="grid grid-cols-1 gap-x-6 gap-y-10">
                  <div>
                    <p id="mobile-collection-heading" class="font-medium text-gray-900">Collection</p>
                    <ul role="list" aria-labelledby="mobile-collection-heading" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Everything</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Core</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">New Arrivals</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Sale</a>
                      </li>
                    </ul>
                  </div>
  
                  <div>
                    <p id="mobile-brand-heading" class="font-medium text-gray-900">Brands</p>
                    <ul role="list" aria-labelledby="mobile-brand-heading" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Full Nelson</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">My Way</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Re-Arranged</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Counterfeit</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Significant Other</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- 'Men' tab panel, show/hide based on tab state. -->
            <div id="tabs-1-panel-2" class="space-y-12 px-4 pb-6 pt-10" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">
              <div class="grid grid-cols-1 items-start gap-x-6 gap-y-10">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10">
                  <div>
                    <p id="mobile-featured-heading-1" class="font-medium text-gray-900">Featured</p>
                    <ul role="list" aria-labelledby="mobile-featured-heading-1" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Casual</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Boxers</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Outdoor</a>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <p id="mobile-categories-heading" class="font-medium text-gray-900">Categories</p>
                    <ul role="list" aria-labelledby="mobile-categories-heading" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Artwork Tees</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Pants</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Accessories</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Boxers</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Basic Tees</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="grid grid-cols-1 gap-x-6 gap-y-10">
                  <div>
                    <p id="mobile-collection-heading" class="font-medium text-gray-900">Collection</p>
                    <ul role="list" aria-labelledby="mobile-collection-heading" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Everything</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Core</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">New Arrivals</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Sale</a>
                      </li>
                    </ul>
                  </div>
  
                  <div>
                    <p id="mobile-brand-heading" class="font-medium text-gray-900">Brands</p>
                    <ul role="list" aria-labelledby="mobile-brand-heading" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Significant Other</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">My Way</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Counterfeit</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Re-Arranged</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Full Nelson</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
            </div>
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
            </div>
          </div>
  
          <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create an account</a>
            </div>
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
            </div>
          </div>
  
          <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <!-- Currency selector -->
            <form>
              <div class="inline-block">
                <label for="mobile-currency" class="sr-only">Currency</label>
                <div class="group relative -ml-2 rounded-md border-transparent focus-within:ring-2 focus-within:ring-white">
                  <select id="mobile-currency" name="currency" class="flex items-center rounded-md border-transparent bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-gray-700 focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-800">
                    <option>CAD</option>
                    <option>USD</option>
                    <option>AUD</option>
                    <option>EUR</option>
                    <option>GBP</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
    <header class="relative">
      <nav aria-label="Top">
        <!-- Top navigation -->
        <div class="bg-gray-900">
          <div class="mx-auto flex h-10 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <!-- Currency selector -->
            <form class="hidden lg:block lg:flex-1">
              <div class="flex">
                <label for="desktop-currency" class="sr-only">Currency</label>
                <div class="group relative -ml-2 rounded-md border-transparent bg-gray-900 focus-within:ring-2 focus-within:ring-white">
                  <select id="desktop-currency" name="currency" class="flex items-center rounded-md border-transparent bg-gray-900 bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-white focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-100">
                    <option>CAD</option>
                    <option>USD</option>
                    <option>AUD</option>
                    <option>EUR</option>
                    <option>GBP</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                    <svg class="h-5 w-5 text-gray-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
              </div>
            </form>
  
            <p class="flex-1 text-center text-sm font-medium text-white lg:flex-none">Get free delivery on orders over $100</p>
  
            <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
              <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
              <span class="h-6 w-px bg-gray-600" aria-hidden="true"></span>
              <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
            </div>
          </div>
        </div>
  
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
  
                        <!--
                          'Women' mega menu, show/hide based on flyout menu state.
  
                          Entering: "transition ease-out duration-200"
                            From: "opacity-0"
                            To: "opacity-100"
                          Leaving: "transition ease-in duration-150"
                            From: "opacity-100"
                            To: "opacity-0"
                        -->
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
  
                        <!--
                          'Men' mega menu, show/hide based on flyout menu state.
  
                          Entering: "transition ease-out duration-200"
                            From: "opacity-0"
                            To: "opacity-100"
                          Leaving: "transition ease-in duration-150"
                            From: "opacity-100"
                            To: "opacity-0"
                        -->
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
  
            <div class="rounded-lg bg-gray-50 px-4 py-6 sm:flex sm:items-center sm:justify-between sm:space-x-6 sm:px-6 lg:space-x-8">
              <dl class="flex-auto space-y-6 divide-y divide-gray-200 text-sm text-gray-600 sm:grid sm:grid-cols-3 sm:gap-x-6 sm:space-y-0 sm:divide-y-0 lg:w-1/2 lg:flex-none lg:gap-x-8">
                <div class="flex justify-between sm:block">
                  <dt class="font-medium text-gray-900">Date placed</dt>
                  <dd class="sm:mt-1">
                    <time datetime="2021-01-22">January 22, 2021</time>
                  </dd>
                </div>
                <div class="flex justify-between pt-6 sm:block sm:pt-0">
                  <dt class="font-medium text-gray-900">Order number</dt>
                  <dd class="sm:mt-1">WU88191111</dd>
                </div>
                <div class="flex justify-between pt-6 font-medium text-gray-900 sm:block sm:pt-0">
                  <dt>Total amount</dt>
                  <dd class="sm:mt-1">$104.00</dd>
                </div>
              </dl>
              <a href="#" class="mt-6 flex w-full items-center justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:w-auto">
                View Invoice
                <span class="sr-only">for order WU88191111</span>
              </a>
            </div>
  
            <table class="mt-4 w-full text-gray-500 sm:mt-6">
              <caption class="sr-only">
                Products
              </caption>
              <thead class="sr-only text-left text-sm text-gray-500 sm:not-sr-only">
                <tr>
                  <th scope="col" class="py-3 pr-8 font-normal sm:w-2/5 lg:w-1/3">Product</th>
                  <th scope="col" class="hidden w-1/5 py-3 pr-8 font-normal sm:table-cell">Price</th>
                  <th scope="col" class="hidden py-3 pr-8 font-normal sm:table-cell">Status</th>
                  <th scope="col" class="w-0 py-3 text-right font-normal">Info</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 border-b border-gray-200 text-sm sm:border-t">
                <tr>
                  <td class="py-6 pr-8">
                    <div class="flex items-center">
                      <img src="https://tailwindui.com/img/ecommerce-images/order-history-page-04-product-01.jpg" alt="Black tee with intersecting red, white, and green curved lines on front." class="mr-6 h-16 w-16 rounded object-cover object-center">
                      <div>
                        <div class="font-medium text-gray-900">Men&#039;s 3D Glasses Artwork Tee</div>
                        <div class="mt-1 sm:hidden">$36.00</div>
                      </div>
                    </div>
                  </td>
                  <td class="hidden py-6 pr-8 sm:table-cell">$36.00</td>
                  <td class="hidden py-6 pr-8 sm:table-cell">Delivered Jan 25, 2021</td>
                  <td class="whitespace-nowrap py-6 text-right font-medium">
                    <a href="#" class="text-indigo-600">View<span class="hidden lg:inline"> Product</span><span class="sr-only">, Men&#039;s 3D Glasses Artwork Tee</span></a>
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
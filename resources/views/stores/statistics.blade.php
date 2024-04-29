<!DOCTYPE html>
<html lang="en">
    @include('components/head')
<body class="bg-gray-200">
  @if(Auth::user()->store->is_validated == 'accepted' )
    @include('components/sideBar')

    <div class="mt-20 sm:ml-80 sm:mr-5 ml-6 w-[95%]">
  
<div class="grid gap-6 mb-8 grid-cols-2 md:grid-cols-2 xl:grid-cols-2">

    <div
      class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
      <div class="p-4 flex items-center">
        <div
          class="p-3 rounded-full text-blue-500 dark:text-blue-100 bg-blue-100 dark:bg-blue-500 mr-4"
        >
        <svg class="w-6 h-6 text-blue-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4" />
    </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
           books
          </p>
          <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
            {{ $bookCount }}
          </p>
        </div>
      </div>
    </div>

    <div
      class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
      <div class="p-4 flex items-center">
        <div
          class="p-3 rounded-full text-blue-500 dark:text-blue-100 bg-blue-100 dark:bg-blue-500 mr-4"
        >
        <svg class="w-6 h-6 text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
        height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
    </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Orders
          </p>
          <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $orderCount }}</p>
        </div>
      </div>
    </div>
  </div>
  @else

  <div class="ml-10">
    <h1 class="text-[80px] font-extrabold text-gray-700">400</h1>
    <p class="text-xl font-medium text-gray-600 mb-6">NOT  accepted yet</p>
  
</div>
  @endif
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>

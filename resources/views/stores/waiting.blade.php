
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</head>
    <body >
        {{-- @include('components/navbar')
        @include('components/navbar2') --}}
<div class="bg-blue-100 dark:bg-gray-800">
    <div class="min-h-screen flex flex-col justify-center items-center">
      {{-- <img src="../img/astro.png" alt="Logo" class="mb-4 h-50"> --}}
      
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200" width="300" height="200">
        <circle fill="#FF156D" stroke="#FF156D" stroke-width="20" r="25" cx="60" cy="100">
            <animate attributeName="cy" calcMode="spline" dur="2" values="100;175;100;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.4"></animate>
        </circle>
        <circle fill="#FF156D" stroke="#FF156D" stroke-width="20" r="25" cx="150" cy="100">
            <animate attributeName="cy" calcMode="spline" dur="2" values="100;175;100;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.2"></animate>
        </circle>
        <circle fill="#FF156D" stroke="#FF156D" stroke-width="20" r="25" cx="240" cy="100">
            <animate attributeName="cy" calcMode="spline" dur="2" values="100;175;100;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="0"></animate>
        </circle>
    </svg>
    
      <h1 class="text-xl md:text-xl lg:text-4xl font-bold text-center mt-8 text-gray-700 dark:text-white mb-4">registration request has been submitted</h1>
      <p class="text-center text-gray-500 dark:text-gray-300 text-lg md:text-xl lg:text-2xl mb-8">Please allow a few days .our team carefully reviews each application
        <br>  to ensure alignment with our platform's standards and values. </p>
      <div class="flex space-x-4">
        <a href="/" class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded dark:bg-gray-700 dark:hover:bg-gray-600">Go back</a>
        <a href=""  class="shadow border-blue-500 shadow-outline outline-none text-white font-bold py-3 px-6 rounded">get started</a>
      </div>
    </div>
</div>
  
{{-- <div class="relative h-screen w-full flex flex-col items-center justify-center text-center text-white bg-cover bg-center"
    style="background-image:url(https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2850&amp;q=80);">
    <div class="absolute top-0 right-0 bottom-0 left-0 bg-gray-900 opacity-90"></div>

    <div class="z-10 text-sm">
        WE ARE COMING SOON!
    </div>

    <div class="flex items-end justify-center z-10">
        <div class="m-2 sm:m-5">
            <span class="text-indigo-600 font-bold text-xl sm:text-5xl">110</span>
            <p>Days</p>
        </div>
        <div class="m-2 sm:m-5">
            <span class="text-indigo-600 font-bold text-xl sm:text-5xl">13</span>
            <p>Hours</p>
        </div>
        <div class="m-2 sm:m-5">
            <span class="text-indigo-600 font-bold text-xl sm:text-5xl">47</span>
            <p>Minutes</p>
        </div>
        <div class="m-2 sm:m-5">
            <span class="text-indigo-600 font-bold text-xl sm:text-5xl">20</span>
            <p>Seconds</p>
        </div>
    </div>

    <div class="rounded-md shadow z-10 mt-5">
        <a href="#"
            class="w-full px-8 py-3 border border-transparent text-base leading-6 font-light rounded-full text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-md md:px-16">
            <span>Who We Are?</span>
        </a>
    </div>

</div> --}}

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
        <div class="border-1 shadow-lg shadow-gray-700 rounded-lg sm:h-[20vh] sm:w-[80%] mx-auto" style="background-image: url(../img/Thunder.png)">
            <div class="flex rounded-t-lg bg-top-color sm:px-2 w-full">
                <div class="h-40 w-40 overflow-hidden rounded-full sm:relative sm:p-0 sm:top-20 top-40 left-5 p-3">
                    <img src="../img/bookstore.jpg"/>
                </div>
    
                <div class="w-2/3 sm:text-center pl-5 mt-10 text-start">
                    <p class="font-poppins font-bold text-heading sm:text-4xl text-2xl">
                        Amit Pachange
                    </p>
                    <p class="text-heading">Software Engineer</p>
                </div>
    
            </div>
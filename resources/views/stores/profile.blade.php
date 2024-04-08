
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
        <div class="border-1  sm:h-[45vh] sm:w-[80%] mx-auto" style="background-image: url(../img/pexels-min-an-694740.jpg)">
            <div class="flex rounded-t-lg bg-top-color sm:px-2 w-full">
                <div class="overflow-hidden rounded-full sm:relative sm:p-0 sm:top-60 top-35 h-32 w-32 sm:w-25 sm:h-25 ">
                    {{-- <img class="object-cover object-center h-32 sm:h-25" src="../img/téléchargement.jpg"/> --}}
                    <img class="object-cover object-center h-32" src='../img/pexels-tuur-tisseghem-626986.jpg'>
                </div>
            </div>
            </div>
            <div class="border-1 sm:h-[45vh] sm:w-[80%] mx-auto">
              {{-- <h2 class="font-semibold relative">book storte</h2> --}}
              </div>
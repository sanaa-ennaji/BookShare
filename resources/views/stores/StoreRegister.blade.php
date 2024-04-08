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


        <div class=" w-[100%] sm:w-[90%] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12 border">
                <div class="bg-red-500 md:col-span-4 p-10 text-white">
                    <p class="mt-4 text-sm leading-7 font-regular uppercase">
                       send a damande 
                    </p>
                    <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight">
                            Book Stores <span class="text-red-900">Register</span>
                    </h3>
                    <p class="mt-4 leading-7 text-gray-200">
                        Your fisrt step to make your Business online 
                       join us by filling this  form and wait for acception our team will verify your Book store
                        informations and then you can start  publishing  your books on our platform .
                    </p>
        
                    <div class="flex items-center mt-5">
                        <svg class="h-6 mr-2 text-white" fill="currentColor" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 489.536 489.536"
                            xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 489.536 489.536">
                            <g>
                                <g>
                                    <path
                                        d="m488.554,476l-99-280.2c-1-4.2-5.2-7.3-9.4-7.3h-45.6c12.9-31.1 19.6-54.9 19.6-70.8 0-64.6-50-117.7-112.5-117.7-61.5,0-112.5,52.1-112.5,117.7 0,17.6 8.2,43.1 19.9,70.8h-39.7c-4.2,0-8.3,3.1-9.4,7.3l-99,280.2c-3.2,10.3 6.3,13.5 9.4,13.5h468.8c4.2,0.5 12.5-4.2 9.4-13.5zm-246.9-455.3c51,1.06581e-14 91.7,43.7 91.7,96.9 0,56.5-79.2,182.3-91.7,203.1-31.3-53.1-91.7-161.5-91.7-203.1 0-53.1 40.6-96.9 91.7-96.9zm-216.7,448l91.7-259.4h41.7c29.9,64.1 83.3,151 83.3,151s81.4-145.7 83.8-151h47.4l91.7,259.4h-439.6z">
                                    </path>
                                    <rect width="136.5" x="177.054" y="379.1" height="20.8"></rect>
                                    <path
                                        d="m289.554,108.2c0-26-21.9-47.9-47.9-47.9s-47.9,21.9-47.9,47.9 20.8,47.9 47.9,47.9c27.1,0 47.9-21.8 47.9-47.9zm-75-1c0-14.6 11.5-27.1 27.1-27.1s27.1,12.5 27.1,27.1-11.5,27.1-27.1,27.1c-14.6,2.84217e-14-27.1-12.5-27.1-27.1z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span class="text-sm">YouCode safi, Simplone</span>
                    </div>
                 
        
                </div>
                <form class="md:col-span-8 p-10" method="POST" action="/StoreRegister">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name">
                               Store name
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name" type="text" name="name" placeholder="book shop">
                            {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                               phone number
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" name="phone" placeholder="+121 0000 0000 ">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name" >
                               address
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name" type="text" name="address" placeholder="Store address">
                            {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                city
                            </label>
                            <select id="city" name="city"
                            class="citySelect appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            &>
                            <option selected value="">city</option>
                            <option value=""></option>
                            
                        </select>
                        </div>
                    </div>



                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                                Email 
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-email" type="email" name="email" placeholder="********@*****.**">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                                password
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-email" type="password" name="password" placeholder="********">
                        </div>
                    </div>
        
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                              description 
                            </label>
                            <textarea rows="10" name="description"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </textarea>
                        </div>
                        <div class="flex justify-between w-full px-3">
                            <div class="md:flex md:items-center">
                              
                            </div>
                            <button
                                class="shadow bg-red-600 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded"
                                type="submit">
                              Register
                            </button>
                        </div>
        
                    </div>
        
                </form>
        
            </div>
        </div>
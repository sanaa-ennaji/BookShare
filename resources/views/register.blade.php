<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>
    <body>
        {{-- @include('components/navbar')

        @include('components/navbar2') --}}
<div class="bg-red-50 h-[100vh] flex">
 
<div class="w-1/2 h-[100%] hidden lg:block">
  <img src="img/téléchargement.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
</div>

<div class="lg:px-36 lg:py-10  md:p-52 sm:40  p-8 w-full lg:w-1/2">
               <div class="text-slate-100 items-center">
                  <a href="/"> <img src="img/15744737.548a00c0e09dc-removebg-preview.png" alt="" class="h-20 w-20  mx-auto pb-3"></a>
                  
               </div>
           
               <form method="POST" action="/CostumerRegister">
                 @csrf
                   <div class="mb-5">
                       <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                           Full Name
                       </label>
                       <input type="text" name="name" id="name" placeholder="Full Name"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                   </div>

                   <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                       Phone 
                    </label>
                    <input type="text" name="phone" id="name" placeholder="+121 00000 0000"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
   
                   <div class="-mx-3 flex flex-wrap">
                      
                       <div class="w-full px-3 sm:w-1/2">
                           <div class="mb-5">
                               <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                                   Email
                               </label>
                               <input type="email" name="email" id="email" placeholder="name00@gmail.com"
                                   class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                           </div>
                       </div>
   
                       <div class="w-full px-3 sm:w-1/2">
                           <div class="mb-5">
                               <label for="password" class="mb-3 block text-base font-medium text-[#07074D]">
                                 Password
                               </label>
                               <input type="text" name="password" id="password" placeholder="********"
                                   class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                           </div>
                       </div>
                   </div>
                 
                   <div>
                       <button type="submit"
                           class="hover:shadow-form w-full rounded-md bg-red-600 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                          Resgister
                       </button>
                   </div>
                   <p class="text-sm text-center text-gray-400  mt-4 mb-4">
                       alreaday have an acount ? 
                       <a href="/login" class="font-semibold text-indigo-500 focus:text-red-600 focus:outline-none focus:underline"> Log in</a>.
                     </p>
               </form>
               <div class="flex flex-row justify-center mb-8">
                   <span class="absolute bg-red-50 px-4 text-gray-500">or sign-in with</span>
                   <div class="w-full bg-gray-200 mt-3 h-px"></div>
                 </div>
             
                 <div class="flex flex-row gap-2">
                   <button class="bg-red-500 text-white w-full p-2 flex flex-row justify-center gap-2 items-center rounded-sm hover:bg-red-600 duration-100 ease-in-out">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="w-5" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.372 0 0 5.373 0 12s5.372 12 12 12c6.627 0 12-5.373 12-12S18.627 0 12 0zm.14 19.018c-3.868 0-7-3.14-7-7.018c0-3.878 3.132-7.018 7-7.018c1.89 0 3.47.697 4.682 1.829l-1.974 1.978v-.004c-.735-.702-1.667-1.062-2.708-1.062c-2.31 0-4.187 1.956-4.187 4.273c0 2.315 1.877 4.277 4.187 4.277c2.096 0 3.522-1.202 3.816-2.852H12.14v-2.737h6.585c.088.47.135.96.135 1.474c0 4.01-2.677 6.86-6.72 6.86z" fill="currentColor"/></g></svg>
                     Google
                   </button>
                   <button class="bg-gray-700 text-white w-full p-2 flex flex-row justify-center gap-2 items-center rounded-sm hover:bg-gray-800 duration-100 ease-in-out">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="w-5" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385c.6.105.825-.255.825-.57c0-.285-.015-1.23-.015-2.235c-3.015.555-3.795-.735-4.035-1.41c-.135-.345-.72-1.41-1.23-1.695c-.42-.225-1.02-.78-.015-.795c.945-.015 1.62.87 1.845 1.23c1.08 1.815 2.805 1.305 3.495.99c.105-.78.42-1.305.765-1.605c-2.67-.3-5.46-1.335-5.46-5.925c0-1.305.465-2.385 1.23-3.225c-.12-.3-.54-1.53.12-3.18c0 0 1.005-.315 3.3 1.23c.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23c.66 1.65.24 2.88.12 3.18c.765.84 1.23 1.905 1.23 3.225c0 4.605-2.805 5.625-5.475 5.925c.435.375.81 1.095.81 2.22c0 1.605-.015 2.895-.015 3.3c0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z" fill="currentColor"/></g></svg>
                     Github
                   </button>
                 </div>  
               {{-- <div class="mt-6 text-blue-500 text-center">
                   <a href="/clientRegister" class="hover:underline">client register</a>
                 </div> --}}
           </div>
       </div>
         
       </div>
   </body>
   </html>

<nav class="fixed top-0 z-30 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
   <div class="px-3 py-3 lg:px-5 lg:pl-3">
     <div class="flex items-center justify-between">
       <div class="flex items-center justify-start rtl:justify-end">
         <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
             <span class="sr-only">Open sidebar</span>
             <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
             </svg>
          </button>
       
       </div>
       <div class="flex items-center">
           <div class="flex items-center ms-3">
           
          
             <div>
               <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                 <span class="sr-only">Open user menu</span>
                 <img class="w-8 h-8 rounded-full" src="../img/15744737.548a00c0e09dc-removebg-preview.png" alt="user photo">
               </button>
             </div>
             <div class=" m-2">
               <p class="text-sm font-medium text-gray-900 truncate dark:text-white" role="none">
                  {{ Auth::user()->name }}
                 </p>
                
            </div>

             <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
               <div class="px-4 py-3" role="none">
                 <p class="text-sm text-gray-900 dark:text-white" role="none">
                  {{ Auth::user()->name }}
                 </p>
                 <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  {{ Auth::user()->email }}
                 </p>
               </div>
               <ul class="py-1" role="none">
                 <li>
                   <a href="/statistics" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                 </li>
                 <li>
                   <a href="/profile-update" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">profile</a>
                 </li>
                 <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                     <form action="/logout" method="POST">
                     @csrf
                     <button id="bot">
           
                         <span>Logout</span>
                     </button>
                 </form></a>
           
                 </li>
               </ul>
             </div>
             
           </div>
         </div>
     </div>
   </div>
 </nav>

 <div class="flex ">
 <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-5 transition-transform -translate-x-full mr-10 bg-blue-500 border-r border-gray-200  sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <a href="/" class="flex ms-2 md:me-24 mb-5 ml-5">
       <img   src="../img/15744737.548a00c0e09dc-removebg-preview.png" class="h-15 sm:ms-4" alt="Logo" />
     </a>
    <div class="h-full px-5 mt-10 pb-4 overflow-y-auto bg-blue-500 dark:bg-gray-800">
      
       <ul class="space-y-2 font-medium">
          <li>
             <a href="/statistics" class="flex items-center p-2 text-white hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                   <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                   <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                </svg>
                <span class="ms-3">statistic</span>
             </a>
          </li>
          <li>
             <a href="/dashboard" class="flex items-center p-2 text-white hover:text-black  rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="w-6 h-6 text-white dark:text-white hover:text-black " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
               width="24" height="24" fill="none" viewBox="0 0 24 24">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                   d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4" />
           </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">books</span>
               
             </a>
          </li>
        
         

          <li>
             <a href="/store/orders" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:text-black  hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <i class='bx bx-archive  text-lg text-white hover:text-black '></i>  
                <span class="flex-1 ms-3 whitespace-nowrap">orders</span>
             </a>
          </li>
          <li>
            <form action="/logout" method="POST">
               @csrf
             <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white  hover:text-black  hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 hover:text-black  group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
               </svg>
              
                  <button id="bot">
                    
                     <span class="flex-1 ms-3 whitespace-nowrap">Sign out</span>
                  </button>

             </a>
            </form>
          </li>
       </ul>
    </div>
 </aside>
 
 
 

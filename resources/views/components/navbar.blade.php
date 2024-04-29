<nav
  class=" relative flex w-full items-center bg-gray-100  py-2 shadow-dark-mild dark:bg-neutral-700 lg:flex-wrap lg:justify-start ">
  <div class="flex w-full  items-center justify-between sm:w-[70vw] md:w-[70vw] mx-auto md:px-5 sm:px-10">
   
    <div
      class=" items-center lg:!flex lg:basis-auto"
      id="navbarSupportedContent1"
      data-twe-collapse-item>
 
      <a 
        class=" me-5 ms-5 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
        href="/">
        <img
          src="../img/15744737.548a00c0e09dc-removebg-preview.png"
          style="height: 45px"
          alt="Logo"
          loading="lazy"/>
      </a>
    </div> 

    
<form id="searchForm" class="mx-auto sm:w-[40vw]  rounded-2xl" action="{{ route('search') }}" method="GET">
    
    
       
        <div class="relative w-full"> 
            <input type="text" name="search" id="searchInput" placeholder="Search by title, author, ISBN, or price" class="block p-2.5 sm:w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-full border-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"   />
            <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-r-full border border-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</form>


    <div class="relative flex items-center mr-20">
      @auth
      @if(auth()->user()->costumer)
      <a id="cart-icon"
      class="ps-2 text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80"
      href="/cart">
      <span class="[&>svg]:w-5">
        <svg class="text-blue-500"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor">
          <path
            d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
        </svg>
        <span
        class="cart-count absolute -mt-6 ms-3 rounded-full bg-red-400 px-[0.35em] py-[0.15em] text-[0.6rem] font-bold leading-none text-white"
        ></span>
      </span>
    </a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
    $(document).ready(function() {
       
        function updateCartCount() {
            $.ajax({
                url: '{{ route("cart.count") }}',
                type: 'GET',
                success: function(response) {
                    $('.cart-count').text(response.count);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

      
        updateCartCount();
    });
</script>
    @endif
    @endauth
    
  
    
    @auth
    <button aria-expanded="false" data-dropdown-toggle="dropdown-user"
    class="flex items-center px-2 text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80"
    type="button"
    id="dropdownMenuButton2"
    data-twe-dropdown-toggle-ref
    aria-expanded="false">
    <span class="[&>svg]:h-5 [&>svg]:w-5">
      <svg  class="text-blue-500"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        fill="currentColor"
        stroke-width="1.5">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
      </svg>
    </span>
    <span class="[&>svg]:w-5">
      <svg  class="text-blue-500"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20"
        fill="currentColor">
        <path
          fill-rule="evenodd"
          d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
          clip-rule="evenodd" />
      </svg>
    </span>
  </button>
   
    @else
    <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" href="/register">Sign up</a>
    @endauth
    @auth
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
        <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
      </li>
      <li>
        <a href="/adminCategory" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">profile</a>
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
  @endauth
</nav>


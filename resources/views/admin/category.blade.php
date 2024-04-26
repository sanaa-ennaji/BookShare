<!DOCTYPE html>
<html lang="en">
    @include('components/head')
<body class="bg-gray-200">
    @include('components/sidebare')
   
    <div class="mt-20 ml-40">
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" id="btn"
        class="relative block text-white bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 ml-40 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">
        add new Category
    </button>
    <div id="crud-modal"
    class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-center items-center">
    <div class="relative p-4 w-full max-w-[30%] max-h-full bg-white rounded-lg shadow dark:bg-gray-700">
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Create Category
            </h3>
            <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-toggle="crud-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close</span>
            </button>
        </div>
        <form class="p-4 md:p-5" method="POST" action="/createCategory" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 mb-4 grid-cols-1">
                <div class="col-span-2 sm:col-span-1">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" id="title" name="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </div>
            </div>
            <button type="submit"
                class="left-0 text-white inline-flex items-center bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Confirm
            </button>
        </form>
    </div>
</div>

<div class="text-gray-800 font-inter fixed top-25 right-0 w-[90%]">
<div class="mt-10 bg-gray-50 min-h-screen w-[80%] mx-auto">
      <div class=" p-4 rounded-md">
        <div>
          <h2 class="mb-4 text-xl font-bold text-gray-700">Admin & User</h2>
          <div>
            <div>
              <div class="flex justify-between bg-gradient-to-tr from-indigo-600 to-blue-600 rounded-md py-2 px-4 text-white font-bold text-md">
               
                <div>
                  <span>title</span>
                </div>
                <div>
                  <span>image</span>
                </div>
                <div>
                    <span>delete</span>
                  </div>
                  <div>
                    <span>update</span>
                  </div>
              </div>
              <div>
            
                
                @foreach($categories as $category)
                <div class="flex justify-between border-t text-sm font-normal  mt-4  space-x-4">
                    <div class="px-2 flex">
                        <span>{{$category->title}}</span>
                    </div>
                    <div class=" py-2 flex flex-row items-center">
                        <img
                            class="h-10 w-10  object-cover "
                            src="{{asset('/storage/img/' . $category->image)}}"
                            alt=""
                        />
                    </div>
                 
               
                  <form class="px-2" action="/delete/{{$category->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                      <button  type="submit" 
                      class="mb-2 md:mb-0 bg-blue-500 border border-blue-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-blue-600">delete</button> 
                  </form>
                  <div class="px-2">
                    <button id="button{{ $category->id }}" onclick="toggleModal('progress-modal{{ $category->id }}', 'button{{ $category->id }}')"
                      class="mb-2 md:mb-0 bg-blue-500 border border-blue-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-blue-600">update</button> 
                </div>
              </div>
             
              <div id="progress-modal{{ $category->id }}"
                class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                  <div class="relative py-4 px-5 bg-white rounded-lg shadow dark:bg-gray-700 right-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
                    <form class="" method="POST" action="/approvement/{{ $category->id }}">
                        @csrf
                        @method('PUT')
                        <div class="relative">
                            <label for="statu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">approvement type</label>
                            <select name="reservation_approval" id="statu"
                                class="citySelect bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="manually" >manually</option>
                                <option value="automatic" >automatic</option>
                            </select>
                        </div>
                        <div class="flex items-center mt-6 space-x-4 rtl:space-x-reverse">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">confirm</button>
                            <button onclick="closeModal('progress-modal{{ $category->id }}')" type="button"
                                class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                        </div>
                    </form>
                    </div>
                </div>
          
            </div>
              @endforeach
           
            
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div> 

</div>

</div>

<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<body class="bg-gray-200">
    <div class="text-gray-800 font-inter">

        {{-- @include('components/sidestore') --}}

    <div class="mt-12 ml-4">
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" id="btn"
        class="relative block text-white bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">
        add new Category
    </button>

    <div id="deleteModal" class="hidden fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 flex justify-center items-center">
        <div class="modal-content bg-white p-6 rounded-lg shadow-lg w-[50%] h-[25%] mx-auto mt-20">
            <h2 class="text-xl font-semibold mb-4">Delete Category</h2>
            <p class="mb-4">Are you sure you want to delete this category?</p>
            <div class="flex justify-end">
                <form id="deleteForm" action="/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2">Delete</button>
                    <button type="button" onclick="closeModal()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Modal toggle -->
    <div class="flex justify-center m-5">
        <button id="deleteButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal" class="block text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
        Show delete confirmation
        </button>
    </div>
    
    <!-- Main modal -->
    <div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
                <div class="flex justify-center items-center space-x-4">
                    <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        No, cancel
                    </button>
                    <button type="submit" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                        Yes, I'm sure
                    </button>
                </div>
            </div>
        </div>
    </div>
    

    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-[30%] max-h-full">


            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

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

              

                <form class="p-4 md:p-5" method="POST" action="/createCategory"  enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-1">
                        <div class="col-span-2 sm:col-span-1">
                            <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">title</label>
                        <input type="text" id="title" name="title"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div> 
                        {{-- <div>

                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="file_input">Upload file</label>
                            <input
                                class="block w-full text-sm text-blue-900 border border-blue-300 rounded-lg cursor-pointer bg-blue-50 dark:text-blue-400 focus:outline-none dark:bg-blue-700 dark:border-blue-600 dark:placeholder-blue-400"
                                aria-describedby="file_input_help" name="image" id="images" 
                                 type="file">
                            <p class="mt-1 text-sm text-blue-500 dark:text-gray-300" id="file_input_help">SVG, PNG,
                                JPG or GIF (MAX. 800x400px).</p>
                        </div> --}}
                    </div>
                    <button type="submit" 
                        class="left-0 text-white inline-flex items-center bg-blue-600  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        confirm
                    </button>
                </form>
            </div>
        </div>
    </div>

    </div>

<div class="mt-10 bg-gray-50 min-h-screen m-5">
      <div class=" p-4 rounded-md">
        <div>
          <h2 class="mb-4 text-xl font-bold text-gray-700">Admin & User</h2>
          <div>
            <div>
              <div class="flex justify-between bg-gradient-to-tr from-indigo-600 to-blue-600 rounded-md py-2 px-4 text-white font-bold text-md">
               
                <div>
                  <span>image</span>
                </div>
                <div>
                  <span>title</span>
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
                 
                    <button type="button" onclick="openModal({{ $category->id }})" class="btn btn-danger">Delete</button>
                  {{-- <form class="px-2" action="/delete/{{$category->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                      <button  type="submit" 
                      class="mb-2 md:mb-0 bg-blue-500 border border-blue-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-blue-600">delete</button> 
                  </form> --}}
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


<script>
    function openModal(id) {
        var modal = document.getElementById('deleteModal');
        modal.style.display = "block";
        var form = document.getElementById('deleteForm');
        form.action = "/admin/category/" + id;
    }

    function closeModal() {
        var modal = document.getElementById('deleteModal');
        modal.style.display = "none";
    }
</script>



</style>



        
{{-- 
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="../js/sidebar.js"></script> --}}
<script src="js/cities.js"></script>
</body>
</html>
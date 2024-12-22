<!DOCTYPE html>
<html lang="en">
    @include('components/head')
<body class="bg-gray-200">
  @if(Auth::user()->store->is_validated == 'accepted' )
  
    @include('components/sideBar')

 
  <div class="mt-20 sm:ml-60">
    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" id="btn"
    class="ml-10 text-white bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
    type="button">
    add new book
</button>


<div id="crud-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-[50%] max-h-full">


        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Create Book
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


            <form class="p-4 md:p-5" method="POST" action="/createBook" enctype="multipart/form-data">

                @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="title"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">title</label>
                    <input type="text" id="title" name="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>


                    <div class="col-span-2 sm:col-span-1">
                        <label for="author"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">author</label>
                    <input type="text" id="author" name="author"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    </div>
                  
                    <div class="col-span-2 sm:col-span-1">
                        <label for="ISBN"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ISBN</label>
                        <input type="number" id="ISBN" name="ISBN"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                     
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="time"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">quantity</label>
                        <input type="number" id="quantity                                                                                                       h" name="quantity"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                     
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="price"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">price</label>
                        <input type="number" name="price" id="price"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$2999" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="Category"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                    <select id="Category" name="categorie_id"
                        class="citySelect bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected value="">Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                    </div>
                  

                    <div class="col-span-2">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Description</label>
                        <textarea id="description" name="description" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write description here"></textarea>
                    </div>
                    <div>

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="file_input">Upload file</label>
                        <input
                            class="block w-full text-sm text-blue-900 border border-blue-300 rounded-lg cursor-pointer bg-blue-50 dark:text-blue-400 focus:outline-none dark:bg-blue-700 dark:border-blue-600 dark:placeholder-blue-400"
                            aria-describedby="file_input_help" name="image" id="images" 
                             type="file">
                        <p class="mt-1 text-sm text-blue-500 dark:text-gray-300" id="file_input_help">SVG, PNG,
                            JPG or GIF (MAX. 800x400px).</p>
                    </div>
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



<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5 fixed top-40 right-0 w-[80%]"> 
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">cover</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">title</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">ISBN</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">quantity</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">price</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">category</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">updations</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        @foreach($books as $book)
        <tr class="hover:bg-gray-50">
          <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
            <div class=" py-2 flex flex-row items-center">
              <img
                class="h-10 w-10  object-cover "
                src="{{asset('storage/img/' . $book->image)}}"
                alt=""
              />
          </div>
          </th>
          <td class="px-6 py-4">{{$book->title}}</td>
          <td class="px-6 py-4">{{$book->ISBN}}</td>
        
          <td class="px-6 py-4">{{$book->quantity}}</td>
          <td class="px-6 py-4">{{$book->price}}</td>
          <td class="px-6 py-4">{{$book->category->title}}</td>
        
         
        <td class="px-6 py-4">
          <div class="flex justify-end gap-4">
            <form class="px-2" action="/deletebook/{{$book->id}}" method="POST">
              @csrf
              @method('DELETE')
            <button x-data="{ tooltip: 'Delete' }">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
                x-tooltip="tooltip" >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
              </svg>
            </button>
          </form>
       <a href="{{ route('book.edit', ['id' => $book->id]) }}">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none" 
                viewBox="0 0 24 24" 
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
                x-tooltip="tooltip">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                />
              </svg>
            </a>
          </div>
        </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  @else

  <div class="ml-10">
    <h1 class="text-[80px] font-extrabold text-gray-700">400</h1>
    <p class="text-xl font-medium text-gray-600 mb-6">NOT  accepted yet</p>
  
</div>
  @endif
  <script src="../js/cities.js"></script>
  <script>
    function updateStatus(storeId, is_validated) {
     
        fetch('/update-status', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                storeId: storeId,
                status: status
            })
        }).then(response => {
            if (response.ok) {
                location.reload();
            } else {
                console.error('Failed to update status');
            }
        }).catch(error => {
            console.error('Error:', error);
        });
    }
  </script>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>






{{-- 

               
                  </div>
                  <form class="px-2" action="/delete/{{$book->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                      <button  type="submit"
                      class="mb-2 md:mb-0 bg-blue-500 border border-blue-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-blue-600">delete</button> 
                  </form>
                  <div class="px-2">
                    <button id="button{{ $book->id }}" onclick="toggleModal('progress-modal{{ $book->id }}', 'button{{ $book->id }}')"
                      class="mb-2 md:mb-0 bg-blue-500 border border-blue-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-blue-600">update</button> 
                </div>
              </div>


              <div id="progress-modal{{ $book->id }}"
                class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                  <div class="relative py-4 px-5 bg-white rounded-lg shadow dark:bg-gray-700 right-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
                    <form class="" method="POST" action="/approvement/{{ $book->id }}">
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
                            <button onclick="closeModal('progress-modal{{ $book->id }}')" type="button"
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
    <script src="../js/cities.js"></script>
</body>
</html>  --}}
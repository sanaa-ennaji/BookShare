<!DOCTYPE html>
<html lang="en">
    @include('components/head')
<body class="bg-gray-200">
  
  
<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    
   
    

        <form class="p-4 md:p-5" method="POST" action="/createBook" enctype="multipart/form-data">

            @csrf
            <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2 sm:col-span-1">
                    <label for="title"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">title</label>
                <input type="text" id="title" name="title" value="{{$book->title}}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </div>


                <div class="col-span-2 sm:col-span-1">
                    <label for="author"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">author</label>
                <input type="text" id="author" name="author" value="{{$book->author}}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                </div>
              
                <div class="col-span-2 sm:col-span-1">
                    <label for="ISBN"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ISBN</label>
                    <input type="number" id="ISBN" name="ISBN" {{$book->ISBN}}
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                 
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="time"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">quantity</label>
                    <input type="number" id="quantity   {{$book->tquantity}}                                                                                                  h" name="quantity"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                 
                </div>

                <div class="col-span-2 sm:col-span-1">
                    <label for="price" 
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">price</label>
                    <input type="number" name="price" id="price" value=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="$2999" required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="Category"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                <select id="Category" name="categorie_id"
                    class="citySelect bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="{{$book->category->title}}">{{$book->category->title}}</option>
                    <option selected value="kids">kids</option>
                    <option selected value="fantasia">fantasia</option>
                    <option selected value="horror">horror</option>
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
            update book
            </button>
        </form>
    </div>
</div>
</div>
  </div>
</body>
</html>

    <!doctype html>
    <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite('resources/css/app.css')
    </head>
        <body >

    @include('components/navbar')
    @include('components/navbar2')
    <div class="w-[80vw] mx-auto">
        <div>
            <form method="POST" action="/updateProfile/{{ Auth::user()->store->id }}" >
                @csrf
                @method('PUT')
                <div class="bg-white dark:bg-gray-800">
                    <div class="container mx-auto bg-white dark:bg-gray-800 rounded">
                        <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5 bg-white dark:bg-gray-800">
                            <div class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center">
                                <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">{{ Auth::user()->name }} Profile</p>
                                <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto">
                            <div class=" mx-auto xl:mx-0">
                                <div class="rounded relative mt-8 h-48">
                                    <img id='preview_img' src="" alt="" class="w-full h-full object-cover rounded absolute shadow"  />
                                    <div class="absolute bg-black opacity-50 top-0 right-0 bottom-0 left-0 rounded"></div>
                                    <div class="flex items-center px-3 py-2 rounded absolute right-0  mt-4 cursor-pointer">
                                        <input name="cover" type="file" onchange="loadFile(event)" class="block w-full text-sm text-slate-500 file:-mr-50 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:text-blue-700 hover:file:bg-blue-100" />
                                    </div>
                                    <div class="w-20 h-20 rounded-full bg-cover bg-center bg-no-repeat absolute bottom-0 -mb-10 ml-12 shadow flex items-center justify-center">
                                        <div class="flex items-center justify-center space-x-6 my-5  rounded-md">
                                            <label class="block">
                                                <input name="image" type="file" onchange="loadFile2(event)" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 hidden" />
                                                <img id='preview_img2' class="h-20 w-20 object-cover rounded-full shadow-lg cursor-pointer" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg&ga=GA1.1.1700460183.1708560000&semt=ais" alt="Current profile photo" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-10 flex flex-col xl:w-3/5 lg:w-1/2 md:w-1/2 w-full">
                                    <label for="about" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Description</label>
                                    <textarea id="about" name="description" required class="bg-transparent border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-blue-700 resize-none placeholder-gray-500 text-gray-600 dark:text-gray-400" placeholder="Let the world know who you are" rows="5">{{ Auth::user()->store->description }}</textarea>
                                    {{-- <p class="w-full text-right text-xs pt-1 text-gray-600 dark:text-gray-400">Character Limit: 200</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto bg-white dark:bg-gray-800 mt-10 rounded px-4">
                    <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5">
                    </div>
                </div>
                <div class="container mx-auto xl:w-full">
                    <div class="w-full py-4 sm:px-0 bg-white dark:bg-gray-800 flex justify-end">
                        <button type="submit" class="focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 bg-blue-700 focus:outline-none transition duration-150 ease-in-out hover:bg-blue-600 rounded text-white px-8 py-2 text-sm" type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        var loadFile = function(event) {
            var input = event.target;
            var file = input.files[0];
            var type = file.type;
            var output = document.getElementById('preview_img');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src);
            }
        };

        var loadFile2 = function(event) {
            var input = event.target;
            var file = input.files[0];
            var type = file.type;
            var output = document.getElementById('preview_img2');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src);
            }
        };
    </script>
</body>
</html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
            <div class="w-[80vw] mx-auto">
                <div>
               
                <form id="login">
                    <div class="bg-white dark:bg-gray-800">
                        <div class="container mx-auto bg-white dark:bg-gray-800 rounded">
                            <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5 bg-white dark:bg-gray-800">
                                <div class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center">
                                    <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">Profile</p>
                                    <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                            <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" fill="currentColor" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-auto">
                                <div class=" mx-auto xl:mx-0">
                                    <div class="rounded relative mt-8 h-48">
                                        <img src="https://cdn.tuk.dev/assets/webapp/forms/form_layouts/form1.jpg" alt="" class="w-full h-full object-cover rounded absolute shadow" />
                                        <div class="absolute bg-black opacity-50 top-0 right-0 bottom-0 left-0 rounded"></div>
                                        <div class="flex items-center px-3 py-2 rounded absolute right-0 mr-4 mt-4 cursor-pointer">
                                            <p class="text-xs text-gray-100">Change Cover Photo</p>
                                            <div class="ml-2 text-gray-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                                    <line x1="16" y1="5" x2="19" y2="8" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="w-20 h-20 rounded-full bg-cover bg-center bg-no-repeat absolute bottom-0 -mb-10 ml-12 shadow flex items-center justify-center">
                                            <img src="https://cdn.tuk.dev/assets/webapp/forms/form_layouts/form2.jpg" alt="" class="absolute z-0 h-full w-full object-cover rounded-full shadow top-0 left-0 bottom-0 right-0" />
                                            <div class="absolute bg-black opacity-50 top-0 right-0 bottom-0 left-0 rounded-full z-0"></div>
                                            <div class="cursor-pointer flex flex-col justify-center items-center z-10 text-gray-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                                    <line x1="16" y1="5" x2="19" y2="8" />
                                                </svg>
                                                <p class="text-xs text-gray-100">Edit Picture</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-16 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                                        <label for="username" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Username</label>
                                        <input tabindex="0" type="text" id="username" name="username" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-blue-700 bg-transparent placeholder-gray-500 text-gray-600 dark:text-gray-400" placeholder="@example" />
                                    </div>
                                    <div class="mt-8 flex flex-col xl:w-3/5 lg:w-1/2 md:w-1/2 w-full">
                                        <label for="about" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">About</label>
                                        <textarea id="about" name="about" required class="bg-transparent border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-blue-700 resize-none placeholder-gray-500 text-gray-600 dark:text-gray-400" placeholder="Let the world know who you are" rows="5"></textarea>
                                        <p class="w-full text-right text-xs pt-1 text-gray-600 dark:text-gray-400">Character Limit: 200</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container mx-auto bg-white dark:bg-gray-800 mt-10 rounded px-4">
                            <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5">
                                <div class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center">
                                    <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">Personal Information</p>
                                    <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                            <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" fill="currentColor" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="container mx-auto xl:w-full">
                            <div class="w-full py-4 sm:px-0 bg-white dark:bg-gray-800 flex justify-end">
                                <button role="button" aria-label="cancel form" class="bg-gray-200 focus:outline-none transition duration-150 ease-in-out hover:bg-gray-300 dark:bg-gray-700 rounded text-blue-600 dark:text-blue-600 px-6 py-2 text-xs mr-4 focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">Cancel</button>
                                <button role="button" aria-label="Save form" class="focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 bg-blue-700 focus:outline-none transition duration-150 ease-in-out hover:bg-blue-600 rounded text-white px-8 py-2 text-sm" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
              
                <script>
                    let form = document.getElementById("login");
                    form.addEventListener(
                        "submit",
                        function (event) {
                            event.preventDefault();
                            let elements = form.elements;
                            let payload = {};
                            for (let i = 0; i < elements.length; i++) {
                                let item = elements.item(i);
                                switch (item.type) {
                                    case "checkbox":
                                        payload[item.name] = item.checked;
                                        break;
                                    case "submit":
                                        break;
                                    default:
                                        payload[item.name] = item.value;
                                        break;
                                }
                            }
                         
                            console.log("payload", payload);
                        },
                        true
                    );
                </script>
             
</body>
</html>
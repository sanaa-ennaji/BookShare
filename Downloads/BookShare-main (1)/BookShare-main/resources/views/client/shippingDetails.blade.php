<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class=" dark:bg-gray-900">
        <div class="w-full max-w-3xl mx-auto p-8 ">
            <form method="POST" action="/createaddress"  class="bg-gray-100 dark:bg-gray-800 p-8 rounded-lg shadow-md border dark:border-gray-700">
                @csrf
                <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Shipping Address</h1>

                <div class="mb-6">

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="first_name" class="block text-gray-700 dark:text-white mb-1">First Name</label>
                            <input type="text" id="first_name" name="first_name"
                                class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>
                        <div>
                            <label for="last_name" class="block text-gray-700 dark:text-white mb-1">Last Name</label>
                            <input type="text" id="last_name" name="last_name"
                                class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="phone" class="block text-gray-700 dark:text-white mb-1">phone</label>
                        <input type="tel" id="phone" name="phone"
                            class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" placeholder="">
                    </div>

                    <div class="mt-4">
                        <label for="address" class="block text-gray-700 dark:text-white mb-1">address</label>
                        <input type="text" id="address" name="address"
                            class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                    </div>

                    <div class="mt-4">
                        <label for="adress2" class="block text-gray-700 dark:text-white mb-1">adress2</label>
                        <input type="text" id="adress2" name="adress2" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                    </div>

                    <div class="mt-4">
                        <label for="city"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">city</label>
                    <select id="city" name="city"
                        class="citySelect bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected value="">city</option>
                       
                        
                    </select>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <label for="state" class="block text-gray-700 dark:text-white mb-1">State / County</label>
                            <input type="text" id="state" name="state"
                                class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>
                        <div>
                            <label for="zipcode" class="block text-gray-700 dark:text-white mb-1">ZIP Code</label>
                            <input type="text" id="zipcode" name="zipcode"
                                class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>
                    </div>
                </div>


                <div class="mt-8 flex justify-end">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 dark:bg-teal-600 dark:text-white dark:hover:bg-teal-900">confirme</button>
                </div>

            </form>
        </div>
    </div>
    <script src="../js/cities.js"></script>
</body>

</html>

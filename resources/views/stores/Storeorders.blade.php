<!DOCTYPE html>
<html lang="en">
    @include('components/head')
<body class="bg-gray-200">
    @include('components/sideBar')
<body>
 
<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5 fixed top-20 right-0 w-[80%]"> 
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">city</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">phone</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">bookStore</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">status</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        @if($orders->isEmpty())
        <p>No orders found.</p>
    @else

    @foreach($orders as $order)
        <tr class="hover:bg-gray-50">
          <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
            <div class="relative h-10 w-10">
              <img
                class="h-full w-full rounded-full object-cover object-center"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                alt=""
              />
              <span class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
            </div>
            <div class="text-sm">
              <div class="font-medium text-gray-700">{{ $order->id }}</div>
              <div class="text-gray-400">{{ $order->orderItems->book->title }}</div>
            </div>
          </th>
          <td class="px-6 py-4">  {{ $order->coetumer->user->name }}</td>
          <td class="px-6 py-4"> {{ $order->quantity }}</td>
        
          <td class="px-6 py-4">{{ $order->total_price }}</td>
          <td class="px-6 py-4">
        
                <button id="button{{ $order->id }}" onclick="toggleModal('progress-modal{{ $order->id }}', 'button{{ $order->id }}')"
                  class="mb-2 md:mb-0 bg-purple-500 border border-purple-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-purple-600">
                  update</button> 

          </div>


          <div id="progress-modal{{ $order->id }}"
            class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
              <div class="relative py-4 px-5 bg-white rounded-lg shadow dark:bg-gray-700 right-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
                <form class="" method="POST" action="/updateUser/{{ $order->id }}">
                    @csrf
                    @method('PUT')
                    <div class="relative">
                        <label for="statu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">delete user</label>
                        <select name="status" id="statu"
                                class="citySelect bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1" >dilevred</option>
                                <option value="0">returned</option>
                            </select>
                          
                    </div>
                    <div class="flex items-center mt-6 space-x-4 rtl:space-x-reverse">
                        <button type="submit"
                            class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">confirm</button>
                        <button onclick="closeModal('progress-modal{{$order->id }}')" type="button"
                            class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                    </div>
                </form>
                </div>
            </div>
      
        </td>
        </tr>
        @endforeach
        @endif
       
      </tbody>
    </table>
  </div>
  <script src="../js/cities.js"></script>
  <script>
  
  </script>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>

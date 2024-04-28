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
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">order</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">costumer</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">total price</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">status</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">status update</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        @if($orders->isEmpty())
        <p>No orders found.</p>
    @else

    @foreach($orders as $order)
        <tr class="hover:bg-gray-50">
          <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
            <div class="text-sm">
              <div class="font-medium text-gray-700">{{ $order->id }}</div>
              {{-- <div class="text-gray-400">{{ $order->orderItems->book->title }}</div> --}}
            </div>
          </th>
          <td class="px-6 py-4"></td>
   
   
    
      
          {{-- <td class="px-6 py-4">{{ $order->costumer->id }}</td> --}}
       
          <td class="px-6 py-4">{{ $order->status }}</td>
          <td class="px-6 py-4">{{ $order->total_price }}</td>
          <td class="px-6 py-4">
        
                <button id="button{{ $order->id }}" onclick="toggleModal('progress-modal{{ $order->id }}', 'button{{ $order->id }}')">
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
              </svg></button> 

          </div>


          <div id="progress-modal{{ $order->id }}"
            class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
              <div class="relative py-4 px-5 bg-white rounded-lg shadow dark:bg-gray-700 right-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
                <form class="" method="POST" action="{{ route('orders.update', ['id' => $order->id]) }}">

                    @csrf
                    @method('PUT')
                    <div class="relative">
                        <label for="statu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">update</label>
                        <select name="status" id="statu"
                                class="citySelect bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="dilevred">dilevred</option>
                                <option value="returned">returned</option>
                            </select>
                          
                    </div>
                    <div class="flex items-center mt-6 space-x-4 rtl:space-x-reverse">
                        <button type="submit"
                            class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">confirm</button>
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

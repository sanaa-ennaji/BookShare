<!DOCTYPE html>
<html lang="en">
    @include('components/head')
<body class="bg-gray-200">
    @include('components/sidebare')
<body>
 
<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5 fixed top-20 right-0 w-[80%]"> 
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">city</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">phone</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">bookStore</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">damane</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        @foreach($stores as $store)
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
              <div class="font-medium text-gray-700">{{ $store->user->name }}</div>
              <div class="text-gray-400">{{ $store->user->email }}</div>
            </div>
          </th>
          <td class="px-6 py-4">{{ $store->city }}</td>
          <td class="px-6 py-4">{{ $store->phone }}</td>
        
          <td class="px-6 py-4">{{ $store-> }}</td>
          <td class="px-6 py-4">
            <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600 cursor-pointer"
            onclick="updateStatus('{{ $store->id }}', 'accepted')">
          accepte
      </span>
            <span class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600 cursor-pointer">
                delete
            </span>
      
        
        </td>
        

        </tr>
        @endforeach
       
       
      </tbody>
    </table>
  </div>
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

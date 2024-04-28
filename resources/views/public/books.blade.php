<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> --}}
  
  </head>
      <body >
     
          @include('components/navbar')
  
          @include('components/navbar2')

          <section id="booksSection"
          class="w-[60vw] mx-auto grid grid-cols-2 sm:grid-cols-4 grid-cols-2 justify-items-center justify-center gap-y-10 gap-x-20 sm:gap-x-5 mt-20 mb-5">
         
          @foreach($books as $book)
          <a href="{{ route('book.details', ['id' => $book->id]) }}">
          <div class="w-50 bg-white rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            
                  <img src="{{asset('storage/img/' . $book->image)}}"
                          alt="Product" class="h-60 w-40 object-cover rounded-xl" />
                  <div class="py-3 w-50">
                      <p class="text-lg font-bold text-black truncate block capitalize ">{{ $book->title}}</p>
                      <div class="flex">
                        
                          <div class="flex items-center mt-2.5 mb-2.5">
                              <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                  </path>
                              </svg>
                              <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                  </path>
                              </svg>
                              <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                  </path>
                              </svg>
                              <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                  </path>
                              </svg>
                              <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                  </path>
                              </svg>
                              <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5  rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                          </div>
                      </div>
                      <div class="flex items-center mx-1">
                          <p class="text-lg font-semibold text-black cursor-auto mb-2">$149</p>
                          <del>
                              <p class="text-sm text-gray-600 cursor-auto ml-2 mb-2">{{ $book->price}}</p>
                          </del>
                        
                       
                      </div>
                  </div>
            
          </div>
      </a>
      @endforeach
      
      
      </section>
    
          {{-- <section  class="w-[60vw] mx-auto grid grid-cols-2 sm:grid-cols-5 grid-cols-2 justify-items-center justify-center gap-y-10 gap-x-20 sm:gap-x-5 mt-20 mb-5">
          
        </section> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        function fetchBooks(searchQuery) {
            $.ajax({
                url: '{{ route("search") }}',
                type: 'GET',
                data: { search: searchQuery },
                success: function(response) {
                    var booksHtml = '';
                    if (response.books.length > 0) {
                        response.books.forEach(function(book) {
                            booksHtml += '<a href="/book/' + book.id + '">' +
                                '<div class="w-50 bg-white rounded-xl duration-500 hover:scale-105 hover:shadow-xl">' +
                                '<img src="{{asset('storage/img')}}/' + book.image + '" alt="Product" class="h-60 w-40 object-cover rounded-xl" />' +
                                '<div class="py-3 w-50">' +
                                '<p class="text-lg font-bold text-black truncate block capitalize ">' + book.title + '</p>' +
                                '<div class="flex">' +
                                '<div class="flex items-center mt-2.5 mb-2.5">' +
                                ' <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">  '+' <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">'+'
                                     </path>'+'
                              </svg>' +
                                '<span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>' +
                                '</div>' +
                                '</div>' +
                                '<div class="flex items-center mx-1">' +
                                '<p class="text-lg font-semibold text-black cursor-auto mb-2">$149</p>' +
                                '<del><p class="text-sm text-gray-600 cursor-auto ml-2 mb-2">' + book.price + '</p></del>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</a>';
                        });
                    } else {
                        booksHtml = '<p>No books found.</p>';
                    }
                    $('#booksSection').html(booksHtml);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

        $('#searchForm').submit(function(e) {
            e.preventDefault();
            var searchQuery = $('#searchInput').val();
            fetchBooks(searchQuery);
        });

     
        fetchBooks('');
    });
</script>


</body>
</html>
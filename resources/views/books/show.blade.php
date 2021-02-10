
{{-- {{var_dump($category)}}
{{var_dump($author)}} --}}
{{-- <table>
    <tr>
        <th>Title</title></th>
        <th>Author</th>
        <th>Category</th>
    </tr>
@foreach($category as $book)

<tr>  
    <td>{{$book->title}}</td>
    <td>{{$book->author}}</td>
    <td>{{$book->category}}</td>
</tr>

@endforeach
    
</table>

<table>
    <tr>
        <th>Title</title></th>
        <th>Author</th>
        <th>Category</th>
    </tr>
@foreach($author as $book)

<tr>  
    <td>{{$book->title}}</td>
    <td>{{$book->author}}</td>
    <td>{{$book->category}}</td>
</tr>

@endforeach
    
</table> --}}
<x-app-layout>

    @section('content')

    <div class="inline-flex items-center px-4 py-3 ">
        <a href="{{ route('booksUser.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Return to the list</a>
    </div> 
    
    
        <div class="flex flex-col items-center">
            <div class="justify-center my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 border-double border-4">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            
            <div class="px-6 py-4">
              <div class="font-bold text-2xl mb-4">{{$book->title}}</div>
              <p class="text-gray-700 text-xl">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt at.
              </p>
              <div class="font-bold text-l italic mb-4 pt-5">{{$book->author}}</div>
            </div>
            
            <div class="px-6 py-4">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-5">#photography</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
            </div>
          </div>
          <div>
          </div>
            </div>

      @endsection

    </x-app-layout> 
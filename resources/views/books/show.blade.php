{{-- <header>@include('components.header')</header> --}}
<x-app-layout>
    @section('content')

    <div class="inline-flex items-center px-4 py-3 ">
        @auth
        <a href="{{ route('books.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black py-2 px-4 rounded">Return to the list</a>
       @else
        <a href="{{ route('booksUser.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black py-2 px-4 rounded">Return to the list</a>
        @endauth
    </div>

    
    <div class="flex flex-row justify-center pb-10 h-80 w-auto">
        <div class="flex bg-white shadow-lg rounded-lg overflow-hidden h-full w-1/2">
          <div class="w-1/2 bg-cover bg-center" style="background-image: url('https://assets.entrepreneur.com/content/3x2/2000/20191219170611-GettyImages-1152794789.jpeg')">
          </div> 
          <div class="w-2/3 p-4 flex justify-center flex-col ">
            <p class="text-gray-900 text-2xl">{{implode(' ', (array_reverse(explode(', ',$book->title))))}}</p>
            <p class="mt-6 text-gray-600 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit In odit exercitationem fuga id nam quia</p>
            <div class="flex mt-2">
                <div class=" text-l italic mb-4 pt-5">{{$book->author}}</div>
            </div>
            <div class="flex justify-between mt-3">
              <h1 class=" bg-gray-200 rounded px-3 py-2 uppercase text-sm font-semibold text-gray-700">{{$book->category}}</h1>
              <button class="px-3 py-2 bg-gray-800 text-white text-xs uppercase rounded">borrow</button>
            </div>
          </div>
        </div>
      </div>
   
    {{-- SUGGESTION --}}
    <h1 class="flex justify-center text-xl text-gray-400 uppercase"> Suggestion with the same category</h1>
  
    <div class="flex flex-row justify-center py-10 max-h-96 w-auto">
        <div class="flex bg-white shadow-lg rounded-lg overflow-hidden h-full w-1/2">
            @foreach($category as $book)
            <div class="w-1/3 p-4 flex justify-between flex-col ">
            <h1 class="text-gray-900 text-2xl">{{implode(' ', (array_reverse(explode(', ',$book->title))))}}</h1>
            <p class="mt-6 text-gray-600 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit In odit exercitationem fuga id nam quia</p>
            <div class="flex mt-2">
                <div class=" text-l italic mb-4 pt-5">{{$book->author}}
                  <a class="ml-4 bg-gray-200 rounded-full px-1 py-1 text-sm text-gray-700" href="{{route('books.show', $book->id)}}">show</a>
                </div>
            </div>
            <div class="flex justify-between mt-3">
              <p class=" bg-gray-200 rounded px-3 py-2 uppercase text-sm font-semibold text-gray-700">{{$book->category}}</p>
              <button class="px-3 py-2 bg-gray-800 text-white text-xs uppercase rounded">borrow</button>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <h1 class="flex justify-center text-xl text-gray-400 uppercase"> Suggestion with the same author</h1>
      <div class="flex flex-row justify-center py-10 max-h-96 w-auto">
        <div class="flex bg-white shadow-lg rounded-lg overflow-hidden h-full w-1/2">
            @foreach($category as $book)
            <div class="w-1/3 p-4 flex justify-between flex-col ">
            <h1 class="text-gray-900 text-2xl">{{implode(' ', (array_reverse(explode(', ',$book->title))))}}</h1>
            <p class="mt-6 text-gray-600 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit In odit exercitationem fuga id nam quia</p>
            <div class="flex mt-2">
                <div class=" text-l italic mb-4 pt-5">{{$book->author}}
                  <a class="ml-4 bg-gray-200 rounded-full px-1 py-1 text-sm text-gray-700" href="{{route('books.show', $book->id)}}">show</a>
                </div>
            </div>
            <div class="flex justify-between mt-3">
              <p class=" bg-gray-200 rounded px-3 py-2 uppercase text-sm font-semibold text-gray-700">{{$book->category}}</p>
              <button class="px-3 py-2 bg-gray-800 text-white text-xs uppercase rounded">borrow</button>
            </div>
          </div>
          @endforeach
        </div>
      </div>



    @endsection

</x-app-layout>

<x-app-layout>

    @section('content')

    <div class="inline-flex items-center px-4 py-3 ">
        <a href="{{ route('booksUser.index') }}"
            class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Return to the list</a>
    </div>


    <div class="flex flex-col items-center">
        <div class="justify-center my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 border-double border-4">
            <div class="max-w-sm rounded overflow-hidden shadow-lg">

                <div class="px-6 py-4">
                    <div class="font-bold text-2xl mb-4">{{$book->title}}</div>
                    <p class="text-gray-700 text-xl">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt at blablabla.
                    </p>
                    <div class="font-bold text-l italic mb-4 pt-5">{{$book->author}}</div>
                </div>

                <div class="px-6 py-4">
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 ml-28">{{$book->category}}</span>
                </div>
            </div>
        </div>
    </div>


    {{-- SUGGESTION --}}
    <h1 class="text-2xl underline ml-3"> A little suggestion</h1>
    <p class="text-l  ml-3">By category</p>
<div class="flex flex-row justify-center">
    @foreach($category as $book)
    <div class="flex justify-center ">
        <div class="flex items-center mx-5">
            <div class="flex  bg-white shadow-md p-4 rounded-md">

                <div class="flex flex-col justify-between">
                    <div data-placeholder class="mb-2 h-5   bg-gray-200" style="width: 200px">
                        {{$book->title}}
                    </div>
                    <div data-placeholder class="h-10   bg-gray-200" style="width: 200px">
                        {{$book->author}}
                    </div>
                    <div data-placeholder class="h-10   bg-gray-200" style="width: 200px">
                        {{$book->category}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<p class="text-l  ml-3">By author</p>
<div class="flex flex-row justify-center">
    @foreach($author as $book)
    <div class="flex justify-center ">
        <div class="flex items-center mx-5">
            <div class="flex  bg-white shadow-md p-4 rounded-md">

                <div class="flex flex-col justify-between">
                    <div data-placeholder class="mb-2 h-5   bg-gray-200" style="width: 200px">
                        {{$book->title}}
                    </div>
                    <div data-placeholder class="h-10   bg-gray-200" style="width: 200px">
                        {{$book->author}}
                    </div>
                    <div data-placeholder class="h-10   bg-gray-200" style="width: 200px">
                        {{$book->category}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


    @endsection

</x-app-layout>

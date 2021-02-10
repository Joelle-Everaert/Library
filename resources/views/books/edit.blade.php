<x-app-layout>

    @section('content')

    
    <div class=" flex items-center justify-center mt-10">
        
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action= " {{route('books.update', $book->id)}} " method="POST">
            @csrf
            @method('PUT')

            <br>
            <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center px-72">Edit</h1>
            <br>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                   Title
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="title" id="name" type="text" value="{{$book->title}}" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Author
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="author" type="text" value="{{$book->author}}" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Category
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="category"  type="text" value="{{$book->category}}" required>
            </div>

            <div class="mb-4">

                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Quantity
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="quantity" type="text" value="{{$book->quantity}}" required>
                
             </div>

             <div class="flex items-center justify-between">
                <button id="submit"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                Send
                </button>
            </div>

        </form>
        
    </div>


    @endsection 
</x-app-layout>
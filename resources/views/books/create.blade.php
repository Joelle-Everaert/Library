
<x-app-layout>

    @section('content')

    
    <div class=" flex items-center justify-center mt-10">
        
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action= " {{route('books.store')}} " method="POST">
            @csrf
            @method('POST')

            <br>
            <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center px-72">NEW BOOK</h1>
            <br>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                   Title
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="title" id="name" type="text" placeholder="title" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Author
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="author" type="text" placeholder="author's name" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Category
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="category"  type="text" placeholder="category" required>
            </div>

            <div class="mb-4">

                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Quantity
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="quantity" type="text" placeholder="quantity" required>
                
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

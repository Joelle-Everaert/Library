<x-app-layout>

    @section('content')
    
    <div class="inline-flex items-center px-4 py-3 ">
        <a href="{{ route('books.index') }}"
            class="bg-gray-200 hover:bg-gray-300 text-black py-2 px-4 rounded">back</a>
    </div>

    <form class="mb-20 w-full mx-auto max-w-3xl bg-white shadow p-8 text-gray-700 mt-4" action=" {{route('books.store')}} " method="POST">

        @csrf
        @method('POST')

        <h2 class="w-full text-3xl leading-tight my-5 text-center">New book</h2>
        {{-- Title field --}}
        <div class="flex flex-wrap mb-6">
            <div class="relative w-full appearance-none label-floating">
                <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                name="title" type="text" placeholder="Title"required>
                <label for="name" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                    Title
                </label>
            </div>
        </div>
        <!-- author field -->
        <div class="flex flex-wrap mb-6">
            <div class="relative w-full appearance-none label-floating">
                <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                name="author" type="text" placeholder="Author"required>
                <label for="name" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                    Author
                </label>
            </div>
        </div>
        <!-- category field -->
        <div class="flex flex-wrap mb-6">
            <div class="relative w-full appearance-none label-floating">
                <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                name="category" type="text" placeholder="Category"required>
                <label for="name" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                    Category
                </label>
            </div>
        </div>
         <!-- quantity field -->
        <div class="flex flex-wrap mb-6">
            <div class="relative w-full appearance-none label-floating">
                <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                name="quantity" placeholder="Quantity"required>
                <label for="name" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                    Quantity
                </label>
            </div>
        </div>
    
        <div class="pl-48">
            <button class="w-80 mr-100 shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-black py-2 px-4 rounded"
                type="submit">
                Send
            </button>
        </div>
    </form>
 
    @endsection
</x-app-layout>

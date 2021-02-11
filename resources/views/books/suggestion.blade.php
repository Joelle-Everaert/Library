<x-app-layout>

    @section('content')

    <h1 class="flex text-xl pt-7 ml-10"> Please use this form to send me your recommandation for new book </h1>

    <form id="contact-me" class="mb-20 w-full mx-auto max-w-3xl bg-white shadow p-8 text-gray-700 mt-14 ">


        <h2 class="w-full text-3xl text-center leading-tight my-5">Suggestion</h2>
        {{-- Title field --}}
        <div class="flex flex-wrap mb-6">
            <div class="relative w-full appearance-none label-floating">
                <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                id="name" type="text" placeholder="Title"required>
                <label for="name" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                    Title
                </label>
            </div>
        </div>
        <!-- author field -->
        <div class="flex flex-wrap mb-6">
            <div class="relative w-full appearance-none label-floating">
                <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                id="name" type="text" placeholder="Author"required>
                <label for="name" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                    Author
                </label>
            </div>
        </div>
        <!-- category field -->
        <div class="flex flex-wrap mb-6">
            <div class="relative w-full appearance-none label-floating">
                <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                id="name" type="text" placeholder="Category"required>
                <label for="name" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                    Category
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

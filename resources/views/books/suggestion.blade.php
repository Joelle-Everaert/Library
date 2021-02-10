<x-app-layout>

    @section('content')

    <h1 class="flex text-xl ml-10"> Please use this form to send me your recommandation for new book </h1>
    <div class=" flex items-center justify-center mt-10">

        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

            <br>
            <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center px-72">Suggestion</h1>
            <br>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Title
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="title" id="name" type="text"> </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Author
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="author" type="text"> </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Category
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="category" type="text">
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

<x-app-layout>

    @section('content')
    
    <div class=" max-w-6xl mx-auto py-10 sm:px-6 lg:px-8 ">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Author
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Category
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Quantity
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Show
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Edit
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Delete
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">

                                @foreach($books as $book)

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-1">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{implode(' ', (array_reverse(explode(', ',$book->title))))}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{implode(' ', (array_reverse(explode(', ',$book->author))))}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{$book->category}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">
                                        {{$book->quantity}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-400">
                                        <a href="{{route('books.show', $book->id)}}">show</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-green-800">
                                        <a href="{{route('books.edit', $book->id)}}">edit</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                        <form action="{{ route('books.destroy', $book->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-800" type="submit">delete</button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                             </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <span>{{$books->links()}}</span>
    </div>
                        
  @endsection

</x-app-layout>

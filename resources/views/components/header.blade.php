
    <div class="flex flex-wrap p-5 flex-col md:flex-row items-center bg-gray-800 w-full">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <x-application-logo/>
        <span class="ml-3 text-xl text-gray-300">Joelle's Book</span>
      </a>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
        @auth
        <a href="{{route('books.create')}}" class="mr-5 pr-10 text-gray-400">ADD A BOOK</a> 
        <a  class="mr-5 pr-10 text-gray-400">ORDERS</a> 
        <a  class="mr-5 pr-10 text-gray-400">EMAILS</a> 
        @else
        <a href={{route('booksUser.index')}} class="mr-5 pr-10 text-gray-400">HOME</a>  
        <a href="{{route('suggestion')}}" class="mr-5 pr-10 text-gray-400">SEND A SUGGESTION</a>
        <a href="{{route('contact')}}" class="mr-5 pr-10 text-gray-400">CONTACT</a>
        @endauth
      </nav>
      <button class="inline-flex items-center bg-gray-300 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="{{route('logout')}}"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">Logout</a>
                
            </form>
        @else
            <a href="{{ route('login') }}" class="text-black">Login</a>
        @endauth

        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>

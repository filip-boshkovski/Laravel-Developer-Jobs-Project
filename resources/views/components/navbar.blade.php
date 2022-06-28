<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-white shadow-lg m-2">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="/" class="flex items-center">
        <img class="w-28 mx-5" src={{asset('images/Dev(5).png')}} alt="" height="200px" width="200px" class="logo">
      </a>
      <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
          <li>
            <a href="/" class="block font-normal text-base py-2 pr-4 pl-3 text-blue-500 lg:text-stone-600 border-b lg:hover:text-sky-500 border-gray-100 hover:bg-sky-300 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
          </li>
          <li>
            <a href="#" class="block font-normal text-base py-2 pr-4 pl-3 text-blue-500 lg:text-stone-600 border-b lg:hover:text-sky-500 border-gray-100 hover:bg-sky-300 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
          </li>
          <li>
            <a href="#" class="block font-normal text-base py-2 pr-4 pl-3 mr-5 text-blue-500 lg:text-stone-600 lg:hover:text-sky-500 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
          </li>
          @auth
          <li>
            <span class="font-bold uppercase">Welcome {{auth()->user()->name}}</span>
         </li>
         <li>
            <a href="/listings/manage" class="font-normal text-base text-stone-600 hover:text-sky-400 mx-2 "
                ><i class="fa-solid fa-gear"></i>
                Manage Listings</a
            >
        </li>
        <li>
            <form class="" action="/logout" method="POST">
            @csrf
            <button class="font-normal text-base text-stone-600 mx-2 hover:text-sky-400 " type="submit">
                <i class="fa-solid fa-door-closed"></i>Logout
            </button>
            </form>
        </li>
        @else
        <li>
            <a href="/register" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Register</a>
          </li>
          <li>
            <a href="/login" class="inline-block px-6 py-2.5 mr-2 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Login</a>
          </li>
        @endauth
        </ul>
      </div>
    </div>
  </nav>
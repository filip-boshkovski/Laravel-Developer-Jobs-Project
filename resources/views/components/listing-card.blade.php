@props(['listing'])

<x-card>
    <div class="container my-24 px-6 mx-auto">
        <section class="mb-32 text-gray-800 text-center md:text-left">
          <div class="grid md:grid-cols-2 gap-x-6 xl:gap-x-12 items-center mb-12">
            <div class="mb-6 md:mb-0">
              <div
                class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg"
                data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}"
                  class="w-full" alt="Louvre" />
                <a href="#!">
                  <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                    style="background-color: rgba(251, 251, 251, 0.2)"></div>
                </a>
              </div>
            </div>
      
            <div class="mb-6 md:mb-0">
              <h3 class="text-2xl font-bold mb-3"><a href="listings/{{$listing->id}}">{{$listing->title}}</a></h3>
              <p class="text-gray-500 mb-6">
                <small>Company :
                  <a href="" class="text-gray-900">{{$listing->company}}</a></small>
              </p>
              <x-listing-tags :tagsCsv="$listing->tags" />
              <p class="text-gray-500 mt-3">
                <i class="fa-solid fa-location-dot pr-1"></i>{{$listing->location}}
              </p>
              <a href="listings/{{$listing->id}}" class="mt-6 text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </a>
            </div>
        </section>
      </div>
</x-card>
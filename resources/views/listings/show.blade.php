<x-layout>
    
    @include('partials._search')

        
    <a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-left-long fa-2xl"></i>
</a>
<div class="mx-4">
    <x-card class="">

        <div class="container my-24 px-6 mx-auto">

            <section class="mb-32">
              <style>
                @media (min-width: 992px) {
                  #cta-img-nml-50 {
                    margin-left: 50px;
                  }
                }
              </style>
          
              <div class="flex flex-wrap">
                <div class="grow-0 shrink-0 basis-auto w-full lg:w-5/12 mb-12 lg:mb-0">
                  <div class="flex lg:py-12">
                    <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}" class="w-full rounded-lg shadow-lg"
                      id="cta-img-nml-50" style="" alt="" />
                  </div>
                </div>
          
                <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
                  <div
                    class="bg-stone-100 h-full rounded-lg p-6 lg:pl-12 text-black flex items-center text-center lg:text-left">
                    <div class="lg:pl-12">
                      <h2 class="text-3xl font-bold mb-6">Job Description: {{$listing->title}}</h2>
                      <h4 class="text-3xl font-bold mb-6">Company Name: {{$listing->company}}</h4>
                      <p class="mb-6 pb-2 lg:pb-0">
                        {{$listing->description}}
                      </p>

                      <div class="text-lg my-4">
                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                    </div>
          
                      <a href="mailto:{{$listing->email}}" class="text-gray-900 bg-[#F7BE38] hover:bg-[#F7BE38]/90 focus:ring-4 focus:outline-none focus:ring-[#F7BE38]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#F7BE38]/50 mr-2 mb-2">
                        <i class="mr-2 fa-solid fa-envelope"></i>
                        Contact Employer
                      </a>

                      <a href="{{$listing->website}}" class="text-white bg-[#050708] hover:bg-[#050708]/80 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-[#050708]/40 dark:focus:ring-gray-600 mr-2 mb-2">
                        Visit Website
                        <i class="ml-2 fa-solid fa-globe"></i>
                      </a>
              
                    </div>
                  </div>
                </div>
              </div>
            </section>
          
          </div>
    </x-card>

</div>
</x-layout>
   
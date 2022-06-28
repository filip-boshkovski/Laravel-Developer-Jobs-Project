<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="/css/app.css" rel="stylesheet">
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>DevJobs - Find And Post Developer Jobs</title>
    </head>
    <body class="mb-32">

@include('components.navbar')
      

  <main>    
    {{$slot}}
  </main> 


    <footer class="text-center text-white fixed bottom-0 w-full" style="background-color: #0EA5E9;">
      <div class="container p-6">
        <div class="">
          <p class="flex justify-center items-center">
            <span class="mr-4">You are welcome to contribute</span>
            <a href="/listings/create" class="inline-block px-6 py-2 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Post a Job</a>
          </p>
        </div>
      </div>
      <div class="text-center p-4" style="background-color: #38BDF8">
        © 2022 Copyright:
        <a class="text-white" href="/">Dev Jobs</a>
      </div>
    </footer>

    <x-flash-message />

    <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="fixed hidden inline-block p-3 bg-sky-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-sky-400 hover:shadow-lg focus:bg-sky-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-700 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5" id="btn-back-to-top">
      <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path></svg>
    </button>

    @include('components.footer');

    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

    <script>
      let mybutton = document.getElementById("btn-back-to-top");

      window.onscroll = function () {
         scrollFunction();
      };

      function scrollFunction() {
       if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
      ) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

     mybutton.addEventListener("click", backToTop);

     function backToTop() {
       document.body.scrollTop = 0;
       document.documentElement.scrollTop = 0;
    }
    </script>
</body>
</html>
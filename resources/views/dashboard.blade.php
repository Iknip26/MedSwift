<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="bg-gradient-to-r from-blue-50 to-purple-50 min-h-screen relative">
    <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <h1 class="text-4xl text-med">Med<span class="text-4xl text-swift">Swift</span></h1>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-nav_warna hover:text-white border border-swift hover:bg-swift focus:ring-4 focus:outline-none focus:ring-nav_warna rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Masuk/Daftar</button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a href="#" class="block py-2 px-3 text-xl text-nav_warna hover:underline">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-xl text-nav_warna hover:underline">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-xl text-nav_warna hover:underline">Feature</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-xl text-nav_warna hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div
        class="w-full flex flex-col mt-14 items-center justify-center bg-gradient-to-br from-biru via-slate-200 to-ping">
        <img src="../img/top-view-pills-cure-removebg-preview 1.png" class="w-2/3 h-1/4 ml-auto">
        <div class="absolute top-20 left-32">
            <h5 class="text-6xl font-semibold tracking-tight mb-4">
                Optimize your Healthcare: <br> Easily order Prescription <br> Medications!
            </h5>
        </div>
    </div>

    <!-- <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <form class="max-w-lg mx-auto">
      <div class="flex">
          <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
          <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
    </svg></button>
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
              <li>
                  <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
              </li>
              <li>
                  <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
              </li>
              <li>
                  <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
              </li>
              <li>
                  <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
              </li>
              </ul>
          </div>
          <div class="relative w-full">
              <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates..." required />
              <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                  </svg>
                  <span class="sr-only">Search</span>
              </button>
          </div>
      </div>
    </form>
  </div> -->

    <div class="mt-10">
        <p class="text-4xl font-semibold text-gray-900 dark:text-white mt-10 ml-48">Choose Your Hospital</p>
    </div>

    <div id="hospital-data-container" class="grid grid-cols-3 auto-cols-min mt-10">
        <!-- Data will be appended here -->
    </div>
</body>

</html>


<script>
    $.ajax({
        url: "{!! route('stoks.index') !!}",
        type: "GET",
        dataType: "json",
        success: function(response) {
            // Check if response data is an array
            if (Array.isArray(response)) {
                // Handle the response data
                var html = '';
                response.forEach(function(item) {
                    html +=
                        '<div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 justify-self-end">';
                    html += '<a href="#">';
                    html += '<img class="p-8 rounded-t-lg w-3/4 mx-auto" src="' + item.hospital
                        .logo +
                        '" alt="hospital logo" />'; // Mengambil gambar rumah sakit dari response
                    html += '</a>';
                    html += '<div class="px-5 pb-5">';
                    html += '<a href="#">';
                    html +=
                        '<h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">' +
                        item.hospital.name + '</h5>'; // Mengambil nama rumah sakit dari response
                    html += '</a>';
                    html += '</div>';
                    html += '</div>';
                });
                $('#hospital-data-container').html(html);
            } else {
                console.log("Invalid data format. Expected an array.");
            }
        },
        error: function(xhr, status, error) {
            // Handle errors, if any
            console.log(error);
        }
    });
    $(document).ready(function() {
        // Tambahkan event click ke setiap kartu rumah sakit
        $(document).on('click', '.hospital-card', function(e) {
            e.preventDefault();
            
            var hospitalId = $(this).data('hospital-id'); // Dapatkan ID rumah sakit dari data-attribute

            // Lakukan AJAX request untuk mendapatkan item dari rumah sakit tertentu
            $.ajax({
                url: '/stoks?hospital_id=' + hospitalId, // Sesuaikan dengan URL rute yang sesuai di aplikasi Laravel Anda
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Handle response data, misalnya, menampilkan item dalam modal
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });

</script>

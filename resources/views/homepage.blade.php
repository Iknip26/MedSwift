<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  

<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b">
  <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
      <h1 class="text-4xl text-med">Med<span class="text-4xl text-swift">Swift</span></h1>
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <a href="/login" type="button" class="text-nav_warna hover:text-white border border-swift hover:bg-swift focus:ring-4 focus:outline-none focus:ring-nav_warna rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Masuk/Daftar</a>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
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

<div class="w-full flex flex-col mt-14 fixed items-center justify-center bg-gradient-to-br from-biru via-slate-200 to-ping h-screen">
  <img src="../img/Frame.png" class="w-745 h-716 ml-auto">

  <div class="absolute w-400 mr-120">
    <a href="#">
      <h1 class="text-6xl text-med mb-4">Med<span class="text-6xl text-swift">Swift</span></h1>
    </a>
    <a href="#">
      <h5 class="text-4xl font-medium tracking-tight mb-4">Website for </h5>
    </a>
    <a href="#">
      <h5 class="mb-4 text-4xl font-medium tracking-tight">Hospital Online Pharmacy</h5>
    </a>
    <a href="#">
      <h1 class="mb-4 text-xl tracking-tight">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut  </h1>
    </a>
    <div class="flex items-center justify-start space-x-3 rtl:space-x-reverse mr-11">
      <button type="button" class="flex items-center justify-between text-white border border-med bg-med focus:ring-4 focus:outline-none focus:ring-med rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
        <span>Get Started</span>
        <img class="w-5 h-5" src="../img/duble_right.png" alt="Right arrow">
      </button>
      <button type="button" class="text-med hover:text-white border border-med hover:bg-med focus:ring-4 focus:outline-none focus:ring-med rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Learn More</button>
    </div>
  </div>
</div>




</body>
</html>
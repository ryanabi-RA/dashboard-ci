<section class=" w-full max-h-screen flex flex-col" id="dashboard">
  <!-- Nav -->
  <nav class="p-4 w-full h-16 bg-white dark:bg-gray-800 rounded-xl shadow-md flex items-center flex-between" id="nav">
    <div class="w-6 h-3 mx-3 rounded-full bg-blue-500 "></div>
    <h1 class="hidden md:grid text-xl font-bold text-gray-600 dark:text-slate-400"><?= $titleNav; ?></h1>

    <div class="grow grid justify-items-end" id="search">
      <input type="text" name="nama" id="nama" placeholder="cari..." class="mx-4 bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">

      <!-- <input type="text" class="m-auto p-3 w-64 h-8 bg-gray-200 rounded-xl flex items-center rounded-2xl overflow-hidden" placeholder="cari..."> -->
      <!-- <i class="fa-solid fa-search"></i> -->
      </input>
    </div>

    <div class="w-10 h-10 border border-gray-700 dark:border-gray-400 rounded-full flex justify-center items-center">
      <i class="dark:text-slate-200 fa-solid fa-user fa-xl"></i>
    </div>
  </nav>
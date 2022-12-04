<section class=" w-full max-h-screen flex flex-col" id="Navbar">
        <!-- Nav -->
        <nav class="p-4 w-full h-16 bg-white dark:bg-gray-800 rounded-xl shadow-md flex items-center justify-between md:flex-between " id="nav">
            <div class="w-6 h-3 mx-3 rounded-full bg-blue-500 "></div>
            <h1 class="hidden md:grid text-xl font-bold text-gray-600 dark:text-slate-400"><?= $titleNav; ?></h1>

            <div class="grow hidden md:flex justify-end">
                <?= form_open('pegawai/search'); ?>
                <div class="flex" id="search">
                    <input type="text" name="keyword" id="keyword" placeholder="cari..." class="mx-4 bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    <button type="submit" class="">
                        <i class="-ml-20 text-[20px] text-gray-300 fa-solid fa-search"></i>
                    </button>
                </div>
                <?= form_close(); ?>
            </div>

            <div class="w-10 h-10 border border-gray-700 dark:border-gray-400 rounded-full flex justify-center items-center">
                <i class="dark:text-slate-200 fa-solid fa-user fa-xl"></i>
            </div>
        </nav>
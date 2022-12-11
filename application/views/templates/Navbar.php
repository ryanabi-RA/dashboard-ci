<section class=" w-full max-h-screen flex flex-col" id="Navbar">
    <!-- Nav -->
    <nav class="p-4 w-full h-16 bg-white dark:bg-gray-800 rounded-xl shadow-md flex items-center justify-between md:flex-between " id="nav">
        <div class="w-6 h-3 mx-3 rounded-full bg-blue-500 "></div>
        <h1 class=" text-xl font-bold text-gray-600 dark:text-slate-400"><?= $titleNav; ?></h1>

        <div class="grow hidden lg:flex justify-end">
            <?= form_open('pegawai/search'); ?>
            <div class="flex" id="search">
                <input type="text" name="keyword" id="keyword" placeholder="cari..." class="mx-4 bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                <button type="submit" id="toggleSearch" name="toggleSearch" aria-label="toggleSearch">
                    <i class="-ml-20 text-[20px] text-gray-300 fa-solid fa-search"></i>
                </button>
            </div>
            <?= form_close(); ?>
        </div>

        <!-- <div class="w-10 h-10 border border-gray-700 dark:border-gray-400 rounded-full flex justify-center items-center">
            <i class="dark:text-slate-200 fa-solid fa-user fa-xl"></i>
        </div> -->


        <!-- <a href="<?= base_url('profile') ?>">
            <div class="flex items-center" id="user-panel">
                <img src="<?php echo base_url('assets/foto/default.png') ?>" class="w-[48px] h-[48px] rounded-[24px]" alt="User Image">
            </div>
        </a> -->


        <button id="dropdownUser" data-dropdown-toggle="dropdownMenuUser" class="mr-0 md:mr-2 w-[48px] h-[48px] rounded-[24px] overflow-hidden focus:outline-none" type="button">
                <img src="<?php echo base_url('assets/foto/default.png') ?>" class="" alt="User Image">
        </button>
        <!-- Dropdown menu -->
        <div id="dropdownMenuUser" class="hidden z-10 p-2 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUser">
                <li>
                    <a href="<?= base_url('profile') ?>" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white rounded">Profile</a>
                </li>
                <li>
                    <a href="<?= base_url('logout') ?>" class="block py-2 text-red-400 hover:text-white px-4 hover:bg-red-100 dark:hover:bg-red-600 dark:hover:text-white rounded">Log Out</a>
                </li>
            </ul>
        </div>

    </nav>
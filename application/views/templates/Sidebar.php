<!-- Sidebar  -->
<section class="-ml-4 md:ml-0 mr-4 md:p-4 w-fit md:w-64 max-h-screen rounded-tr-xl rounded-br-lg md:rounded-xl bg-white dark:bg-slate-800 shadow-md  flex-col lg:w-[15%]" id="sidebar">
    <!-- header  -->
    <a href="<?= base_url('') ?>" class="">
        <section class="w-full h-16 flex items-center justify-center dark:text-white" id="sidebar-header">

            <div class="icon" id="icon">
                <i class="text-gray-500 fa-solid fa-grip-vertical fa-2xl"></i>
            </div>
            <div class="logo" id="logo">

            </div>
            <div class="title hidden md:grid mx-4" id="title">
                <h1 class="text-2xl hidden md:grid font-bold">Jaguar</h1>
            </div>
        </section>
    </a>

    <a href="<?= base_url('profile') ?>" class="">
        <div class="py-3 mt-4 mb-2 flex items-center justify-center md:justify-start border-b-2 border-gray-500 opacity-90 flex-wrap" id="user-panel">
            <img src="<?php echo base_url('assets/foto/default.png') ?>" class="mr-0 md:mr-2 w-[36px] h-[36px] rounded-[18px]" alt="User Image">
            <p class="text-gray-300 text-[16px] font-bold">Ryan Abi</p>
        </div>
    </a>

    <!-- dashboard menu -->
    <ul class="m-2 flex justify-center md:justify-start flex-col">
        <a href="<?= base_url(''); ?>" class="rounded-lg hover:rounded-lg hover:bg-gray-200 dark:hover:bg-gray-900">
            <li class="my-4 md:my-1 p-4 md:p-2 px-5 flex items-center ">
                <i class="text-gray-500 fa-solid fa-home fa-lg w-5 "></i>
                <p class="mx-2 hidden md:grid text-gray-500 font-medium">Dashboard</p>
            </li>
        </a>
        <a href="<?= base_url('pegawai'); ?>" class="rounded-lg hover:rounded-lg hover:bg-gray-200 dark:hover:bg-gray-900">
            <li class="my-4 md:my-1 p-4 md:p-2 px-5 flex items-center ">
                <i class="text-gray-500 fa-solid fa-user fa-lg w-5 "></i>
                <p class="mx-2 hidden md:grid text-gray-500 font-medium">Pegawai</p>
            </li>
        </a>
        <a href="<?= base_url('error'); ?>" class="rounded-lg hover:rounded-lg hover:bg-gray-200 dark:hover:bg-gray-900">
            <li class="my-4 md:my-1 p-4 md:p-2 px-5 flex items-center ">
                <i class="text-gray-500 fa-solid fa-gear fa-lg w-5 "></i>
                <p class="mx-2 hidden md:grid text-gray-500 font-medium">Lorem</p>
            </li>
        </a>
        <a href="<?= base_url('error'); ?>" class="rounded-lg hover:rounded-lg hover:bg-gray-200 dark:hover:bg-gray-900">
            <li class="my-4 md:my-1 p-4 md:p-2 px-5 flex items-center ">
                <i class="text-gray-500 fa-solid fa-gear fa-lg w-5 "></i>
                <p class="mx-2 hidden md:grid text-gray-500 font-medium">Lorem</p>
            </li>
        </a>
    </ul>
</section>
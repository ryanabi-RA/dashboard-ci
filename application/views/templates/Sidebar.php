<section class="mr-4 p-4 w-64 max-h-screen rounded-2xl bg-white shadow-md flex flex-col lg:w-[15%]" id="sidebar">
    <!-- header  -->
    <section class="w-full h-16 flex items-center justify-center" id="sidebar-header">
        <div class="icon" id="icon">
            <i class="text-gray-500 fa-solid fa-grip-vertical fa-2xl"></i>
        </div>
        <div class="logo" id="logo">

        </div>
        <div class="title m-4" id="title">
            <h1 class="text-2xl font-bold">Jaguar</h1>
        </div>
    </section>

    <!-- dashboard menu -->
    <ul class="m-auto mt-6 flex-grow flex-col">
        <li class="my-4">
            <a href="<?= base_url(''); ?>" class="flex items-center ">
                <i class="text-gray-500 fa-solid fa-home fa-lg w-5"></i>
                <p class="mx-2 text text-gray-500 font-medium">Dashboard</p>
            </a>
        </li>
        <li class="my-4">
            <a href="<?= base_url('pegawai'); ?>" class="flex items-center">
                <i class="text-gray-500 fa-solid fa-user fa-lg w-5"></i>
                <p class="mx-2 text text-gray-500 font-medium">Pegawai</p>
            </a>
        </li>
        <li class="my-4">
            <a href="<?= base_url('#'); ?>" class="flex items-center">
                <i class="text-gray-500 fa-solid fa-gear fa-lg w-5"></i>
                <p class="mx-2 text text-gray-500 font-medium">Lorem</p>
            </a>
        </li>
        <li class="my-4">
            <a href="<?= base_url('#'); ?>" class="flex items-center">
                <i class="text-gray-500 fa-solid fa-gear fa-lg w-5"></i>
                <p class="mx-2 text text-gray-500 font-medium">Lorem</p>
            </a>
        </li>
    </ul>
    <!-- <p class="mt-6 mb-2">Menu</p>
    <section class="w-full p-4 h-auto bg-blue-600 rounded-[16px] " id="sidebar-content">
    <a href="<?php echo base_url(''); ?>"><div class="m-2 h-8 duration-500 rounded-[8px] text-[16px] text-center font-medium hover:bg-blue-400 hover:w-full hover:text-center">Dashboard</div></a>
    <a href="<?php echo base_url('pegawai'); ?>"><div class="m-2 h-8 duration-500 rounded-[8px] text-[16px] text-center font-medium hover:bg-blue-400 hover:w-full hover:text-center">Pegawai</div></a>
        <div class="m-2 h-8 duration-500 rounded-[8px] text-[16px] text-center text-gray-200 font-medium hover:bg-blue-400 hover:w-full hover:text-center">menu 1</div>
        <div class="m-2 h-8 duration-500 rounded-[8px] text-[16px] text-center text-gray-200 font-medium hover:bg-blue-400 hover:w-full hover:text-center">menu 1</div>
        <div class="m-2 h-8 duration-500 rounded-[8px] text-[16px] text-center text-gray-200 font-medium hover:bg-blue-400 hover:w-full hover:text-center">menu 1</div>
    </section> -->
</section>
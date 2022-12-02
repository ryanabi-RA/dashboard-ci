<section class="mr-4 md:p-4 w-fit md:w-64 max-h-screen rounded-xl bg-white dark:bg-slate-800 shadow-md flex flex-col lg:w-[15%]" id="sidebar">
    <!-- header  -->
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

    <!-- dashboard menu -->
    <ul class="m-auto mt-6 flex-grow flex-col">
        <a href="<?= base_url(''); ?>" class=" ">
            <li class="my-4 md:my-1 p-2 px-5 rounded-lg hover:rounded-lg hover:bg-gray-200 dark:hover:bg-gray-900 flex items-center">
                <i class="text-gray-500 fa-solid fa-home fa-lg w-5"></i>
                <p class="mx-2 hidden md:grid text text-gray-500 font-medium">Dashboard</p>
            </li>
        </a>
        <a href="<?= base_url('pegawai'); ?>" class=" ">
            <li class="my-4 md:my-1 p-2 px-5 rounded-lg hover:rounded-lg hover:bg-gray-200 dark:hover:bg-gray-900 flex items-center">
                <i class="text-gray-500 fa-solid fa-user fa-lg w-5"></i>
                <p class="mx-2 hidden md:grid text text-gray-500 font-medium">Pegawai</p>
            </li>
        </a>
        <a href="<?= base_url(''); ?>" class=" ">
            <li class="my-4 md:my-1 p-2 px-5 rounded-lg hover:rounded-lg hover:bg-gray-200 dark:hover:bg-gray-900 flex items-center">
                <i class="text-gray-500 fa-solid fa-gear fa-lg w-5"></i>
                <p class="mx-2 hidden md:grid text text-gray-500 font-medium">Lorem</p>
            </li>
        </a>
        <a href="<?= base_url(''); ?>" class=" ">
            <li class="my-4 md:my-1 p-2 px-5 rounded-lg hover:rounded-lg hover:bg-gray-200 dark:hover:bg-gray-900 flex items-center">
                <i class="text-gray-500 fa-solid fa-gear fa-lg w-5"></i>
                <p class="mx-2 hidden md:grid text text-gray-500 font-medium">Lorem</p>
            </li>
        </a>
    </ul>
</section>
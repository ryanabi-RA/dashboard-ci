<section class="mr-4 p-4 w-64 max-h-screen rounded-xl bg-white shadow-md flex flex-col lg:w-[15%]" id="sidebar">
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
        <li class="my-1 p-2 px-5 rounded-lg hover:rounded-lg hover:bg-gray-200">
            <a href="<?= base_url(''); ?>" class="flex items-center ">
                <i class="text-gray-500 fa-solid fa-home fa-lg w-5"></i>
                <p class="mx-2 text text-gray-500 font-medium">Dashboard</p>
            </a>
        </li>
        <li class="my-1 p-2 px-5 rounded-lg hover:rounded-lg hover:bg-gray-200">
            <a href="<?= base_url('pegawai'); ?>" class="flex items-center">
                <i class="text-gray-500 fa-solid fa-user fa-lg w-5"></i>
                <p class="mx-2 text text-gray-500 font-medium">Pegawai</p>
            </a>
        </li>
        <li class="my-1 p-2 px-5 rounded-lg hover:rounded-lg hover:bg-gray-200">
            <a href="<?= base_url('#'); ?>" class="flex items-center">
                <i class="text-gray-500 fa-solid fa-gear fa-lg w-5"></i>
                <p class="mx-2 text text-gray-500 font-medium">Lorem</p>
            </a>
        </li>
        <li class="my-1 p-2 px-5 rounded-lg hover:rounded-lg hover:bg-gray-200">
            <a href="<?= base_url('#'); ?>" class="flex items-center">
                <i class="text-gray-500 fa-solid fa-gear fa-lg w-5"></i>
                <p class="mx-2 text text-gray-500 font-medium">Lorem</p>
            </a>
        </li>
    </ul>
</section>
<!-- Sidebar  -->
<section class="-ml-4 md:ml-0 mr-4 md:p-4 w-fit md:w-64 max-h-screen rounded-tr-xl rounded-br-lg md:rounded-xl bg-white dark:bg-slate-800 shadow-md  flex-col lg:w-[15%]" id="sidebar">
    <!-- header  -->
    <a href="<?= base_url('') ?>" aria-label="Icon header sidebar">
        <section class="w-full h-16 flex items-center justify-center dark:text-white" id="sidebar-header">

            <div class="icon" id="icon">
                <i class="text-gray-500 fa-solid fa-grip-vertical fa-2xl"></i>
            </div>
            <div class="logo" id="logo">

            </div>
            <div class="title hidden md:grid mx-4" id="title">
                <h1 class="text-2xl hidden md:grid font-bold">Avallion</h1>
            </div>
        </section>
    </a>

    <a href="<?= base_url('profile') ?>" class="hidden md:grid">
        <div class="py-3 mt-4 mb-2 flex items-center justify-center md:justify-start border-b-2 border-gray-500 flex-wrap" id="user-panel">
            <div class="mr-0 md:mr-2 w-[48px] h-[48px] rounded-[24px] overflow-hidden opacity-70">
                <img src="<?php echo base_url('assets/foto/default.png') ?>" class="" alt="User Image">
            </div>
            <p class="text-gray-500 dark:text-gray-300 text-[16px] font-bold">Ryan Abi</p>
        </div>
    </a>
    <?php $x = $this->uri->segment(1); ?>
    <!-- dashboard menu -->
    <ul class="m-2 flex justify-center md:justify-start flex-col text-gray-500 dark:text-gray-400 font-[24px]">
        <li class="my-1 rounded-lg hover:rounded-lg hover:bg-gray-200 dark:hover:bg-gray-900 <?php if($x == "") { echo $bg = "bg-gray-900"; }?>">
            <a href="<?= base_url(''); ?>" class="my-6 md:my-1 p-0 md:p-2 px-2 md:px-5 flex items-center" aria-label="Anchor to Dashboard">
                <i class="fa-solid fa-home fa-lg w-5 <?php if($x == "") { echo $icon = "text-white font-bold"; }?>"></i>
                <p class="mx-2 hidden md:grid font-medium <?php if($x == "") { echo $text = "text-white font-bold"; }?>">Dashboard</p>
            </a>
        </li>
        <li class="my-1 rounded-lg hover:rounded-lg hover:bg-gray-200 dark:hover:bg-gray-900 <?php if($x == "pegawai") { echo $bg = "bg-gray-900"; }?>">
            <a href="<?= base_url('pegawai'); ?>" class="my-6 md:my-1 p-0 md:p-2 px-2 md:px-5 flex items-center" aria-label="Anchor to Pegawai">
                <i class="fa-solid fa-user fa-lg w-5 <?php if($x == "pegawai") { echo $icon = "text-white font-bold"; }?>"></i>
                <p class="mx-2 hidden md:grid font-medium <?php if($x == "pegawai") { echo $text = "text-white font-bold"; }?>">Pegawai</p>
            </a>
        </li>
        <li class="my-1 rounded-lg hover:rounded-lg hover:bg-gray-200 dark:hover:bg-gray-900">
            <a href="<?= base_url('lorem'); ?>" class="my-6 md:my-1 p-0 md:p-2 px-2 md:px-5 flex items-center" aria-label="Anchor to lorem">
                <i class="fa-solid fa-gear fa-lg w-5 "></i>
                <p class="mx-2 hidden md:grid font-medium">Lorem</p>
            </a>
        </li>
        <li class="my-1 rounded-lg hover:rounded-lg hover:bg-gray-200 dark:hover:bg-gray-900">
            <a href="<?= base_url('lorem'); ?>" class="my-6 md:my-1 p-0 md:p-2 px-2 md:px-5 flex items-center" aria-label="Anchor to lorem">
                <i class="fa-solid fa-gear fa-lg w-5 "></i>
                <p class="mx-2 hidden md:grid font-medium">Lorem</p>
            </a>
        </li>
    </ul>
</section>
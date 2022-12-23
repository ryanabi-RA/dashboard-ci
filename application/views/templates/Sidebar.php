<!-- Sidebar  -->
<section class="-ml-4 md:ml-0 mr-4 md:p-4 w-fit md:w-64 max-h-screen rounded-tr-xl rounded-br-lg md:rounded-xl bg-white dark:bg-slate-800 shadow-md  flex-col justify-center lg:w-[15%] border-2 border-gray-900 hover:border-blue-600 relative duration-500" id="sidebar">
    <!-- header  -->
    <a href="<?= base_url('') ?>" aria-label="Icon header sidebar">
        <section class="w-full h-16 flex items-center justify-center dark:text-white" id="sidebar-header">
            <div class="icon" id="icon">
                <i class="text-gray-500 fa-solid fa-grip-vertical fa-2xl"></i>
            </div>
            <div class="logo" id="logo"></div>
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
    <ul class="flex justify-center md:justify-start flex-col text-gray-500 dark:text-gray-400 text-md space-y-2">
        <li class=" p-2 rounded-md hover:rounded-md hover:bg-gray-200 dark:hover:bg-gray-900 <?php if ($x == "") {echo $bg = "bg-gray-900";} ?>">
            <a href="<?= base_url(''); ?>" class="flex items-center" aria-label="Anchor to Dashboard">
                <i class="fa-solid fa-home fa-lg w-5 <?php if ($x == "") {echo $icon = "text-white font-bold";} ?>"></i>
                <p class="mx-2 hidden md:grid font-medium <?php if ($x == "") {echo $text = "text-white font-bold";} ?>">Dashboard</p>
            </a>
        </li>
        <li class=" p-2 rounded-md hover:rounded-md hover:bg-gray-200 dark:hover:bg-gray-900 <?php if ($x == "pegawai") {echo $bg = "bg-gray-900";} ?>">
            <a href="<?= base_url('pegawai'); ?>" class="flex items-center" aria-label="Anchor to Pegawai">
                <i class="fa-solid fa-user fa-lg w-5 <?php if ($x == "pegawai") {echo $icon = "text-white font-bold";} ?>"></i>
                <p class="mx-2 hidden md:grid font-medium <?php if ($x == "pegawai") {echo $text = "text-white font-bold";} ?>">Pegawai</p>
            </a>
        </li>
        <li class=" p-2 rounded-md hover:rounded-md hover:bg-gray-200 dark:hover:bg-gray-900 <?php if ($x == "about") {echo $bg = "bg-gray-900";} ?>">
            <a href="<?= base_url('about'); ?>" class="flex items-center" aria-label="Anchor to Pegawai">
                <i class="fa-sharp fa-solid fa-address-card fa-lg w-5 <?php if ($x == "about") {echo $icon = "text-white font-bold";} ?>"></i>
                <p class="mx-2 hidden md:grid font-medium <?php if ($x == "about") {echo $text = "text-white font-bold";} ?>">About</p>
            </a>
        </li>
    </ul>
<!-- 
    <div class="p-2 bottom-0 absolute rounded-md hover:rounded-md hover:bg-gray-200 dark:hover:bg-gray-900 text-gray-500 dark:text-gray-400 text-md  <?php if ($x == "about") {echo $bg = "bg-gray-900";} ?>">
        <a href="<?= base_url('about'); ?>" class="flex items-center" aria-label="Anchor to Pegawai">
            <i class="fa-solid fa-user fa-lg w-5 <?php if ($x == "about") {echo $icon = "text-white font-bold";} ?>"></i>
            <p class="mx-2 hidden md:grid font-medium <?php if ($x == "about") {echo $text = "text-white font-bold";} ?>">about</p>
        </a>
    </div> -->
</section>
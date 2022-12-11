<!-- Dashboard -->
<div class="grow m-0 py-2 md:py-4 w-full" id="content">
  <div class="w-full flex flex-col md:flex-wrap md:flex-row">
    <a href="<?php echo base_url('pegawai'); ?>">
      <div class="m-2 md:w-[250px] md:w-[250px] h-auto md:h-[150px] duration-500 drop-shadow-lg rounded-[16px] shadow-md overflow-hidden bg-gradient-to-b from-indigo-800 via-purple-700 to-pink-600">
        <div class="cover py-4 md:py-0 w-full h-full bg-black bg-opacity-20 hover:bg-opacity-50 transition-all duration-1000">
          <p class="font-bold text-white text-[48px] md:text-[64px] text-center"><?= $jumlahPegawai; ?></p>
          <p class="font-bold text-gray-300 text-[24px] text-center">Data Pegawai</p>
        </div>
      </div>
    </a>
    <a href="<?php echo base_url('error'); ?>">
      <div class="m-2 md:w-[250px] md:w-[250px] h-auto md:h-[150px] duration-500 drop-shadow-lg rounded-[16px] shadow-md overflow-hidden bg-gradient-to-b from-indigo-800 via-purple-700 to-pink-600">
        <div class="cover py-4 md:py-0 w-full h-full bg-black bg-opacity-20 hover:bg-opacity-50 transition-all duration-1000">
          <p class="font-bold text-white text-[48px] md:text-[64px] text-center">?</p>
          <p class="font-bold text-gray-300 text-[24px] text-center">Data ?</p>
        </div>
      </div>
    </a>
    <a href="<?php echo base_url('error'); ?>">
      <div class="m-2 md:w-[250px] md:w-[250px] h-auto md:h-[150px] duration-500 drop-shadow-lg rounded-[16px] shadow-md overflow-hidden bg-gradient-to-b from-indigo-800 via-purple-700 to-pink-600">
        <div class="cover py-4 md:py-0 w-full h-full bg-black bg-opacity-20 hover:bg-opacity-50 transition-all duration-1000">
          <p class="font-bold text-white text-[48px] md:text-[64px] text-center">?</p>
          <p class="font-bold text-gray-300 text-[24px] text-center">Data ?</p>
        </div>
      </div>
    </a>
  </div>
</div>
<!-- Content -->
<div class="grow my-4 w-full" id="content">
  <div class="container">
    <div class="container-button h-auto">

      <!-- Modal toggle -->
      <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="authentication-modal">
        Tambah
      </button>

      <!-- Main modal -->
      <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
              <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Masukkan data pegawai baru</h3>

              <!-- <form class="space-y-2" > -->
                <?php echo form_open_multipart('pegawai/tambah_pegawai') ?>
                <div>
                  <label for="nip" class="block mt-3 mb-1 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                  <input type="text" name="nip" id="nip" placeholder="nip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                </div>
                <div>
                  <label for="nama" class="block mt-3 mb-1 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                  <input type="text" name="nama" id="nama" placeholder="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                </div>
                <div>
                  <label for="Alamat" class="block mt-3 mb-1 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                  <input type="text" name="alamat" id="Alamat" placeholder="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                </div>
                <div>
                  <label for="tgl_lahir" class="block mt-3 mb-1 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" id="tgl_lahir" placeholder="tgl_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                </div>
                <div>
                  <label for="no_telp" class="block mt-3 mb-1 text-sm font-medium text-gray-900 dark:text-white">No Telp</label>
                  <input type="text" name="no_telp" id="no_telp" placeholder="no_telp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                </div>
                <div>
                  <label for="foto" class="block mt-3 mb-1 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                  <input type="file" name="foto" id="foto" placeholder="no_telp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                </div>
                .
                <!-- <button type="reset" class="mt-5 w-[25%] text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Reset</button> -->

                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                <?php echo form_close(); ?>
              <!-- </form> -->
            </div>
          </div>
        </div>
      </div>

    </div>
    <table class="my-4 w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="py-3 px-6">
            No.
          </th>
          <th scope="col" class="py-3 px-6">
            NIP
          </th>
          <th scope="col" class="py-3 px-6">
            Nama
          </th>
          <th scope="col" class="py-3 px-6">
            ALamat
          </th>
          <th scope="col" class=" py-3 px-6 flex items-center justify-center">
            Aksi
          </th>
          <th></th>
        </tr>
      </thead>
      <?php $no = 1;
      foreach ($pegawai as $pegawai) : ?>
        <tbody>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              <?= $no++; ?>
            </th>
            <td class="py-4 px-6">
              <?= $pegawai['nip']; ?>
            </td>
            <td class="py-4 px-6">
              <?= $pegawai['nama']; ?>
            </td>
            <td class="py-4 px-6">
              <?= $pegawai['alamat']; ?>
            </td>
            <td class="w-4 px-6">
              <?= anchor('pegawai/detail/' . $pegawai['id_pegawai'], '<i class="text-yellow-500 text-[24px] fa-solid fa-pencil"></i>'); ?>
            </td>
            <td class="w-4 px-6">
              <a href="#">
                <i class="text-red-500 text-[24px] fa-solid fa-trash"></i>
              </a>
            </td>
          </tr>
        </tbody>
      <?php endforeach; ?>
    </table>
  </div>
</div>
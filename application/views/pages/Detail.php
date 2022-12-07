<!-- Content -->
<!-- <div class="grow m-0 py-4 flex" id="content">
  <div class="p-4 w-full bg-white dark:bg-gray-800 rounded-xl shadow-md flex" id="container-content">
    <div class="">
      <div class="">
        <div class="flex flex-col lg:flex-row max-w-3xl">
          <img src="<?= base_url('assets/foto/') . $pegawai->foto; ?>" alt="" class="mb-6 lg:mb-0 w-fit sm:max-w-sm border-2 border-gray-600 rounded-xl bg-cover ">

          <table class="ml-0 lg:ml-6">
            <tr>
              <td class="text-md font-medium text-black dark:text-gray-500">Nama</td>
              <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
              <td class="text-md font-medium text-black dark:text-gray-400"><?= $pegawai->nama; ?></td>
              </td>
            </tr>
            <tr>
              <td class="text-md font-medium text-black dark:text-gray-500">NIP</td>
              <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
              <td class="text-md font-medium text-black dark:text-gray-400"><?= $pegawai->nip; ?></td>
              </td>
            </tr>
            <tr>
              <td class="text-md font-medium text-black dark:text-gray-500">Tanggal Lahir</td>
              <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
              <td class="text-md font-medium text-black dark:text-gray-400"><?= $pegawai->tgl_lahir; ?></td>
              </td>
            </tr>
            <tr>
              <td class="text-md font-medium text-black dark:text-gray-500">Alamat</td>
              <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
              <td class="text-md font-medium text-black dark:text-gray-400"><?= $pegawai->alamat; ?></td>
              </td>
            </tr>
            <tr>
              <td class="text-md font-medium text-black dark:text-gray-500">No Telepon</td>
              <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
              <td class="text-md font-medium text-black dark:text-gray-400"><?= $pegawai->no_telp; ?></td>
              </td>
            </tr>
          </table>
        </div>

        <div class="py-4 max-w-3xl flex justify-end">
          <a href="<?= base_url('pegawai/edit/');
                    echo $pegawai->id_pegawai; ?>">
            <button class="w-32 h-10 rounded-lg border-2 border-blue-300 text-blue-300 text-md font-medium hover:bg-blue-400 hover:text-white hover:font-bold focus:ring-4 focus:outline-none focus:ring-blue-300">Edit Profile</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- Content -->
<div class="grow m-0 py-4 flex" id="content">
  <div class="p-4 w-full bg-white dark:bg-gray-800 rounded-xl shadow-md flex">
    <div class="m-auto">
      <div class="mt-4 flex flex-col lg:flex-row">
        <img src="<?= base_url('assets/foto/') . $pegawai->foto; ?>" alt="" class="mb-6 lg:mb-0 border-2 border-gray-600 rounded-xl bg-cover">
        <!-- </div> -->
        <table class="items-center ml-0 lg:ml-6 w-full">
          <tr>
            <td class="text-md font-medium text-black dark:text-gray-500">Nama</td>
            <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
            <td class="text-md font-medium text-black dark:text-gray-400"><?= $pegawai->nama; ?></td>
            </td>
          </tr>
          <tr>
            <td class="text-md font-medium text-black dark:text-gray-500">NIP</td>
            <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
            <td class="text-md font-medium text-black dark:text-gray-400"><?= $pegawai->nip; ?></td>
            </td>
          </tr>
          <tr>
            <td class="text-md font-medium text-black dark:text-gray-500">Tanggal Lahir</td>
            <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
            <td class="text-md font-medium text-black dark:text-gray-400"><?= $pegawai->tgl_lahir; ?></td>
            </td>
          </tr>
          <tr>
            <td class="text-md font-medium text-black dark:text-gray-500">Alamat</td>
            <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
            <td class="text-md font-medium text-black dark:text-gray-400"><?= $pegawai->alamat; ?></td>
            </td>
          </tr>
          <tr>
            <td class="text-md font-medium text-black dark:text-gray-500">No Telepon</td>
            <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
            <td class="text-md font-medium text-black dark:text-gray-400"><?= $pegawai->no_telp; ?></td>
            </td>
          </tr>
        </table>
      </div>
      <div class="py-6 flex justify-end">
        <a href="<?= base_url('pegawai/edit/');
                  echo $pegawai->id_pegawai; ?>">
          <button class="w-32 h-10 rounded-lg border-2 border-blue-300 text-blue-300 text-md font-medium hover:bg-blue-400 hover:text-white hover:font-bold focus:ring-4 focus:outline-none focus:ring-blue-300">Edit Profile</button>
        </a>
      </div>
    </div>
  </div>
</div>
























<!-- <div class="p-4 w-full bg-white dark:bg-gray-800 rounded-xl shadow-md ">
    <div class="">
      <div class="mt-4 flex flex-col lg:flex-row max-w-3xl ">
        <img src="<?= base_url('assets/foto/') . $pegawai->foto; ?>" alt="" class="mb-6 lg:mb-0 w-fit sm:max-w-sm border-2 border-gray-600 rounded-xl bg-cover">
        <table class="items-center max-w-xl ml-0 lg:ml-6">
          <tr>
            <td class="text-md font-medium text-black dark:text-gray-500">Nama</td>
            <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
            <td class="text-md font-medium text-black dark:text-gray-400"><?= $pegawai->nama; ?></td>
            </td>
          </tr>
          <tr>
            <td class="text-md font-medium text-black dark:text-gray-500">NIP</td>
            <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
            <td class="text-md font-medium text-black dark:text-gray-400"><?= $pegawai->nip; ?></td>
            </td>
          </tr>
          <tr>
            <td class="text-md font-medium text-black dark:text-gray-500">Tanggal Lahir</td>
            <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
            <td class="text-md font-medium text-black dark:text-gray-400"><?= $pegawai->tgl_lahir; ?></td>
            </td>
          </tr>
          <tr>
            <td class="text-md font-medium text-black dark:text-gray-500">Alamat</td>
            <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
            <td class="text-md font-medium text-black dark:text-gray-400"><?= $pegawai->alamat; ?></td>
            </td>
          </tr>
          <tr>
            <td class="text-md font-medium text-black dark:text-gray-500">No Telepon</td>
            <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
            <td class="text-md font-medium text-black dark:text-gray-400"><?= $pegawai->no_telp; ?></td>
            </td>
          </tr>
        </table>
      </div>
      <div class="max-w-3xl py-4 col-span-2 grid justify-items-end">
        <a href="<?= base_url('pegawai/edit/');
                  echo $pegawai->id_pegawai; ?>">
          <button class="w-32 h-10 rounded-lg border-2 border-blue-300 text-blue-300 text-md font-medium hover:bg-blue-400 hover:text-white hover:font-bold focus:ring-4 focus:outline-none focus:ring-blue-300">Edit Profile</button>
        </a>
      </div>
    </div>
  </div> -->
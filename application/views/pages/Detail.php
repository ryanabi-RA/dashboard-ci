<!-- Content -->
<div class="grow m-0 py-4 w-full flex flex-wrap" id="content">
  <div class="p-4 w-full bg-white rounded-xl shadow-md">
    <div class="w-fit max-w-3xl grid ">
      <!-- <div class="h-64 w-30 bg-red-100"> -->
      <img src="<?= base_url('assets/foto/') . $pegawai->foto; ?>" alt="" class="rounded-xl bg-cover">
      <!-- </div> -->
      <table class="mx-6 w-full">
        <tr>
          <td class="text-md font-medium text-black">Nama</td>
          <td class="text-md font-medium text-black px-4">:</td>
          <td class="text-md font-medium text-black">
          <td class="text-md font-medium text-black"><?= $pegawai->nama; ?></td>
          </td>
        </tr>
        <tr>
          <td class="text-md font-medium text-black">NIP</td>
          <td class="text-md font-medium text-black px-4">:</td>
          <td class="text-md font-medium text-black">
          <td class="text-md font-medium text-black"><?= $pegawai->nip; ?></td>
          </td>
        </tr>
        <tr>
          <td class="text-md font-medium text-black">Tanggal Lahir</td>
          <td class="text-md font-medium text-black px-4">:</td>
          <td class="text-md font-medium text-black">
          <td class="text-md font-medium text-black"><?= $pegawai->tgl_lahir; ?></td>
          </td>
        </tr>
        <tr>
          <td class="text-md font-medium text-black">Alamat</td>
          <td class="text-md font-medium text-black px-4">:</td>
          <td class="text-md font-medium text-black">
          <td class="text-md font-medium text-black"><?= $pegawai->alamat; ?></td>
          </td>
        </tr>
        <tr>
          <td class="text-md font-medium text-black">No Telepon</td>
          <td class="text-md font-medium text-black px-4">:</td>
          <td class="text-md font-medium text-black">
          <td class="text-md font-medium text-black"><?= $pegawai->no_telp; ?></td>
          </td>
        </tr>
      </table>
      <div class="h-12 col-span-2 grid justify-items-end -mr-5">
        <a href="<?= base_url('pegawai/edit/');
                  echo $pegawai->id_pegawai; ?>">
          <button class="w-32 h-10 rounded-lg border-2 border-blue-300 text-blue-300 text-md font-medium hover:bg-blue-400 hover:text-white hover:font-bold focus:ring-4 focus:outline-none focus:ring-blue-300">Edit Profile</button>
        </a>
      </div>
    </div>
  </div>
</div>
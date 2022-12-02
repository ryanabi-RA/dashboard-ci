<!-- Content -->
<div class="grow m-0 py-4 w-full flex flex-wrap" id="content">
    <div class="p-4 w-full bg-white dark:bg-gray-800 rounded-xl shadow-md">
        <?php echo form_open_multipart('pegawai/update/'); ?>
        <div class="w-fit h-full max-w-4xl grid ">
            <!-- <div class="h-64 w-30 bg-red-100"> -->
            <img src="<?= base_url('assets/foto/') . $pegawai->foto; ?>" alt="" class="rounded-xl bg-cover">
            <!-- </div> -->
            <table class="m-4 w-full">
                <tr>
                    <td class="text-md font-medium text-black dark:text-gray-500">Nama</td>
                    <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
                    <td class="text-md font-medium text-black">
                        <input type="hidden" name="id_pegawai" id="id_pegawai" value="<?= $pegawai->id_pegawai; ?>" >
                        <input type="text" name="nama" id="nama" value="<?= $pegawai->nama; ?>" class="w-full bg-gray-50 dark:bg-transparent border border-gray-300 text-gray-900 dark:text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </td>
                </tr>
                <tr>
                    <td class="text-md font-medium text-black dark:text-gray-500">NIP</td>
                    <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
                    <td class="text-md font-medium text-black">
                        <input type="text" name="nip" id="nip" value="<?= $pegawai->nip; ?>" class="w-full bg-gray-50 dark:bg-transparent border border-gray-300 text-gray-900 dark:text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </td>
                </tr>
                <tr>
                    <td class="text-md font-medium text-black dark:text-gray-500">Tanggal Lahir</td>
                    <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
                    <td class="text-md font-medium text-black">
                        <input type="text" name="alamat" id="Alamat" value="<?= $pegawai->alamat; ?>" class="w-full bg-gray-50 dark:bg-transparent border border-gray-300 text-gray-900 dark:text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </td>
                </tr>
                <tr>
                    <td class="text-md font-medium text-black dark:text-gray-500">Alamat</td>
                    <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
                    <td class="text-md font-medium text-black">
                        <input type="date" name="tgl_lahir" id="tgl_lahir" value="<?= $pegawai->tgl_lahir; ?>" class="w-full bg-gray-50 dark:bg-transparent border border-gray-300 text-gray-900 dark:text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </td>
                </tr>
                <tr>
                    <td class="text-md font-medium text-black dark:text-gray-500">No Telepon</td>
                    <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
                    <td class="text-md font-medium text-black">
                        <input type="text" name="no_telp" id="no_telp" value="<?= $pegawai->no_telp; ?>" class="w-full bg-gray-50 dark:bg-transparent border border-gray-300 text-gray-900 dark:text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </td>
                </tr>
                <tr>
                    <td class="text-md font-medium text-black dark:text-gray-500">Foto</td>
                    <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
                    <td class="text-md font-medium text-black">
                        <input type="file" name="foto" id="foto" class="w-full bg-gray-50 dark:bg-transparent border border-gray-300 text-gray-900 dark:text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </td>
                </tr>
            </table>
            <div class="h-12 col-span-2 grid justify-items-end -mr-5">
                <div class="flex">
                    <button type="submit" class="mx-4 py-2 px-4 bg-blue-500 rounded-xl text-white font-bold focus:ring-2 focus:outline-none focus:ring-blue-300 border-2 border-blue-300 hover:text-white hover:bg-blue-700">Simpan</button>
                    <button type="reset" class="py-2 px-4 border-2 border-red-300 rounded-xl text-red-500 focus:ring-2 focus:outline-none focus:ring-red-300 hover:text-white hover:bg-red-500">Batal</button>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
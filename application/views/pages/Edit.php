<!-- Content -->
<div class="grow m-0 py-4 w-full flex flex-wrap" id="content">
    <div class="p-4 w-full bg-white dark:bg-gray-800 rounded-xl shadow-md">
        <?php echo form_open_multipart('pegawai/update/'); ?>
        <div class="flex flex-col lg:flex-row max-w-4xl items-center lg:items-start">
            <img src="<?= base_url('assets/foto/') . $pegawai->foto; ?>" alt="" class="mb-6 lg:mb-0 w-fit sm:max-w-sm border-2 border-gray-600 rounded-xl bg-cover">
            <!-- </div> -->
            <table class="items-center ml-0 lg:ml-6 w-full">
                <tr>
                    <td class="text-md font-medium text-black dark:text-gray-300">Nama</td>
                    <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
                    <td class="text-md font-medium text-black">
                        <input type="hidden" name="id_pegawai" id="id_pegawai" value="<?= $pegawai->id_pegawai; ?>">
                        <input type="text" name="nama" id="nama" value="<?= $pegawai->nama; ?>" class="w-full bg-gray-50 dark:bg-transparent border border-gray-300 text-gray-900 dark:text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </td>
                </tr>
                <tr>
                    <td class="text-md font-medium text-black dark:text-gray-300">NIP</td>
                    <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
                    <td class="text-md font-medium text-black">
                        <input type="text" name="nip" id="nip" value="<?= $pegawai->nip; ?>" class="w-full bg-gray-50 dark:bg-transparent border border-gray-300 text-gray-900 dark:text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </td>
                </tr>
                <tr>
                    <td class="text-md font-medium text-black dark:text-gray-300">Tanggal Lahir</td>
                    <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
                    <td class="text-md font-medium text-black">
                        <input type="text" name="alamat" id="Alamat" value="<?= $pegawai->alamat; ?>" class="w-full bg-gray-50 dark:bg-transparent border border-gray-300 text-gray-900 dark:text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </td>
                </tr>
                <tr>
                    <td class="text-md font-medium text-black dark:text-gray-300">Alamat</td>
                    <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
                    <td class="text-md font-medium text-black">
                        <input type="date" name="tgl_lahir" id="tgl_lahir" value="<?= $pegawai->tgl_lahir; ?>" class="w-full bg-gray-50 dark:bg-transparent border border-gray-300 text-gray-900 dark:text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </td>
                </tr>
                <tr>
                    <td class="text-md font-medium text-black dark:text-gray-300">No Telepon</td>
                    <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
                    <td class="text-md font-medium text-black">
                        <input type="text" name="no_telp" id="no_telp" value="<?= $pegawai->no_telp; ?>" class="w-full bg-gray-50 dark:bg-transparent border border-gray-300 text-gray-900 dark:text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </td>
                </tr>
                <tr>
                    <td class="text-md font-medium text-black dark:text-gray-300">Foto</td>
                    <td class="text-md font-medium text-black dark:text-gray-500 px-4">:</td>
                    <td class="text-md font-medium text-black">
                        <input type="file" name="foto" id="foto" class="w-full bg-gray-50 dark:bg-transparent border border-gray-300 text-gray-900 dark:text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </td>
                </tr>
            </table>
        </div>

        <div class="max-w-4xl flex justify-end">
            <div class="py-2 md:py-4 flex">
                <button type="submit" class="mx-4 py-2 px-4 bg-blue-500 rounded-xl text-white font-bold focus:ring-2 focus:outline-none focus:ring-blue-300 border-2 border-blue-500 hover:text-white hover:bg-blue-700">Simpan</button>
                <button type="reset" class="py-2 px-4 border-2 border-red-500 rounded-xl text-red-500 focus:ring-2 focus:outline-none focus:ring-red-300 hover:text-white hover:bg-red-500">Batal</button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
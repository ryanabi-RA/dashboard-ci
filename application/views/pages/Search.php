<!-- Pegawai Page -->
<div class="grow m-0 py-2 md:py-4 w-full" id="content">

    <div class="container-content">
        <!-- Modal toggle -->
        <div class="container-button flex">
            <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="authentication-modal">
                Tambah
            </button>
            <a href="<?= base_url('pegawai/print'); ?>">
                <button class=" mx-2 block text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="authentication-modal">
                    <!-- <i class="fa-solid mx-2 fa-print">Print</i> -->
                    print
                </button>
            </a>
            <button id="dropdownExport" data-dropdown-toggle="dropdownMenuExport" class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button">
                Export
                <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownMenuExport" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownExport">
                    <li>
                        <a href="<?= base_url('pegawai/pdf1') ?>" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">PDF</a>
                    </li>
                    <li>
                        <a href="<?= base_url('pegawai/exportExcel') ?>" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Excrl</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full max-w-md md:h-auto">
                Modal content
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
                            <label for="nama" class="block mt-3 mb-1 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" name="nama" id="nama" placeholder="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        </div>
                        <div>
                            <label for="nip" class="block mt-3 mb-1 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                            <input type="text" name="nip" id="nip" placeholder="nip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
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
                        <!-- <button type="reset" class="mt-5 w-[25%] text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Reset</button> -->

                        <button type="submit" class="w-full my-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                        <?php echo form_close(); ?>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>

        <table class="my-4 w-full text-sm text-left text-gray-500 rounded-xl overflow-hidden">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        No.
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nama
                    </th>
                    <th scope="col" class="py-3 px-6">
                        NIP
                    </th>
                    <th scope="col" class="py-3 px-6 hidden md:table-cell">
                        Tanggal Lahir
                    </th>
                    <th scope="col" class="py-3 px-6 hidden md:table-cell">
                        ALamat
                    </th>
                    <th colspan="2" class="py-3 px-6 text-center">
                        Aksi
                    </th>
                </tr>
            </thead>
            <?php
            $start++;
            // $no = 1;
            foreach ($pegawai as $pegawai) : ?>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 hover:dark:bg-gray-900">
                        <th scope="row" class="py-4 px-6 w-10 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $start++; ?>
                        </th>
                        <td class="py-4 px-6 text-md font-medium">
                            <?= $pegawai->nama; ?>
                        </td>
                        <td class="py-4 px-6 text-md font-medium">
                            <?= $pegawai->nip; ?>
                        </td>
                        <td class="py-4 px-6 text-md font-medium hidden md:table-cell">
                            <?= $pegawai->tgl_lahir; ?>
                        </td>
                        <td class="py-4 px-6 text-md font-medium hidden md:table-cell">
                            <?= $pegawai->alamat; ?>
                        </td>
                        <td class="w-12">
                            <?= anchor('pegawai/detail/' . $pegawai->id_pegawai, '<i class="text-green-500 dark:text-gray-400 hover:dark:text-gray-400 text-[24px] hover:text-green-900 fa-solid fa-arrow-up-right-from-square"></i>'); ?>
                        </td>
                        <td class="w-12" onclick="javascript: return confirm('anda yakin hapus')">
                            <?= anchor('pegawai/hapus/' . $pegawai->id_pegawai, '<i class="text-red-500 dark:text-red-800 hover:dark:text-red-500 text-[24px] hover:text-red-900 fa-solid fa-trash"></i>') ?>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>

        <div class="w-full flex justify-center">
            <?php
            //trigger exception in a "try" block
            try {
                echo $this->pagination->create_links();
            }

            //catch exception
            catch (Exception $e) {
                echo 'Message: ' . $e->getMessage();
            }
            ?>
        </div>
    </div>
</div>
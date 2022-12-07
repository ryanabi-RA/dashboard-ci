<div class="grow m-0 py-2 md:py-4 w-full" id="content">

    <div class="title text-center m-auto">
        <h1>Data Mahasiswa</h1>
    </div>
    <table class="m-auto w-full text-sm text-left text-gray-500 dark:text-white rounded-xl overflow-hidden">
        <tr class="p-5">
            <th class="bg-succes">No</th>
            <th>Nama Mahasiswa</th>
            <th>NIP</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th class="p-5">Foto</th>
        </tr>
        <?php
        $no = 1;
        foreach ($pegawai as $pegawai) : ?>
            <tr class="p-4">
                <td><?= $no++ ?></td>
                <td><?= $pegawai->nama ?></td>
                <td><?= $pegawai->nip ?></td>
                <td><?= $pegawai->tgl_lahir ?></td>
                <td><?= $pegawai->alamat ?></td>
                <td><?= $pegawai->no_telp ?></td>
                <td>
                    <img src="<?php echo base_url('assets/foto/');
                                echo $pegawai->foto; ?>" alt="" width="100" height="110">
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <script>
        window.print();
    </script>
</div>
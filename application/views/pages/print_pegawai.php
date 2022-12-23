<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="jaguar is a worker management website">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <script src="../assets/tailwind.js"></script> -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <style type="text/tailwindcss">
        @layer utilities {
        .content-auto {
            content-visibility: auto;
        }
        }
    </style>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
</head>

<body class="m-0 w-full bg-white">
    <div class="m-0 py-2 md:py-4 w-full h-auto bg-white" id="content">
        <div class="mx-8">
            <div class="title text-center mb-4">
                <h1 class="text-black text-4xl">Data Pegawai</h1>
            </div>
            <table class="m-auto w-full text-sm text-left text-gray-500 text-black">
                <tr class="border border-black">
                    <th class="w-10 py-2 text-center border border-black">No</th>
                    <th class="px-4 py-2 border border-black">Nama Pegawai</th>
                    <th class="px-4 py-2 border border-black">NIP</th>
                    <th class="px-4 py-2 border border-black">Tanggal Lahir</th>
                    <th class="px-4 py-2 border border-black">Alamat</th>
                    <th class="px-4 py-2 border border-black">No Telepon</th>
                    <th class="w-20">Foto</th>
                </tr>
                <?php
                $no = 1;
                foreach ($pegawai as $pegawai) : ?>
                    <tr class="">
                        <td class="text-center border border-black"><?= $no++ ?></td>
                        <td class="px-4 border border-black"><?= $pegawai->nama ?></td>
                        <td class="px-4 border border-black"><?= $pegawai->nip ?></td>
                        <td class="px-4 border border-black"><?= $pegawai->tgl_lahir ?></td>
                        <td class="px-4 border border-black"><?= $pegawai->alamat ?></td>
                        <td class="px-4 border border-black"><?= $pegawai->no_telp ?></td>
                        <td class="p-2 border border-black">
                            <img src="<?php echo base_url('assets/foto/');
                                        echo $pegawai->foto; ?>" alt="" width="100" height="110">
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <script>
            window.print();
        </script>
    </div>
</body>

</html>
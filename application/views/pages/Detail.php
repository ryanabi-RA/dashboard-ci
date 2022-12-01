<!-- Content -->
<div class="grow m-0 py-4 w-full flex flex-wrap" id="content">
    <div class="container w-full h-full bg-white rounded-2xl shadow-md">

    <table class="my-4 w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            NIP
        </tr>
        <tr>
            NAMA
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
              <?= $pegawai->nip; ?>
            </td>
            <td class="py-4 px-6">
              <?= $pegawai->nama; ?>
            </td>
            <td class="py-4 px-6">
              <?= $pegawai->alamat; ?>
            </td>
          </tr>
        </tbody>
      <?php endforeach; ?>
    </table>
    </div>
</div>
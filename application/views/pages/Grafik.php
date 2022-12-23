<div class="grow m-0 py-2 md:py-4 w-full" id="content">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <h1 class="text-4xl text-center text-black dark:text-white">Grafik Alamat Pegawai</h1>
    <a href="<?= base_url("pegawai") ?>" class="px-6 py-2 bg-blue-500 rounded-md text-white">Back</a>
    <canvas id="myChart" class="my-4 Container text-white h-[60vh] w-auto"></canvas>

    <?php
    //Inisialisasi nilai variabel awal
    $nama_alamat = "";
    $jumlah = null;
    foreach ($hasil as $item) {
        $alamat = $item->alamat;
        $nama_alamat .= "'$alamat'" . ",";
        $alamat = $item->total;
        $jumlah .= "'$alamat'" . ",";
    }
    ?>

    <script>

        // function randomHexColor() {
        //     let [r, g, b] = randomRgbColor();
        //     let hr = r.toString(16).padStart(2, '0');
        //     let hg = g.toString(16).padStart(2, '0');
        //     let hb = b.toString(16).padStart(2, '0');
        //     return "#" + hr + hg + hb;
        // }
        // for(i = 0; i < x.length; i++) {
        //     console.log(randomHEXColor());
        // }

        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            //The type of chart we want to create
            type: 'pie',
            // The data for our dataset
            data: {
                labels: [<?php echo $nama_alamat; ?>],
                datasets: [{
                    label: 'Data Jurusan Pegawai',
                    backgroundColor: ['rgb(255,99,132)', 'rgba(56,86,255,.87)', 'rgb(60,179,113)', 'rgb(60,238,239),'],
                    borderColor: ['rgb(255,99,132)'],
                    data: [<?php echo $jumlah ?>]
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        })
    </script>
</div>
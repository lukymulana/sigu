<?php
  $queryjanuari = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 1");
  $arrayjanuari = mysqli_fetch_assoc($queryjanuari);
  $injanuari = $arrayjanuari['jumlah'];

  $queryjanuari1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 1");
  $arrayjanuari1 = mysqli_fetch_assoc($queryjanuari1);
  $outjanuari = $arrayjanuari1['jumlah'];

  $stok_januari = $injanuari - $outjanuari;

  $queryfebruari = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 2");
  $arrayfebruari = mysqli_fetch_assoc($queryfebruari);
  $infebruari = $arrayfebruari['jumlah'];

  $queryfebruari1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 2");
  $arrayfebruari1 = mysqli_fetch_assoc($queryfebruari1);
  $outfebruari = $arrayfebruari1['jumlah'];

  $stok_februari = $infebruari - $outfebruari;

  $querymaret = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 3");
  $arraymaret = mysqli_fetch_assoc($querymaret);
  $inmaret = $arraymaret['jumlah'];

  $querymaret1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 3");
  $arraymaret1 = mysqli_fetch_assoc($querymaret1);
  $outmaret = $arraymaret1['jumlah'];

  $stok_maret = $inmaret - $outmaret;

  $queryapril = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 4");
  $arrayapril = mysqli_fetch_assoc($queryapril);
  $inapril = $arrayapril['jumlah'];

  $queryapril1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 4");
  $arrayapril1 = mysqli_fetch_assoc($queryapril1);
  $outapril = $arrayapril1['jumlah'];

  $stok_april = $inapril - $outapril;

  $querymei = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 5");
  $arraymei = mysqli_fetch_assoc($querymei);
  $inmei = $arraymei['jumlah'];

  $querymei1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 5");
  $arraymei1 = mysqli_fetch_assoc($querymei1);
  $outmei = $arraymei1['jumlah'];

  $stok_mei = $inmei - $outmei;

  $queryjuni = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 6");
  $arrayjuni = mysqli_fetch_assoc($queryjuni);
  $injuni = $arrayjuni['jumlah'];

  $queryjuni1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 6");
  $arrayjuni1 = mysqli_fetch_assoc($queryjuni1);
  $outjuni = $arrayjuni1['jumlah'];

  $stok_juni = $injuni - $outjuni;

  $queryjuli = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 7");
  $arrayjuli = mysqli_fetch_assoc($queryjuli);
  $injuli = $arrayjuli['jumlah'];

  $queryjuli1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 7");
  $arrayjuli1 = mysqli_fetch_assoc($queryjuli1);
  $outjuli = $arrayjuli1['jumlah'];

  $stok_juli = $injuli - $outjuli;

  $queryagustus = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 8");
  $arrayagustus = mysqli_fetch_assoc($queryagustus);
  $inagustus = $arrayagustus['jumlah'];

  $queryagustus1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 8");
  $arrayagustus1 = mysqli_fetch_assoc($queryagustus1);
  $outagustus = $arrayagustus1['jumlah'];

  $stok_agustus = $inagustus - $outagustus;

  $queryseptember = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 9");
  $arrayseptember = mysqli_fetch_assoc($queryseptember);
  $inseptember = $arrayseptember['jumlah'];

  $queryseptember1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 9");
  $arrayseptember1 = mysqli_fetch_assoc($queryseptember1);
  $outseptember = $arrayseptember1['jumlah'];

  $stok_september = $inseptember - $outseptember;

  $queryoktober = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 10");
  $arrayoktober = mysqli_fetch_assoc($queryoktober);
  $inoktober = $arrayoktober['jumlah'];

  $queryoktober1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 10");
  $arrayoktober1 = mysqli_fetch_assoc($queryoktober1);
  $outoktober = $arrayoktober1['jumlah'];

  $stok_oktober = $inoktober - $outoktober;

  $querynovember = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 11");
  $arraynovember = mysqli_fetch_assoc($querynovember);
  $innovember = $arraynovember['jumlah'];

  $querynovember1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 11");
  $arraynovember1 = mysqli_fetch_assoc($querynovember1);
  $outnovember = $arraynovember1['jumlah'];

  $stok_november = $innovember - $outnovember;

  $querydesember = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 12");
  $arraydesember = mysqli_fetch_assoc($querydesember);
  $indesember = $arraydesember['jumlah'];

  $querydesember1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 12");
  $arraydesember1 = mysqli_fetch_assoc($querydesember1);
  $outdesember = $arraydesember1['jumlah'];

  $stok_desember = $indesember - $outdesember;
?>
<script type="text/javascript">
    var ctx = document.getElementById("myAreaChart");
    var myLineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Stok",
          lineTension: 0.3,
          backgroundColor: "rgba(78, 115, 223, 0.05)",
          borderColor: "rgba(78, 115, 223, 1)",
          pointRadius: 3,
          pointBackgroundColor: "rgba(78, 115, 223, 1)",
          pointBorderColor: "rgba(78, 115, 223, 1)",
          pointHoverRadius: 3,
          pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
          pointHoverBorderColor: "rgba(78, 115, 223, 1)",
          pointHitRadius: 10,
          pointBorderWidth: 2,
          data: ["<?= $stok_januari ?>", "<?= $stok_februari ?>", "<?= $stok_maret ?>", "<?= $stok_april ?>", "<?= $stok_mei ?>", "<?= $stok_juni ?>", "<?= $stok_juli ?>", "<?= $stok_agustus ?>", "<?= $stok_september ?>", "<?= $stok_oktober ?>", "<?= $stok_november ?>", "<?= $stok_desember ?>"],
        }],
      },
      options: {
        maintainAspectRatio: false,
        layout: {
          padding: {
            left: 10,
            right: 25,
            top: 25,
            bottom: 0
          }
        },
        scales: {
          xAxes: [{
            time: {
              unit: 'date'
            },
            gridLines: {
              display: false,
              drawBorder: false
            },
            ticks: {
              maxTicksLimit: 7
            }
          }],
          yAxes: [{
            ticks: {
              maxTicksLimit: 5,
              padding: 10,
              // Include a dollar sign in the ticks
              callback: function(value, index, values) {
                return '' + number_format(value);
              }
            },
            gridLines: {
              color: "rgb(234, 236, 244)",
              zeroLineColor: "rgb(234, 236, 244)",
              drawBorder: false,
              borderDash: [2],
              zeroLineBorderDash: [2]
            }
          }],
        },
        legend: {
          display: false
        },
        tooltips: {
          backgroundColor: "rgb(255,255,255)",
          bodyFontColor: "#858796",
          titleMarginBottom: 10,
          titleFontColor: '#6e707e',
          titleFontSize: 14,
          borderColor: '#dddfeb',
          borderWidth: 1,
          xPadding: 15,
          yPadding: 15,
          displayColors: false,
          intersect: false,
          mode: 'index',
          caretPadding: 10,
          callbacks: {
            label: function(tooltipItem, chart) {
              var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
              return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
            }
          }
        }
      }
    });
  </script>
<?php
  include 'koneksi.php';

  
  function januari(){
    include 'koneksi.php';

    $sa_queryjanuari = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) < 1");
    $sa_arrayjanuari = mysqli_fetch_assoc($sa_queryjanuari);
    $sa_injanuari = $sa_arrayjanuari['jumlah'];

    $sa_queryjanuari1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) < 1");
    $sa_arrayjanuari1 = mysqli_fetch_assoc($sa_queryjanuari1);
    $sa_outjanuari = $sa_arrayjanuari1['jumlah'];

    $sa_januari = $sa_injanuari - $sa_outjanuari;

    $queryjanuari = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 1");
    $arrayjanuari = mysqli_fetch_assoc($queryjanuari);
    $injanuari = $arrayjanuari['jumlah'];

    $queryjanuari1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 1");
    $arrayjanuari1 = mysqli_fetch_assoc($queryjanuari1);
    $outjanuari = $arrayjanuari1['jumlah'];

    $stok_januari = ($sa_januari + $injanuari ) - $outjanuari;

    return $stok_januari;
  }

  function februari(){
    include 'koneksi.php';

    $sa_queryfebruari = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) < 2");
    $sa_arrayfebruari = mysqli_fetch_assoc($sa_queryfebruari);
    $sa_infebruari = $sa_arrayfebruari['jumlah'];

    $sa_queryfebruari1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) < 2");
    $sa_arrayfebruari1 = mysqli_fetch_assoc($sa_queryfebruari1);
    $sa_outfebruari = $sa_arrayfebruari1['jumlah'];

    $sa_februari = $sa_infebruari - $sa_outfebruari;

    $queryfebruari = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 2");
    $arrayfebruari = mysqli_fetch_assoc($queryfebruari);
    $infebruari = $arrayfebruari['jumlah'];

    $queryfebruari1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 2");
    $arrayfebruari1 = mysqli_fetch_assoc($queryfebruari1);
    $outfebruari = $arrayfebruari1['jumlah'];

    $stok_februari = ($sa_februari + $infebruari) - $outfebruari;

    return $stok_februari;
  }

  function maret(){
    include 'koneksi.php';

    $sa_querymaret = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) < 3");
    $sa_arraymaret = mysqli_fetch_assoc($sa_querymaret);
    $sa_inmaret = $sa_arraymaret['jumlah'];

    $sa_querymaret1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) < 3");
    $sa_arraymaret1 = mysqli_fetch_assoc($sa_querymaret1);
    $sa_outmaret = $sa_arraymaret1['jumlah'];

    $sa_maret = $sa_inmaret - $sa_outmaret;

    $querymaret = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 3");
    $arraymaret = mysqli_fetch_assoc($querymaret);
    $inmaret = $arraymaret['jumlah'];

    $querymaret1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 3");
    $arraymaret1 = mysqli_fetch_assoc($querymaret1);
    $outmaret = $arraymaret1['jumlah'];

    $stok_maret = ($sa_maret + $inmaret) - $outmaret;

    return $stok_maret;
  }

  function april(){
    include 'koneksi.php';

    $sa_queryapril = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) < 4");
    $sa_arrayapril = mysqli_fetch_assoc($sa_queryapril);
    $sa_inapril = $sa_arrayapril['jumlah'];

    $sa_queryapril1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) < 4");
    $sa_arrayapril1 = mysqli_fetch_assoc($sa_queryapril1);
    $sa_outapril = $sa_arrayapril1['jumlah'];

    $sa_april = $sa_inapril - $sa_outapril;

    $queryapril = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 4");
    $arrayapril = mysqli_fetch_assoc($queryapril);
    $inapril = $arrayapril['jumlah'];

    $queryapril1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 4");
    $arrayapril1 = mysqli_fetch_assoc($queryapril1);
    $outapril = $arrayapril1['jumlah'];

    $stok_april = ($sa_april + $inapril) - $outapril;

    return $stok_april;
  }
  
function mei(){
    include 'koneksi.php';

    $sa_querymei = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) < 5");
    $sa_arraymei = mysqli_fetch_assoc($sa_querymei);
    $sa_inmei = $sa_arraymei['jumlah'];

    $sa_querymei1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) < 5");
    $sa_arraymei1 = mysqli_fetch_assoc($sa_querymei1);
    $sa_outmei = $sa_arraymei1['jumlah'];

    $sa_mei = $sa_inmei - $sa_outmei;

    $querymei = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 5");
    $arraymei = mysqli_fetch_assoc($querymei);
    $inmei = $arraymei['jumlah'];

    $querymei1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 5");
    $arraymei1 = mysqli_fetch_assoc($querymei1);
    $outmei = $arraymei1['jumlah'];

    $stok_mei = ($sa_mei + $inmei) - $outmei;

    return $stok_mei;
  }

  function juni(){
    include 'koneksi.php';

    $sa_queryjuni = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) < 6");
    $sa_arrayjuni = mysqli_fetch_assoc($sa_queryjuni);
    $sa_injuni = $sa_arrayjuni['jumlah'];

    $sa_queryjuni1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) < 6");
    $sa_arrayjuni1 = mysqli_fetch_assoc($sa_queryjuni1);
    $sa_outjuni = $sa_arrayjuni1['jumlah'];

    $sa_juni = $sa_injuni - $sa_outjuni;

    $queryjuni = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 6");
    $arrayjuni = mysqli_fetch_assoc($queryjuni);
    $injuni = $arrayjuni['jumlah'];

    $queryjuni1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 6");
    $arrayjuni1 = mysqli_fetch_assoc($queryjuni1);
    $outjuni = $arrayjuni1['jumlah'];

    $stok_juni = ($sa_juni + $injuni ) - $outjuni;

    return $stok_juni;
  }

  function juli(){
    include 'koneksi.php';

    $sa_queryjuli = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) < 7");
    $sa_arrayjuli = mysqli_fetch_assoc($sa_queryjuli);
    $sa_injuli = $sa_arrayjuli['jumlah'];

    $sa_queryjuli1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) < 7");
    $sa_arrayjuli1 = mysqli_fetch_assoc($sa_queryjuli1);
    $sa_outjuli = $sa_arrayjuli1['jumlah'];

    $sa_juli = $sa_injuli - $sa_outjuli;

    $queryjuli = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 7");
    $arrayjuli = mysqli_fetch_assoc($queryjuli);
    $injuli = $arrayjuli['jumlah'];

    $queryjuli1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 7");
    $arrayjuli1 = mysqli_fetch_assoc($queryjuli1);
    $outjuli = $arrayjuli1['jumlah'];

    $stok_juli = ($sa_juli + $injuli) - $outjuli;

    return $stok_juli;
  }

  function agustus(){
    include 'koneksi.php';

    $sa_queryagustus = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) < 8");
    $sa_arrayagustus = mysqli_fetch_assoc($sa_queryagustus);
    $sa_inagustus = $sa_arrayagustus['jumlah'];

    $sa_queryagustus1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) < 8");
    $sa_arrayagustus1 = mysqli_fetch_assoc($sa_queryagustus1);
    $sa_outagustus = $sa_arrayagustus1['jumlah'];

    $sa_agustus = $sa_inagustus - $sa_outagustus;

    $queryagustus = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 8");
    $arrayagustus = mysqli_fetch_assoc($queryagustus);
    $inagustus = $arrayagustus['jumlah'];

    $queryagustus1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 8");
    $arrayagustus1 = mysqli_fetch_assoc($queryagustus1);
    $outagustus = $arrayagustus1['jumlah'];

    $stok_agustus = ($sa_agustus + $inagustus) - $outagustus;

    return $stok_agustus;
  }
  
  function september(){
    include 'koneksi.php';

    $sa_queryseptember = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) < 9");
    $sa_arrayseptember = mysqli_fetch_assoc($sa_queryseptember);
    $sa_inseptember = $sa_arrayseptember['jumlah'];

    $sa_queryseptember1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) < 9");
    $sa_arrayseptember1 = mysqli_fetch_assoc($sa_queryseptember1);
    $sa_outseptember = $sa_arrayseptember1['jumlah'];

    $sa_september = $sa_inseptember - $sa_outseptember;

    $queryseptember = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 9");
    $arrayseptember = mysqli_fetch_assoc($queryseptember);
    $inseptember = $arrayseptember['jumlah'];

    $queryseptember1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 9");
    $arrayseptember1 = mysqli_fetch_assoc($queryseptember1);
    $outseptember = $arrayseptember1['jumlah'];

    $stok_september = ($sa_september + $inseptember) - $outseptember;

    return $stok_september;
  }

  function oktober(){
    include 'koneksi.php';

    $sa_ueryoktober = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) < 10");
    $sa_arrayoktober = mysqli_fetch_assoc($sa_queryoktober);
    $sa_inoktober = $sa_arrayoktober['jumlah'];

    $sa_queryoktober1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) < 10");
    $sa_arrayoktober1 = mysqli_fetch_assoc($sa_queryoktober1);
    $sa_outoktober = $sa_arrayoktober1['jumlah'];

    $sa_oktober = $sa_inoktober - $sa_outoktober;

    $queryoktober = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 10");
    $arrayoktober = mysqli_fetch_assoc($queryoktober);
    $inoktober = $arrayoktober['jumlah'];

    $queryoktober1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 10");
    $arrayoktober1 = mysqli_fetch_assoc($queryoktober1);
    $outoktober = $arrayoktober1['jumlah'];

    $stok_oktober = ($sa_oktober + $inoktober) - $outoktober;

    return $stok_oktober;
  }

  function november(){
    include 'koneksi.php';

    $sa_querynovember = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) < 11");
    $sa_arraynovember = mysqli_fetch_assoc($sa_querynovember);
    $sa_innovember = $sa_arraynovember['jumlah'];

    $sa_querynovember1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) < 11");
    $sa_arraynovember1 = mysqli_fetch_assoc($sa_querynovember1);
    $sa_outnovember = $sa_arraynovember1['jumlah'];

    $sa_november = $sa_innovember - $sa_outnovember;

    $querynovember = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 11");
    $arraynovember = mysqli_fetch_assoc($querynovember);
    $innovember = $arraynovember['jumlah'];

    $querynovember1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 11");
    $arraynovember1 = mysqli_fetch_assoc($querynovember1);
    $outnovember = $arraynovember1['jumlah'];

    $stok_november = ($sa_november + $innovember) - $outnovember;

    return $stok_november;
  }
  
  function desember(){
    include 'koneksi.php';

    $sa_uerydesember = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) < 12");
    $sa_arraydesember = mysqli_fetch_assoc($sa_querydesember);
    $sa_indesember = $sa_arraydesember['jumlah'];

    $sa_querydesember1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) < 12");
    $sa_arraydesember1 = mysqli_fetch_assoc($sa_querydesember1);
    $sa_outdesember = $sa_arraydesember1['jumlah'];

    $sa_desember = $sa_indesember - $sa_outdesember;

    $querydesember = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_masuk where month(tanggal_masuk) = 12");
    $arraydesember = mysqli_fetch_assoc($querydesember);
    $indesember = $arraydesember['jumlah'];

    $querydesember1 = mysqli_query($koneksi, "SELECT sum(jumlah) as jumlah from barang_keluar where month(tanggal_keluar) = 12");
    $arraydesember1 = mysqli_fetch_assoc($querydesember1);
    $outdesember = $arraydesember1['jumlah'];

    $stok_desember = ($sa_desember + $indesember) - $outdesember;

    return $stok_desember;
  }

  $querymakanan = mysqli_query($koneksi, "SELECT sum(barang.stok) as kategori from barang, kategori where kategori.kode_kategori='KT-1'");
  $arraymakanan = mysqli_fetch_assoc($querymakanan);
  $makanan = $arraymakanan['kategori'];

  $queryalat = mysqli_query($koneksi, "SELECT sum(stok) as kategori from barang where kode_kategori='KT-2'");
  $arrayalat = mysqli_fetch_assoc($queryalat);
  $alat = $arrayalat['kategori'];

  $querylainnya = mysqli_query($koneksi, "SELECT sum(stok) as kategori from barang where kode_kategori='KT-3'");
  $arraylainnya = mysqli_fetch_assoc($querylainnya);
  $lainnya = $arraylainnya['kategori'];

  $bulan = date('m');

  if ($bulan == 01) {
    $januari = januari();
    $februari = 0;
    $maret = 0;
    $april = 0;
    $mei = 0;
    $juni = 0;
    $juli = 0;
    $agustus = 0;
    $september = 0;
    $oktober = 0;
    $november = 0;
    $desember = 0;
  }else if ($bulan == 02){
    $januari = januari();
    $februari = februari();
    $maret = 0;
    $april = 0;
    $mei = 0;
    $juni = 0;
    $juli = 0;
    $agustus = 0;
    $september = 0;
    $oktober = 0;
    $november = 0;
    $desember = 0;
  }else if ($bulan == 03){
    $januari = januari();
    $februari = februari();
    $maret = maret();
    $april = 0;
    $mei = 0;
    $juni = 0;
    $juli = 0;
    $agustus = 0;
    $september = 0;
    $oktober = 0;
    $november = 0;
    $desember = 0;
  }else if ($bulan == 04){
    $januari = januari();
    $februari = februari();
    $maret = maret();
    $april = april();
    $mei = 0;
    $juni = 0;
    $juli = 0;
    $agustus = 0;
    $september = 0;
    $oktober = 0;
    $november = 0;
    $desember = 0;
  }else if ($bulan == 05){
    $januari = januari();
    $februari = februari();
    $maret = maret();
    $april = april();
    $mei = mei();
    $juni = 0;
    $juli = 0;
    $agustus = 0;
    $september = 0;
    $oktober = 0;
    $november = 0;
    $desember = 0;
  }else if ($bulan == 06){
    $januari = januari();
    $februari = februari();
    $maret = maret();
    $april = april();
    $mei = mei();
    $juni = juni();
    $juli = 0;
    $agustus = 0;
    $september = 0;
    $oktober = 0;
    $november = 0;
    $desember = 0;
  }else if ($bulan == 07){
    $januari = januari();
    $februari = februari();
    $maret = maret();
    $april = april();
    $mei = mei();
    $juni = juni();
    $juli = juli();
    $agustus = 0;
    $september = 0;
    $oktober = 0;
    $november = 0;
    $desember = 0;
  }else if ($bulan == "08"){
    $januari = januari();
    $februari = februari();
    $maret = maret();
    $april = april();
    $mei = mei();
    $juni = juni();
    $juli = juli();
    $agustus = agustus();
    $september = 0;
    $oktober = 0;
    $november = 0;
    $desember = 0;
  }else if ($bulan == "09"){
    $januari = januari();
    $februari = februari();
    $maret = maret();
    $april = april();
    $mei = mei();
    $juni = juni();
    $juli = juli();
    $agustus = agustus();
    $september = september();
    $oktober = 0;
    $november = 0;
    $desember = 0;
  }else if ($bulan == "10"){
    $januari = januari();
    $februari = februari();
    $maret = maret();
    $april = april();
    $mei = mei();
    $juni = juni();
    $juli = juli();
    $agustus = agustus();
    $september = september();
    $oktober = oktober();
    $november = 0;
    $desember = 0;
  }else if ($bulan == "11"){
    $januari = januari();
    $februari = februari();
    $maret = maret();
    $april = april();
    $mei = mei();
    $juni = juni();
    $juli = juli();
    $agustus = agustus();
    $september = september();
    $oktober = oktober();
    $november = november();
    $desember = 0;
  }else if ($bulan == "12"){
    $januari = januari();
    $februari = februari();
    $maret = maret();
    $april = april();
    $mei = mei();
    $juni = juni();
    $juli = juli();
    $agustus = agustus();
    $september = september();
    $oktober = oktober();
    $november = november();
    $desember = desember();
  }

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
          data: ["<?= $januari ?>", "<?= $februari ?>", "<?= $maret ?>", "<?= $april ?>", "<?= $mei ?>", "<?= $juni ?>", "<?= $juli ?>", "<?= $agustus ?>", "<?= $september ?>", "<?= $oktober ?>", "<?= $november ?>", "<?= $desember ?>"],
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
  <script>
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ["Makanan", "Alat", "Lainnya"],
        datasets: [{
          data: ["<?= $makanan ?>", "<?= $alat ?>", "<?= $lainnya ?>"],
          backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
          hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
          hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          backgroundColor: "rgb(255,255,255)",
          bodyFontColor: "#858796",
          borderColor: '#dddfeb',
          borderWidth: 1,
          xPadding: 15,
          yPadding: 15,
          displayColors: false,
          caretPadding: 10,
        },
        legend: {
          display: false
        },
        cutoutPercentage: 80,
      },
    });
  </script>
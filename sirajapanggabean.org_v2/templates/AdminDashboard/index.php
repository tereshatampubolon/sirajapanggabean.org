<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('fontawesome-free/css/all.min.css') ?>
   
    <?= $this->Html->script('Chart1.js') ?>
    <?= $this->Html->script('jquery/jquery.min.js') ?>

    <?= $this->Html->script('sb-admin-2.min.js') ?>
    <?= $this->Html->script('chart.js/Chart.min.js') ?>

</head>
<body>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<h3>Hello Admin</h3>

  
  <br>
  

      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 sidebar" id="site-sidebar">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Kelola Data Pengguna</h6>
                </div>
                <br>
                <ul>
           <li><?= $this->Html->link(__('Kelola Users'), ['controller'=>'users','action' => 'index'], ['class' => 'btn btn-primary']) ?></li>
            <li><?= $this->Html->link(__('Lihat Pomparan'), ['controller'=>'pomparans','action' => 'index'], ['class' => 'btn btn-primary']) ?></li>                        
            <li><?= $this->Html->link(__('Kelola Monumen , Tokoh Panggabean , Berita , Agenda dan Buku Edisi'), ['controller'=>'posts','action' => 'index'], ['class' => 'btn btn-primary']) ?></li>

        </ul>
              </div>
            </div>

        <div class="col-md-6 sidebar" id="site-sidebar">
        <div class="card shadow mb-4">
                  <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary"><?= $this->Html->link(__('Agenda'), ['controller'=>'posts','action' => 'index'], ['class' => 'btn btn-primary']) ?></h6>

                  </div>
                <div class="card-body">
                
                  <p>
                    Susunan tarombo -- bagan silsilah atau diagram silsilah yang menampilkan hubungan keluarga dalam suatu struktur, adalah suatu gagasan atau cara dalam upaya seseorang, kelompok orang ataupun puak untuk memudahkannya mengenali dirinya dari posisi orangtuanya dan kakek-moyangnya. Susunan tarombo yang memuat data genealogi lengkap yang disusun dalam suatu struktur dari generasi awal, menampilkan leluhur semua pomparannya, mempunyai makna penting untuk mengetahui asal-usul, memastikan hubungan kekerabatan yang ada di dalamnya, dan juga untuk berbagai kebutuhan penting lainnya.
                  </p>
                </div>
              </div>
      </div>
    </div>

          <!-- Page Heading -->
         

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Penambahan Data Pomparan Overview</h6>
                  <div class="dropdown no-arrow">
                    
                    
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="AreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Status Pengguna</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="piechart"></canvas>
                  </div>

                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i>Aktif
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i>Tidak aktif
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

       <div class="row">
            <div class="col-md-3 sidebar" id="site-sidebar">

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Statistik Tarombo</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Lumban Ratus <span class="float-right">35%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Lumban Siagian<span class="float-right">40%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Simorangkir<span class="float-right">25%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Total Jumlah<span class="float-right">30952</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-9 sidebar" id="site-sidebar">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Statistik Sistem</h6>
                  </div>
                <div class="card-body">
                  <p>
                    Jumlah Seluruh Pengguna : <?php echo $userCount['count'];?>
                  </p>
                  <p>
                    Jumlah Pengguna Aktif : <?php echo $statCount['aktif'];?>
                  </p>
                  <p>
                    Jumlah Pengunna Non-Aktif : <?php echo $stat2Count['taktif'];?>
                  </p>
                  <p>
                    Jumlah Group : <?php echo $groupCount['grup']?> 
                     ; Pomparan dan Admin
                  </p>
                </div>
              </div>
      </div>
    </div>
      </div>
      <!-- End of Main Content -->

</body>
</html>
<script type="text/javascript">
      var ctx = document.getElementById("piechart");
      var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ["Aktif", "Tidak Aktif"],
          datasets: [{
            data: [<?php echo $statCount['aktif'];?>, <?php echo $stat2Count['taktif'];?>],
            backgroundColor: ['#4e73df', '#1cc88a'],
            hoverBackgroundColor: ['#2e59d9', '#17a673'],
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

<script type="text/javascript">
function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

var ctx = document.getElementById("AreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020"],
    datasets: [{
      label: "Jumlah Pomparan ",
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
      data: [<?php echo $cr1Count['cr1']?>, <?php echo $cr2Count['cr2']?>, <?php echo $cr3Count['cr3']?>, <?php echo $cr4Count['cr4']?>, <?php echo $cr5Count['cr5']?>, <?php echo $cr6Count['cr6']?>, <?php echo $cr7Count['cr7']?>, <?php echo $cr8Count['cr8']?>],
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
            return number_format(value);
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
          return datasetLabel + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});
</script>



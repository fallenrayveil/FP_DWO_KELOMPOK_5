<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ADW2022 - Shipment</title>
        <link rel="icon" href="img/logo.png">
        
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles and charts for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <!-- <link rel="stylesheet" href="/drilldown.css"/> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-icon">
                        <i class="fas fa-warehouse"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">ADW2022</div>
                </a>
                
                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <div class="sidebar-heading">
                    Chart Menu
                </div>

                <!-- Item - Chart Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="customer.php">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Customer Chart</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="employee.php">
                        <i class="fas fa-fw fa-user-tie"></i>
                        <span>Employee Chart</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="product.php">
                        <i class="fa fa-boxes"></i>
                        <span>Product Chart</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="sales.php">
                        <i class="fa fa-chart-line"></i>
                        <span>Sales Chart</span>
                    </a>
                </li>
                
                <li class="nav-item active">
                    <a class="nav-link" href="shipment.php">
                        <i class="fas fa-ship"></i>
                        <span>Shipment Chart</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <div class="input-group" style="margin-left: 10px; color: #000000; font-weight: 500; font-size: 15pt">Data Warehouse AdventureWorks2022</div>
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Top Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                    <img class="img-profile rounded-circle"src="img/user.webp">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-900">Shipment</h1> 
                        </div>

                        <!-- Content 1: Card Summary -->
                        <div class="row">
                            <!-- Total Armada -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col auto">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Armada yang digunakan</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                    <?php  
                                                        $mysqli = mysqli_connect("localhost","root","","adventureworks2022");
                                                        $sql = "SELECT COUNT(DISTINCT(sf.shipmethod_id)) as ship from shipment_fact sf";
                                                        $query = mysqli_query($mysqli,$sql);
                                                            while($row2=mysqli_fetch_array($query)){ 
                                                                echo number_format($row2['ship'],0,".",",");
                                                                // echo $row2['ship'];
                                                            }
                                                    ?>  
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-ship fa-2x text-gray-400"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Armada yang sering digunakan -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col auto">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Armada yang sering digunakan</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                    <?php  
                                                        $sql = "SELECT COUNT(DISTINCT(sf.shipmethod_id)) as ships, sm.name as ship from shipment_fact sf JOIN shipmethod sm ON sf.shipmethod_id = sm.shipmethod_id";
                                                        $query = mysqli_query($mysqli,$sql);
                                                            while($row2=mysqli_fetch_array($query)){ 
                                                                // echo number_format($row2['ships'],0,".",",");
                                                                echo $row2['ship'];
                                                            }
                                                    ?>  
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-star fa-2x text-gray-400"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rata-rata biaya pengiriman card -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col auto">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Rata-rata biaya pengiriman</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                    <?php  
                                                        $sql = "SELECT AVG(freight) as avg FROM shipment_fact";
                                                        $query = mysqli_query($mysqli,$sql);
                                                            while($row2=mysqli_fetch_array($query)){
                                                                echo "$".number_format($row2['avg'],0,".",",");
                                                            }
                                                    ?>  
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-dollar-sign fa-2x text-gray-400"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Content 2: Shipment Charts -->
                        <div class="row">
                            <!-- Area Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Total Biaya Pengiriman Setiap Tahun</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="myAreaChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Trend Peningkatan Total Pengiriman Setiap Tahun</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="myAreaChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Trend Total Pengiriman Setiap Bulan</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="myAreaChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Perbandingan Total Pengiriman berdasarkan Jenis Shipment</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body-store">
                                        <div class="chart-area-store">
                                            <div id="canvas-holder" style="width:100%">
                                                <canvas id="chart-area"></canvas>
                                            </div>
                                            <!-- <canvas id="myAreaChart"></canvas> -->
                                            <?php
                                                $host       = "localhost";
                                                $user       = "root";
                                                $password   = "";
                                                $database   = "adventureworks2022";
                                                $mysqli     = mysqli_connect($host, $user, $password, $database);

                                                $shipment = mysqli_query($mysqli,"SELECT COUNT(smf.shipmentfact_id) as total, sm.name as name FROM shipment_fact smf JOIN shipmethod sm on sm.shipmethod_id=smf.shipmethod_id GROUP by name;");
                                                while($row = mysqli_fetch_array($shipment)){
                                                    $jenis_shipment[] = $row['name'];

                                                    $query = mysqli_query($mysqli,"SELECT COUNT(smf.shipmentfact_id) as total, sm.name as name FROM shipment_fact smf JOIN shipmethod sm on sm.shipmethod_id=smf.shipmethod_id WHERE name ='".$row['name']."'");
                                                    $row = $query->fetch_array();
                                                    $total[] = $row['total'];
                                                };
                                                ?>
                                                <figure class="highcharts-figure">
                                                    <div id="container1"></div>
                                                    <p class="highcharts-description"></p>
                                                </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Persentase Pengiriman Berdasarkan Territory</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body-store">
                                        <div class="chart-area-store">
                                            <!-- <canvas id="myAreaChart"></canvas> -->
                                            <?php
                                            $host       = "localhost";
                                            $user       = "root";
                                            $password   = "";
                                            $database   = "adventureworks2022";
                                            $mysqli     = mysqli_connect($host, $user, $password, $database);
                                            // Chart Pertama 

                                            // Query Total Semua Amount
                                            $sql = "SELECT COUNT(shipmentfact_id) AS total FROM shipment_fact";
                                            $tot = mysqli_query($mysqli, $sql);
                                            $tot_amount = mysqli_fetch_row($tot);

                                            // Query Data Store dan Total Amountnya
                                            $sql = "SELECT concat('name:',a.group_territory) as name, concat('y:', COUNT(smf.shipmentfact_id)*100/" . $tot_amount[0] .") as y, concat('drilldown:', a.group_territory) as drilldown 
                                            FROM address a 
                                            JOIN shipment_fact smf ON (a.address_id = smf.address_id) 
                                            GROUP BY name 
                                            ORDER BY y DESC";
                                            $all_kat = mysqli_query($mysqli,$sql);
                                            while($row = mysqli_fetch_all($all_kat)) {
                                                $data[] = $row;
                                            }
                                            $json_all_kat = json_encode($data);

                                            // Chart Kedua

                                            // Query SUM(Amount) Semua Kategori Film
                                            $sql = "SELECT a.group_territory as gter, COUNT(smf.shipmentfact_id) as tot_kat 
                                            FROM address a 
                                            JOIN shipment_fact smf ON (a.address_id = smf.address_id) 
                                            GROUP BY gter";
                                            $hasil_kat = mysqli_query($mysqli,$sql);
                                            while ($row = mysqli_fetch_all($hasil_kat)) {
                                                $tot_all_kat[] = $row;
                                            }

                                            function cari_tot_kat($kat_dicari, $tot_all_kat){
                                                $counter = 0;
                                                while ( $counter < count($tot_all_kat[0]) ) {
                                                    if ($kat_dicari == $tot_all_kat[0][$counter][0]) {
                                                        $tot_kat = $tot_all_kat[0][$counter][1];
                                                        return $tot_kat;
                                                    }
                                                    $counter++;
                                                }
                                            }

                                            // Query untuk ambil total penjualan di kategori berdasarkan bulan
                                            $sql = "SELECT a.group_territory as gter, a.territory as ter, COUNT(smf.shipmentfact_id) as pendapatan_kat 
                                            FROM address a 
                                            JOIN shipment_fact smf ON (a.address_id = smf.address_id) 
                                            GROUP BY gter, ter";
                                            $det_kat = mysqli_query($mysqli,$sql);

                                            $i = 0;
                                            while ($row = mysqli_fetch_all($det_kat)) {
                                                $data_det[] = $row;
                                            }

                                            // DATA DRILL DOWN
                                            $i = 0;

                                            // Inisiasi String DATA
                                            $string_data = "";
                                            $string_data .= '{nama:"' . $data_det[0][$i][0] . '", id:"' . $data_det[0][$i][0] . '", data: [';

                                            foreach($data_det[0] as $a){
                                                if($i < count($data_det[0])-1){
                                                    if($a[0] != $data_det[0][$i+1][0]){
                                                        $string_data .= '["' . $a[1] . '", ' . $a[2]*100/cari_tot_kat($a[0], $tot_all_kat) . ']]},';
                                                        $string_data .= '{name:"' . $data_det[0][$i+1][0] . '", id:"' . $data_det[0][$i+1][0] . '", data: [';
                                                    }
                                                    else {
                                                        $string_data .= '["' . $a[1] . '", ' . $a[2]*100/cari_tot_kat($a[0], $tot_all_kat) . '], ';
                                                    }
                                                }
                                                else {
                                                    $string_data .= '["' . $a[1] . '", ' . $a[2]*100/cari_tot_kat($a[0], $tot_all_kat). ']]}';
                                                }

                                                $i = $i+1;
                                            }

                                            ?>
                                                <figure class="highcharts-figure">
                                                    <div id="container"></div>
                                                    <p class="highcharts-description"></p>
                                                </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Total Pengiriman Berdasarkan Territory</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-bar">
                                            <canvas id="myBarChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- End of Page Content -->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; AdventureWorks2022</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
        
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure, do you want to Leave this Site?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" button below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-success" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- JavaScript for Charts -->
        <script>
            var config = {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data:<?php echo json_encode($total); ?>,
                        backgroundColor: [
                        '#00BFFF',
                        '#6495ED'
                        ],
                        label: 'Presentase Jenis Shipment'
                    }],
                    labels: <?php echo json_encode($jenis_shipment); ?>},
                options: {
                    responsive: true
                }
            };

            window.onload = function() {
                var ctx = document.getElementById('chart-area').getContext('2d');
                window.myPie = new Chart(ctx, config);
            };

            document.getElementById('randomizeData').addEventListener('click', function() {
                config.data.datasets.forEach(function(dataset) {
                    dataset.data = dataset.data.map(function() {
                        return randomScalingFactor();
                    });
                });

                window.myPie.update();
            });

            var colorNames = Object.keys(window.chartColors);
            document.getElementById('addDataset').addEventListener('click', function() {
                var newDataset = {
                    backgroundColor: [],
                    data: [],
                    label: 'New dataset ' + config.data.datasets.length,
                };

                for (var index = 0; index < config.data.labels.length; ++index) {
                    newDataset.data.push(randomScalingFactor());

                    var colorName = colorNames[index % colorNames.length];
                    var newColor = window.chartColors[colorName];
                    newDataset.backgroundColor.push(newColor);
                }

                config.data.datasets.push(newDataset);
                window.myPie.update();
            });

            document.getElementById('removeDataset').addEventListener('click', function() {
                config.data.datasets.splice(0, 1);
                window.myPie.update();
            });
        </script>

        <script type="text/javascript">
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';

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

            // Area Chart Example
            <?php
            $host= "localhost";
            $user= "root";
            $password= "";
            $database= "adventureworks2022";
            $conn= mysqli_connect($host, $user, $password, $database);
            $year = "SELECT DISTINCT(t.tahun) as year FROM shipment_fact sf JOIN time t on t.time_id = sf.time_id";
            $shipment = "SELECT SUM(sf.freight) as shipment FROM shipment_fact sf JOIN time t on t.time_id = sf.time_id GROUP BY t.tahun";
            $i=1;
            $query_year=mysqli_query($conn, $year);
            $jumlah_year = mysqli_num_rows($query_year);
            $chart_year="";
            while($row=mysqli_fetch_array($query_year)){
            if ($i<$jumlah_year) {
                $chart_year.='"';
                $chart_year.=$row['year'];
                $chart_year.='",';
                $i++;
            }else{
                $chart_year.='"';
                $chart_year.=$row['year'];
                $chart_year.='"';
            }
            }
            $a=1;
            $query_shipment = mysqli_query($conn, $shipment);
            $jumlah_shipment = mysqli_num_rows($query_shipment);
            $chart_shipment="";
            while ($row1=mysqli_fetch_array($query_shipment)) {
                if ($a<$jumlah_shipment) {
                    $chart_shipment.=$row1['shipment'];
                    $chart_shipment.=',';
                    $a++;
                }else{
                    $chart_shipment.=$row1['shipment'];
                }
            }
            ?>
            var ctx = document.getElementById("myAreaChart");
            var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php echo $chart_year; ?>],
                datasets: [{
                label: "Total Biaya Pengiriman",
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
                data: [<?php echo $chart_shipment;?>],
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
                        return '$' + number_format(value);
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
                    return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                    }
                }
                }
            }
            });
        </script>

        <script type="text/javascript">
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';

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

            // Area Chart Example
            <?php
            $host= "localhost";
            $user= "root";
            $password= "";
            $database= "adventureworks2022";
            $conn= mysqli_connect($host, $user, $password, $database);
            $year = "SELECT DISTINCT(t.tahun) as year FROM shipment_fact sf JOIN time t on t.time_id = sf.time_id";
            $shipment = "SELECT COUNT(sf.shipmentfact_id) as total FROM shipment_fact sf JOIN time t ON sf.time_id = t.time_id GROUP BY t.tahun";
            $i=1;
            $query_year=mysqli_query($conn, $year);
            $jumlah_year = mysqli_num_rows($query_year);
            $chart_year="";
            while($row=mysqli_fetch_array($query_year)){
            if ($i<$jumlah_year) {
                $chart_year.='"';
                $chart_year.=$row['year'];
                $chart_year.='",';
                $i++;
            }else{
                $chart_year.='"';
                $chart_year.=$row['year'];
                $chart_year.='"';
            }
            }
            $a=1;
            $query_shipment = mysqli_query($conn, $shipment);
            $jumlah_shipment = mysqli_num_rows($query_shipment);
            $chart_shipment="";
            while ($row1=mysqli_fetch_array($query_shipment)) {
                if ($a<$jumlah_shipment) {
                    $chart_shipment.=$row1['total'];
                    $chart_shipment.=',';
                    $a++;
                }else{
                    $chart_shipment.=$row1['total'];
                }
            }
            ?>
            var ctx = document.getElementById("myAreaChart2");
            var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php echo $chart_year; ?>],
                datasets: [{
                label: "Total Pengiriman",
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
                data: [<?php echo $chart_shipment;?>],
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
                    return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                    }
                }
                }
            }
            });
        </script>

        <script type="text/javascript">
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';

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

            // Area Chart Example 2
            <?php
            $host= "localhost";
            $user= "root";
            $password= "";
            $database= "adventureworks2022";
            $conn= mysqli_connect($host, $user, $password, $database);
            $bulan = "SELECT MONTHNAME(t.tanggallengkap) bulan FROM shipment_fact sf JOIN time t ON sf.time_id = t.time_id GROUP BY t.bulan";
            $amount1 = "SELECT COUNT(sf.shipmentfact_id) as total FROM shipment_fact sf JOIN time t ON sf.time_id = t.time_id WHERE t.tahun=2004 GROUP BY t.bulan";
            $amount2 = "SELECT COUNT(sf.shipmentfact_id) as total FROM shipment_fact sf JOIN time t ON sf.time_id = t.time_id WHERE t.tahun=2003 GROUP BY t.bulan";
            $amount3 = "SELECT COUNT(sf.shipmentfact_id) as total FROM shipment_fact sf JOIN time t ON sf.time_id = t.time_id WHERE t.tahun=2002 GROUP BY t.bulan";
            $i=1;
            $query_bulan=mysqli_query($conn, $bulan);
            $jumlah_bulan = mysqli_num_rows($query_bulan);
            $chart_bulan="";
            while($row=mysqli_fetch_array($query_bulan)){
            if ($i<$jumlah_bulan) {
                $chart_bulan.='"';
                $chart_bulan.=$row['bulan'];
                $chart_bulan.='",';
                $i++;
            }else{
                $chart_bulan.='"';
                $chart_bulan.=$row['bulan'];
                $chart_bulan.='"';
            }
            }
            $a=1;
            $query_amount1 = mysqli_query($conn, $amount1);
            $jumlah_amount1 = mysqli_num_rows($query_amount1);
            $chart_amount1="";
            while ($row1=mysqli_fetch_array($query_amount1)) {
                if ($a<$jumlah_amount1) {
                    $chart_amount1.=$row1['total'];
                    $chart_amount1.=',';
                    $a++;
                }else{
                    $chart_amount1.=$row1['total'];
                }
            }
            $b=1;
            $query_amount2 = mysqli_query($conn, $amount2);
            $jumlah_amount2 = mysqli_num_rows($query_amount2);
            $chart_amount2="";
            while ($row2=mysqli_fetch_array($query_amount2)) {
                if ($b<$jumlah_amount2) {
                    $chart_amount2.=$row2['total'];
                    $chart_amount2.=',';
                    $b++;
                }else{
                    $chart_amount2.=$row2['total'];
                }
            }
            $c=1;
            $query_amount3 = mysqli_query($conn, $amount3);
            $jumlah_amount3 = mysqli_num_rows($query_amount3);
            $chart_amount3="";
            while ($row3=mysqli_fetch_array($query_amount3)) {
                if ($c<$jumlah_amount3) {
                    $chart_amount3.=$row3['total'];
                    $chart_amount3.=',';
                    $c++;
                }else{
                    $chart_amount3.=$row3['total'];
                }
            }
            ?>
            var ctx = document.getElementById("myAreaChart3");
            var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php echo $chart_bulan; ?>],
                datasets: [{
                label: "2004",
                lineTension: 0.3,
                backgroundColor: "rgba(7118, 123, 22, 0.05)",
                borderColor: "rgba(118, 123, 22, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(118, 123, 22, 1)",
                pointBorderColor: "rgba(118, 123, 22, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(118, 123, 22, 1)",
                pointHoverBorderColor: "rgba(118, 123, 22, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [<?php echo $chart_amount1;?>],
                },{
                label: "2003",
                lineTension: 0.3,
                backgroundColor: "rgba(198, 77, 96, 0.05)",
                borderColor: "rgba(198, 77, 96, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(198, 77, 96, 1)",
                pointBorderColor: "rgba(198, 77, 96, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(198, 77, 96, 1)",
                pointHoverBorderColor: "rgba(198, 77, 96, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [<?php echo $chart_amount2;?>],
                },{
                label: "2002",
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
                data: [<?php echo $chart_amount3;?>],
                }
                ],
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
                    maxTicksLimit: 12
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
                display: true
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
                    return datasetLabel + ': ' + number_format(tooltipItem.yLabel) + ' Pengiriman';
                    }
                }
                }
            }
            });
        </script>

        <script type="text/javascript">
            Highcharts.chart('container', {
                chart: {
                type: 'pie'
            },
            title: {
                text: 'Persentase Total Pengiriman Berdasarkan Territory'},
                subtitle: {
                    text:'Klik pada salah satu bagian Pie untuk melihat detil pengiriman berdasarkan territory'
                },
                accessibility: {
                    announceNewData: {
                        enabled: true
                    },
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    series:{
                        dataLabels: {
                            enabled: true,
                            format:'{point.name}: {point.y:.1f}%'
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },
                series: [
                    {
                        name: "Total Pengiriman berdasarkan Territory",
                        colorByPoint: true,
                        data:
                            <?php
                            $datanya = $json_all_kat;
                            $data1 = str_replace('["', '{"',$datanya) ;
                            $data2 = str_replace('"]', '"}',$data1) ;
                            $data3 = str_replace('[[', '[', $data2);
                            $data4 = str_replace(']]', ']', $data3);
                            $data5 = str_replace(':', '" : "', $data4);
                            $data6 = str_replace('"name"', 'name', $data5);
                            $data7 = str_replace('"drilldown"', 'drilldown', $data6);
                            $data8 = str_replace('"y"', 'y', $data7);
                            $data9 = str_replace('",', ',', $data8);
                            $data10 = str_replace(',y', '",y', $data9);
                            $data11 = str_replace(',y : "', ',y : ', $data10);
                            echo $data11;
                            ?>
                    }
                ],
                drilldown: {
                    series: [
                        <?php
                        echo $string_data;
                        ?>
                    ]
                }
            });
        </script>
        
        <!-- JavaScript for Bar Chart -->
        <script src="js/demo/chart-bar-demo5.js"></script>
    </body>
</html>
<x-app>
    <!-- Content INFORMATION -->
    <div class="row">

        <!-- Suhu -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h4><b>Suhu</b></h4>
                            </div>
                            <?php
                            $konek = mysqli_connect('localhost', 'root', '', 'smart');
                            $sql = mysqli_query($konek, 'select * from monitoring order by id desc');

                            $data = mysqli_fetch_array($sql);
                            $suhu = $data['suhu'];

                            if ($suhu == '') {
                                $suhu = 0;
                            }

                            echo "$suhu ℃";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kelembapan Ruang -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h4><b>Kelembaban Udara</b></h4>
                            </div>
                            <?php
                            $konek = mysqli_connect('localhost', 'root', '', 'smart');
                            $sql = mysqli_query($konek, 'select * from monitoring order by id desc');

                            $data = mysqli_fetch_array($sql);
                            $udara = $data['udara'];

                            if ($udara == '') {
                                $udara = 0;
                            }

                            echo "$udara %";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kelembapan Tanah -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h4><b>Kelembaban Tanah</b></h4>
                            </div>
                            <?php
                            $konek = mysqli_connect('localhost', 'root', '', 'smart');
                            $sql = mysqli_query($konek, 'select * from monitoring order by id desc');

                            $data = mysqli_fetch_array($sql);
                            $tanah = $data['tanah'];

                            if ($tanah == '') {
                                $tanah = 0;
                            }

                            echo "$tanah %";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Waktu -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h5>
                                    <b>
                                        <script async fetchpriority="high">
                                            function display_ct() {
                                                var x = new Date()
                                                var ampm = x.getHours() >= 12 ? ' PM' : ' AM';

                                                var x1 = x.getDate() + "/" + (x.getMonth() + 1) + "/" + x.getFullYear();
                                                x2 = x1 + " - " + x.getHours() + ":" + x.getMinutes() + ":" + x.getSeconds() + ampm;
                                                document.getElementById('ct').innerHTML = x2;
                                                display_c();
                                            }

                                            function display_c() {
                                                var refresh = 1000; // Refresh rate in milli seconds
                                                mytime = setTimeout('display_ct()', refresh)
                                            }
                                            display_c()
                                        </script>
                                        <span id='ct' style="font-size: 28px" fetchpriority="high"></span>

                                    </b>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Content CHART -->
    <div class="row">

        <!-- Tanah Chart -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" style="text-align: center; font-size:22px">Grafik Kelembaban Tanah (%)</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="GrafikTanah"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Udara Chart -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" style="text-align: center; font-size:22px">Grafik Kelembaban Udara (%)</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="GrafikUdara"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Suhu Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" style="text-align: center; font-size:22px">Grafik Suhu (℃)
                </h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="GrafikSuhu"></canvas>
                </div>
            </div>
        </div>
    </div>
</x-app>

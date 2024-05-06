<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sirw</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== navigasi ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="{{ url('/dashboardrt') }}" style="left: -8px;">
                        <h2 class="title" style="text-align: center;">SIRW</h2>
                    </a>
                </li>

                <hr style="width: 3200px">
                <li>
                    <a href="{{ url('/dashboardrt') }}">
                        <span class="icon">
                            <ion-icon name="grid"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/datawargart') }}">
                        <span class="icon">
                            <ion-icon name="people-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Data Warga</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/surat') }}">
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <span class="title">Surat</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/bantuansosial') }}">
                        <span class="icon">
                            <img src="assets/imgs/bantuanicon.png" alt="" style="margin-bottom: 3px">
                        </span>
                        <span class="title">Bantuan Sosial</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/keuangan') }}">
                        <span class="icon">
                            <ion-icon name="logo-usd"></ion-icon>
                        </span>
                        <span class="title">Keuangan</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/info') }}">
                        <span class="icon">
                            <ion-icon name="list"></ion-icon>
                        </span>
                        <span class="title">Informasi Kegiatan</span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= main ==================== -->
        <div class="main">
            @yield('main')
        </div>


    </div>
    </div>

    <!-- =========== js =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ======= card js ====== -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="assets/js/chartsJS.js"></script>

    <!-- ====== link icon online ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Icons -->
    <script>
        feather.replace();
    </script>
</body>

</html>

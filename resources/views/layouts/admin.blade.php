<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="bsncargo">
    <meta name="author" content="Rizki Malik, and Bootstrap contributors">
    <meta name="generator" content="bsn">
    <title>Admin | BSN Cargo</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('public/site.webmanifest') }}">

    <link rel="stylesheet" href="{{ asset('public/theme/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/admin/css/styles.css') }}">
</head>

<body class="sb-nav-fixed">
    <x-admin.navbar />
    
    <div id="layoutSidenav">
        <x-admin.sidebar />

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    {{ $slot }}
                </div>
            </main>

            <x-admin.footer />
        </div>
    </div>

    <!-- scripts -->
    <script src="{{ asset('public/theme/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/theme/admin/js/scripts.js') }}"></script>
</body>

</html>
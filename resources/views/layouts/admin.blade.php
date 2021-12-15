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

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <link rel="stylesheet" href="{{ asset('theme/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/admin/css/styles.css') }}">

    {{ $style }}
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
    <script src="{{ asset('theme/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/admin/js/scripts.js') }}"></script>

    {{ $script }}
</body>

</html>
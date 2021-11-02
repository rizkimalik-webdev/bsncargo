<!DOCTYPE html>
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

    <link rel="stylesheet" href="{{ asset('public/theme/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/admin/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/admin/css/login.css') }}">
</head>

<body class="bg-light text-center">
    <main class="form-signin">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <img class="mb-4" src="{{ asset('public/theme/images/bsncargo.png') }}" alt="" width="80" height="80">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                    id="floatingInput" placeholder="Enter Username" value="{{ old('username') }}" required
                    autocomplete="username" autofocus>
                <label for="floatingInput">Username</label>

                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Enter Password" value="{{ old('password') }}" required autocomplete="current-password">
                <label for="floatingPassword">Password</label>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}
        </form>
    </main>

    <!-- scripts -->
    <script src="{{ asset('public/theme/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/theme/admin/js/scripts.js') }}"></script>
</body>

</html>
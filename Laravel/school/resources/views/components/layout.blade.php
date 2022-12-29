<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'School' }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" href="/"><img src="./images/logo.png" alt="Logo" width="75"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/leads">Leads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/enrollments">Enrollment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/accounts">Accounts</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer class="bg-primary">
        <div class="container">
            <p>&copy; 2022, ONLITS TECHNOLOGIES</p>
        </div>
    </footer>
</body>

</html>
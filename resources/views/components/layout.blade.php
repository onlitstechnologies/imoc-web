<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'iMOC' }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <div>
            <h1>iMOC</h1>
            <span>{{ session()->get('core_id') }}</span>
        </div>
    </header>
    <aside>
        <ul>
            <li><a href="/new-enquiry-guest">Enquiry (Guest)</a></li>
            <li><a href="/new-enquiry-aspirant">Enquiry (Member)</a></li>
        </ul>
    </aside>
    <main>{{ $slot }}</main>
    <footer></footer>
</body>

</html>
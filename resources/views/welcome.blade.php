<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iMOC</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <header></header>
        <main>
            <form action="/authenticate" method="post">
                @csrf
                <input type="text" name="core_id" id="core_id" placeholder="Core Id">
                <input type="password" name="password" id="password" placeholder="Password">
                <button>Login</button>
            </form>
        </main>
        <footer>&copy;2023, Onlits Technologies</footer>
    </div>
</body>
</html>
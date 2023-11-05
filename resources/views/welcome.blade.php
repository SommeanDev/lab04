<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-900">
    <div class="container">
        <div class="bg-gray-800 p-5 w-screen flex justify-between">
            <h1 class="text-slate-50 text-2xl">Welcome</h1>
            <ol class="flex w-1/4 justify-evenly">
                <li><a href="contact" class="text-slate-50 text-2xl p-5 hover:bg-orange-700">Contact Us</a></li>
                <li><a href="article" class="text-slate-50 text-2xl p-5 hover:bg-orange-700">Article</a></li>
            </ol>
        </div>
    </div>
</body>
</html>

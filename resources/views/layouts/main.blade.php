<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .content{
            max-width: 800px;
            margin: 0 auto;
        }
        .post-section{
            margin-bottom: 1px;
            border-bottom: 1px solid #000;
        }
    </style>
</head>
<body class="body">
    <div class="content">

        @yield('content')

    </div>
</body>
</html>

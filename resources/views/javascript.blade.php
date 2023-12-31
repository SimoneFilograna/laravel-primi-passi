<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Javascript</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
</head>
<body>
    <header>
        <div class="container text-center mt-5 text-white">
            <h1 class="display-1">{{$js["name"]}}</h1>
        </div>
    </header>
    <main>
        <div class="container mt-5 mb-4">
            <div class="box p-5 text-center bg-white rounded-5">
                <img src="{{$js["img"]}}" alt="" class="">
                <p class="fs-5 pt-5">{{$js["description"]}}</p>
                <a href="/" class="btn btn-primary mt-3">Torna Indietro</a>
            </div>
        </div>
    </main>
</body>
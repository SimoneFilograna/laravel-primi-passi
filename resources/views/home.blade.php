<!DOCTYPE html>
    <html lang="eng">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Laravel Primi Passi</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="/resources/css/home.css">
        </head>
        <body>
            <header>
                <div class="container text-center mb-4">
                    <h1 class="mt-5 display-1 ciaone">Argomenti affrontati</h1>
                </div>
            </header>
            <main>
                <div class="container mt-5 mb-5">
                    <div class="row row-cols-3 g-5">
                        @foreach ($arguments as $singleArg )
                            <div class="col">
                                <div class="card h-100 bg-white border-0">
                                    <img src="{{$singleArg["img"]}}" class="card-img-top h-100 object-fit-contain" alt="">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{$singleArg["name"]}}</h5>
                                        <p class="card-text">{{$singleArg["description"]}}</p>
                                        <a href="{{$singleArg["route"]}}" class="btn btn-primary">Dettagli</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </main>
        </body>
    </html>
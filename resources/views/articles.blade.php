<!DOCTYPE html>
<html lang="fr" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>article</title>
</head>

<body>
    <main class="container mr-auto px-2 py-2">
        <div>
            {{-- creer le table des articles --}}
            <div class="table w-full ">
                <div class="table-header-group ">
                    <div class="table-row">
                        <div class="table-cell text-left ">Nom</div>
                        <div class="table-cell text-left ">contenu</div>
                        <div class="table-cell text-left ">description</div>
                    </div>
                </div>
                <div class="table-row-group">
                    @foreach ($articles as $article)
                        <div class="table-row">
                            <div class="table-cell "> {{ $article->titre }} </div>
                            <div class="table-cell ">{{ $article->contenu }}</div>
                            <div class="table-cell ">{{ $article->description }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
</body>

</html>

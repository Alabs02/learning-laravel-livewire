<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemon Laravel Way</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main class="wrapper min-w-full">
        <nav class="w-full bg-indigo-500 px-8 py-2 flex">
            <h5 class="m-0 text-indigo-50 text-lg font-semibold tracking-wider">Laravel Pokemon</h5>
        </nav>

        <div class="main__content mt-5 px-8 mb-10">
            <div class="grid grid-cols-4 gap-5">
                @foreach ($pokemons as $pokemon)
                    <div class="card border p-4 rounded-md shadow-sm overflow-hidden">
                        <div class="card__header py-2">
                            <h6 class="m-0 text-gray-700 capitalize">{{ $pokemon->name }}</h6>
                        </div>

                        <div class="card__media w-full h-48">
                            <img class="object-fill h-full w-full" src="{{ $pokemon->image }}" alt="image">
                        </div>

                        <div class="card__footer py-2 w-full mt-2 flex   flex-col items-center">
                            <span class="text-center uppercase text-indigo-900 font-bold mb-1">{{ $pokemon->cuteness .' Cuteness' }}</span>

                            <form class="w-full" method="POST" action="/pokemons/{{ $pokemon->id }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="border-0 block w-full py-2 px-4 rounded bg-indigo-500 transition-colors hover:bg-indigo-600 uppercase text-white focus:bg-indigo-700">Vote</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <footer class="w-full px-8 py-2 text-center bg-gray-50">
        <h6 class="text-gray-400 tracking-wider">Pokemon alabson.in</h6>
    </footer>
</body>
</html>

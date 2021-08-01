<div>
    <p>Query: {{ $newQuery }}</p>
    <section>{{ $pokemons }}</section>
    <main class="px-8">
        <div class="grid grid-cols-4 gap-5">
            @foreach ($pokemons as $pokemon)
                <div class="px-4 py-2 bg-white border rounded-md shadow-sm card">
                    <div class="flex items-center py-2 card__header">
                        <div class="w-6 h-6 mr-2 rounded-full bg-indigo-50"></div>
                        <h5 class="m-0 text-lg font-semibold text-indigo-900 capitalize">{{ $pokemon->name }}</h5>
                    </div>

                    <div class="w-full h-40 py-2 card__content">
                        <img src="{{ $pokemon->image }}" alt="pokemon" class="object-fill w-full h-full px-8">
                    </div>

                    <div class="grid my-2 place-items-center">
                        <div class="px-4 py-1 text-sm font-semibold tracking-wider text-indigo-900 uppercase bg-indigo-50 rounded-2xl">2 Cuteness</div>
                    </div>

                    <div class="flex items-center justify-between py-2 card__footer">
                        <button class="px-4 py-1 text-sm font-semibold tracking-wider text-white uppercase bg-indigo-500 border-none rounded shadow-sm outline-none btn hover:bg-indigo-600 focus:bg-indigo-700">Vote</button>
                        <button class="px-4 py-1 text-sm font-semibold tracking-wider text-white uppercase bg-yellow-400 border-none rounded shadow-sm outline-none btn hover:bg-yellow-500 focus:bg-yellow-600">Unvote</button>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</div>

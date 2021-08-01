<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemon Javascript Way</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="w-full">
    <div class="wrapper" id="app">
        <nav class="flex w-full px-8 py-2 bg-indigo-500">
            <h5 class="m-0 text-lg font-semibold tracking-wider text-indigo-50">Laravel Pokemon</h5>
        </nav>

        <div class="px-8 mt-5 mb-10 main__content">
            <div class="grid grid-cols-4 gap-5">
                <div v-show="isFetching" class="p-4 overflow-hidden border rounded-md shadow-sm card">
                    <div v-for="(pokemon, i) in pokemons" :key="i" class="py-2 card__header">
                        <h6 class="m-0 text-gray-700 capitalize" v-text="pokemon.name"></h6>
                    </div>

                    <div class="w-full h-48 card__media">
                        <img class="object-fill w-full h-full" :src="pokemon.image" alt="image">
                    </div>

                    <div class="flex flex-col items-center w-full py-2 mt-2 card__footer">
                        <span class="mb-1 font-bold text-center text-indigo-900 uppercase"></span>

                        {{-- <form class="w-full" method="POST" action="/pokemons/{{ $pokemon->id }}"> --}}

                        <button type="submit" class="block w-full px-4 py-2 text-white uppercase transition-colors bg-indigo-500 border-0 rounded hover:bg-indigo-600 focus:bg-indigo-700">Vote</button>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="w-full px-8 py-2 text-center bg-gray-50">
        <h6 class="tracking-wider text-gray-400">Pokemon alabson.in</h6>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
    <script src="https://unpkg.com/axios@0.21.1/dist/axios.min.js"></script>

    <script>
        new Vue({
            'el': '#app',

            data: () => {
                return {
                    pokemons: [],
                    isFetching: false,
                    baseURL: 'http://127.0.0.1:8000/api/',
                }
            },

            async created() {
                var vm = this
                await vm.getPokemons()
            },

            methods: {
                async getPokemons() {
                    var vm = this
                    try {
                        vm.isFetching = true
                        const { data, status } = await axios.get(`${vm.baseURL}pokemons`)
                        if (data) {
                            console.log(data)
                            vm.pokemons = data
                            vm.isFetching = false
                        }
                    } catch (err) {
                        console.error(err)
                        console.error(err.message)
                        alert('Err')
                        vm.isFetching = false
                    }
                },
            },
        })
    </script>
</body>
</html>

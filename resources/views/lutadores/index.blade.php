<x-guestLayout>
    <div class="max-w-6xl m-auto" >
        <h1>Lutadores</h1>

        <div class="grid grid-cols-4 gap-4">
            @foreach ($fighters as $fighter)
                <div class="bg-gray-400 rounded p-4">
                    <p class="font-bold">{{ $fighter->name }}</p>
                    <p>{{ $fighter->weight }}</p>
                </div>
            @endforeach
        </div>
    </div>
    
    <a class="hover:underline text-blue-500" href="/lutadores/create">Criar novo lutador<a>



</x-guestLayout>
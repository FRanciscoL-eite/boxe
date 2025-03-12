<x-guestLayout>
    <div class="max-w-4xl mx-auto py-8 text-center">
        <h1 class="text-2xl font-bold mb-4">Lutadores</h1>
    
        <form action="/lutadores/pesquisar" method="GET" class="flex justify-center items-center gap-2 mb-6">
            <input type="text" name="query" class="border border-gray-400 w-1/3 p-2 rounded text-lg" placeholder="Pesquisar" />
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded font-semibold hover:bg-blue-600">
                Procurar
            </button>
        </form>
    
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-2 border">Nome</th>
                        <th class="p-2 border">Peso</th>
                        <th class="p-2 border">Nascimento</th>
                        <th class="p-2 border">País</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fighters as $fighter)
                        <tr class="bg-gray-50 hover:bg-gray-100">
                            <td class="p-2 border">
                                <a href="/lutadores/{{ $fighter->id }}" class="text-blue-500 hover:underline">{{ $fighter->name }}</a>
                            </td>
                            <td class="p-2 border">{{ $fighter->weight }}</td>
                            <td class="p-2 border">{{ $fighter->birthday }}</td>
                            <td class="p-2 border">{{ $fighter->country }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="text-center mt-6">
        <a class="text-blue-500 hover:underline" href="/lutadores/create">Criar novo lutador</a>
    </div>
</x-guestLayout>
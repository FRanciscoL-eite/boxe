<x-guestLayout>
    <div class="max-w-6xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Lutas</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-100 text-gray-600 uppercase text-sm">
                    <tr>
                        <th class="py-3 px-4 border-b">Lutador 1</th>
                        <th class="py-3 px-4 border-b">Lutador 2</th>
                        <th class="py-3 px-4 border-b">Data</th>
                        <th class="py-3 px-4 border-b">Local</th>
                        <th class="py-3 px-4 border-b">Liga</th>
                        <th class="py-3 px-4 border-b">Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fights as $fight)
                        <tr class="hover:bg-gray-50 transition duration-200">
                            <td class="py-2 px-4 border-b">{{ \App\Models\Fighter::find($fight->fighter1)->name }}</td>
                            <td class="py-2 px-4 border-b">{{ \App\Models\Fighter::find(id: $fight->fighter2)->name }}</td>                            
                            <td class="py-2 px-4 border-b">{{ $fight->data }}</td>
                            <td class="py-2 px-4 border-b">{{ $fight->local }}</td>
                            <td class="py-2 px-4 border-b">{{ $fight->liga }}</td>
                            <td class="py-2 px-4 border-b">{{ \App\Models\Category::find(id: $fight->category_id)->categories }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            <a class="inline-block bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-200" href="/lutadores/create">
                Criar nova luta
            </a>
        </div>
    </div>
</x-guestLayout>
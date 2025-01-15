<x-guestLayout>
    <div class="max-w-6xl m-auto" >
        <h1>Lutadores</h1>

        <div class="grid grid-cols-1 gap-7">
            <table>
                <thead class="font-bold">
                    <td>Nome</td>
                    <td>weight</td>
                    <td>birthday</td>
                    <td>country</td>
                </thead>
                @foreach ($fighters as $fighter)
                    <tr class="bg-blue-50 rounded p-4">
                        <td >{{ $fighter->name }}</td>
                        <td>{{ $fighter->weight }}</td>
                        <td>{{ $fighter->birthday }}</td>
                        <td>{{ $fighter->country }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    
    <a class="hover:underline text-blue-500" href="/lutadores/create">Criar novo lutador<a>



</x-guestLayout>
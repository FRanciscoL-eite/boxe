<x-guestLayout>
    <div class="max-w-6xl m-auto" >
        <h1>Lutas</h1>

        <div class="grid grid-cols-1 gap-7">
            <table>
                <thead class="font-bold">
                    <td>Nome</td>
                    <td>Data</td>
                    <td>Local</td>
                    <td>liga</td>
                    <td>categoria</td>                    
                </thead>
                @foreach ($fights as $fight)
                    <tr class="bg-gray-50 rounded p-4">
                        <td>{{ $fight->fighter1 }}</td>                        
                        <td>{{ $fight->fighter2 }}</td>
                        <td >{{ $fight->data }}</td>
                        <td>{{ $fight->local }}</td>
                        <td>{{ $fight->liga }}</td>    
                        <td>{{ $fight->category_id }}</td>                        
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    
    <a class="hover:underline text-blue-500" href="/lutadores/create">Criar nova luta<a>



</x-guestLayout>

<x-guestLayout>
    <h1 class="text-xl font-bold mb-4">Index das Categorias</h1>
    
    <div class="space-y-2">
        @foreach ($categories as $category)
            <div class="border p-2 rounded shadow hover:bg-gray-100">
                {{ $category->name }}
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        <a class="hover:underline text-blue-500" href="/categories/create">
            Criar nova categoria
        </a>
    </div>
</x-guestLayout>
<x-guest-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-4">{{ $fighter->name }}</h1>
        
        <div class="flex justify-center mb-4">
            <img 
                src="/imagens/{{ $fighter->image }}" 
                alt="{{ $fighter->name }} Image" 
                class="rounded-lg shadow-lg max-w-xs"
            >
        </div>
        
        <div class="Sobre bg-white p-4 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Sobre</h2>
            <p class="mb-1"><strong>Nascimento:</strong> {{ \Carbon\Carbon::parse($fighter->birthday)->format('d/m/Y') }}</p>
            <p class="mb-1"><strong>País:</strong> {{ $fighter->country }}</p>
            <p class="mb-1"><strong>Peso:</strong> {{ $fighter->weight }} kg</p>
            <p class="mb-1"><strong>Estatistica:</strong> {{ $fighter->statistics }}</p>
        </div>
    </div>         
</x-guest-layout>
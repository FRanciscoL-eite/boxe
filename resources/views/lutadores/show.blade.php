<x-guest-layout>
    <div class="container">
        <h1>{{ $fighter->name }}</h1>
        <img 
        src="/imagens/{{ $fighter->image }}"
        class='h-60'
        >
        <div class="details">
            <p><strong>Birthday: </strong>{{ $fighter->birthday }}</p>
            <p><strong>Country: </strong>{{ $fighter->country }}</p>        
            <p><strong>weight: </strong>{{ $fighter->weight }}</p>
        </div>
    </div>         
</x-guest-layout>
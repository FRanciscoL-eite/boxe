<x-guestLayout>
    <form action="/lutadores/store" method="POST">
        @csrf
        Nome: <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
        <br>
        Birthday: <input type="date" name="birthday" value="{{ old('birthday') }}"><br>
        @error('birthday')
            <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
        weight: <input type="number" name="weight" value="{{ old('weight') }}">
        @error('weight')
            <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
        <br>
        {{-- 
        Statistic <input type="number" name="statistic" value="{{ old('statistic') }}"><br>
        @error('statistic')
            <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
        --}}
        Country: <input type="text" name="country" value="{{ old('country') }}">
        @error('country')
            <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror

        <x-button>Criar</x-button>
    </form>
</x-guestLayout>
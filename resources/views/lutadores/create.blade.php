<x-guestLayout>
    <div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Criar Lutador</h1>

        <form action="/lutadores/store" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nome:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
                @error('name')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="birthday" class="block text-sm font-medium text-gray-700">Data de Nascimento:</label>
                <input type="date" name="birthday" id="birthday" value="{{ old('birthday') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
                @error('birthday')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="weight" class="block text-sm font-medium text-gray-700">Peso:</label>
                <input type="number" name="weight" id="weight" value="{{ old('weight') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
                @error('weight')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="country" class="block text-sm font-medium text-gray-700">País:</label>
                <input type="text" name="country" id="country" value="{{ old('country') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
                @error('country')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <x-button class="w-full">Criar</x-button>
        </form>
    </div>
</x-guestLayout>
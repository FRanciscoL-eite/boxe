<x-guestLayout>
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-6">Últimas Notícias de Boxe 🥊</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($news as $article)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <span class="text-xs font-bold text-gray-600 uppercase">Boxe</span>
                        <h2 class="text-lg font-semibold mt-2">{{ $article->title }}</h2>
                        <p class="text-gray-700 text-sm mt-2">{{ Str::limit($article->summary, 120) }}</p>
                        <a href="{{ route('news.show', $article->id) }}" class="text-blue-600 font-semibold hover:underline mt-2 inline-block">
                            Ler mais →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-guestLayout>
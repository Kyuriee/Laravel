<section id="games" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Pilih Game Anda</h2>

        <div class="flex justify-center mb-8">
            <div class="flex space-x-4">
                <button class="tab-btn px-4 py-2 bg-blue-600 text-white rounded-lg" data-category="all">Semua</button>
                @foreach($categories as $cat)
                    <button class="tab-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-lg" data-category="{{ $cat }}">{{ ucfirst($cat) }}</button>
                @endforeach
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" id="games-container">
            @foreach($games as $index => $game)
                <div class="game-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition {{ $index >= 4 ? 'hidden' : '' }}" data-category="{{ $game->category }}">
                    <img src="{{ $game->image_url }}" alt="{{ $game->name }}" class="w-full h-32 object-cover rounded mb-4">
                    <h3 class="text-lg font-semibold mb-2">{{ $game->name }}</h3>
                    <p class="text-gray-600 mb-4">{{ $game->description }}</p>
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Top Up</a>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-8">
            <button id="load-more" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">Load More</button>
        </div>
    </div>
</section>
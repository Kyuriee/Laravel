<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Flash Sale</h2>
        @if($flashSales->isEmpty())
            <div class="text-center py-10 text-gray-500">Tidak ada flash sale aktif saat ini.</div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($flashSales as $sale)
                    <div class="p-6 rounded-lg text-center border shadow-sm hover:shadow-lg transition">
                        <img src="{{ $sale->image_url ?? 'https://via.placeholder.com/200x150?text=Flash+Sale' }}" alt="{{ $sale->name }}" class="w-full h-36 object-cover rounded mb-4">
                        <h3 class="text-xl font-semibold mb-2">{{ $sale->name }}</h3>
                        <p class="text-gray-600 mb-2">{{ $sale->description }}</p>
                        <p class="text-red-600 font-bold text-2xl mb-3">{{ number_format($sale->discount, 2) }}%</p>
                        <p class="mb-2">Berakhir: {{ optional($sale->end_at)->translatedFormat('d M Y H:i') ?? 'selesai segera' }}</p>
                        <p class="text-sm text-gray-500">
                            {{ sprintf($siteConfig['flashsale_expiry_message'] ?? 'Flash sale berakhir dalam %s', $sale->end_at ? $sale->end_at->diffForHumans() : 'segera') }}
                        </p>
                        <a href="#games" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Beli Sekarang</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
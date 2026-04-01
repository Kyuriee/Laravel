@extends('layouts.app')

@section('content')
    @include('home.partials.banner')
    @include('home.partials.flashsale')
    @include('home.partials.games')

    <script>
        const tabButtons = document.querySelectorAll('.tab-btn');
        const gameCards = document.querySelectorAll('.game-card');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                tabButtons.forEach(btn => {
                    btn.classList.remove('bg-blue-600', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-gray-700');
                });
                button.classList.remove('bg-gray-200', 'text-gray-700');
                button.classList.add('bg-blue-600', 'text-white');

                const category = button.getAttribute('data-category');
                gameCards.forEach(card => {
                    if (category === 'all' || card.getAttribute('data-category') === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        document.getElementById('load-more').addEventListener('click', function() {
            const hiddenCards = document.querySelectorAll('.game-card.hidden');
            if (hiddenCards.length === 0) {
                return;
            }
            hiddenCards.forEach(card => {
                card.classList.remove('hidden');
            });
            this.style.display = 'none';
        });
    </script>
@endsection
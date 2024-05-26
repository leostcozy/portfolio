<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('店舗一覧') }}
        </h2>
    </x-slot>
        <div class='shops'>
            <div class='shop'>
                @foreach ($shops as $shop)
                <div class='shop'>
                    <h2 class='name'>{{ $shop->name }}</h2>
                    <p class='address'>{{ $shop->address }}</p>
                @endforeach
            </div>
            <div class='paginate'>
            {{ $shops->links() }}
        </div>
        </div>
</x-app-layout>

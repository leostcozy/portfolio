<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('店舗一覧') }}
        </h2>
    </x-slot>
    <div class='shops p-6 max-w-7xl mx-auto'>
        <div class='grid grid-cols-1 md:grid-cols-3 gap-8'>
            @foreach ($shops as $shop)
            <div class='bg-white shadow rounded-lg overflow-hidden'>
                <img src="{{ asset('path/to/shop/image/'. $shop->image) }}" class="w-full h-48 object-cover">
                <div class='p-6'>
                    <h2 class='text-lg font-bold mb-2 inline-block'>
                        <a href="/shops/{{ $shop->id }}" class="hover:text-blue-500">
                            {{ $shop->name }}
                        </a>
                    </h2>
                    <p class='text-gray-600 mb-4'>{{ $shop->address }}</p>
                    
                </div>
            </div>
            @endforeach
        </div>
        <div class='mt-10'>
            {{ $shops->links() }}
        </div>
    </div>
</x-app-layout>

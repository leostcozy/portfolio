<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('店舗詳細') }}
        </h2>
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 p-6 bg-white shadow-md rounded-lg">
                <h1 class="text-2xl font-bold mb-4">{{ $shop->name }}</h1>
                <hr class="my-4 border-gray-300">
                <h2 class="text-xl font-medium mb-4">紹介文</h2>
                <p class="text-gray-700">{{ $shop->introduction }}</p>
                <hr class="my-4 border-gray-300">
                <h2 class="text-xl font-medium mb-4">Information</h2>
                <ul class="list-disc pl-5">
                    <li class="text-gray-600 mb-2"><strong>住所:</strong> {{ $shop->address }}, {{ $shop->post_code }}</li>
                    <li class="text-gray-600 mb-2"><strong>営業時間:</strong> {{ $shop->opening_time }} - {{ $shop->closing_time }}</li>
                    <li class="text-gray-600 mb-2"><strong>定休日:</strong> {{ $shop->regular_holiday }}</li>
                    <li class="text-gray-600 mb-2"><strong>電話:</strong> {{ $shop->phone_number }}</li>
                    <li class="text-gray-600 mb-2"><strong>SNSアカウント:</strong> {{ $shop->sns_account }}</li>
                    <li class="text-gray-600 mb-2"><strong>公式ウェブサイト:</strong> <a href="{{ $shop->official_website }}" class="text-blue-500 hover:text-blue-700">こちら</a></li>
                </ul>
            </div>
            <!-- 戻るボタン -->
            <div class="flex justify-start py-4 px-6">
                <a href="/list" class="text-gray-600 mb-2 font-medium text-black bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    戻る
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

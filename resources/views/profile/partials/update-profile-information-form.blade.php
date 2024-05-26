<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('プロフィールを編集') }}
        </h2>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <!--Profile icon-->
            <img src="{{ asset('/img/icon.png') }}" style="width:70px; height:auto;">
        </div>

        <div>
            <x-input-label for="name" :value="__('ユーザーネーム')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="description" :value="__('自己紹介文')" />
            <textarea id="description" name="description" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" rows="3">{{ old('description', $user->description) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>
        
        <div>
    <x-input-label for="gender" :value="__('性別')" />
    <div class="mt-1">
            <label class="inline-flex items-center">
                <input type="radio" class="form-radio h-5 w-5 text-indigo-600" name="gender" value="male" @if ($user->gender === 'male') checked @endif />
                <span class="ml-2 text-gray-700">{{ __('男性') }}</span>
            </label>
            <label class="inline-flex items-center ml-6">
                <input type="radio" class="form-radio h-5 w-5 text-indigo-600" name="gender" value="female" @if ($user->gender === 'female') checked @endif />
                <span class="ml-2 text-gray-700">{{ __('女性') }}</span>
            </label>
            <label class="inline-flex items-center ml-6">
                <input type="radio" class="form-radio h-5 w-5 text-indigo-600" name="gender" value="other" @if ($user->gender === 'other') checked @endif />
                <span class="ml-2 text-gray-700">{{ __('その他') }}</span>
            </label>
        </div>
        <x-input-error class="mt-2" :messages="$errors->get('gender')" />
    </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
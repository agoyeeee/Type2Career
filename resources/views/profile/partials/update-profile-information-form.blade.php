<section class="bg-gray-900 text-white py-8 px-6 sm:px-8 rounded-lg shadow-lg">
    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" class="text-white" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full text-black" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2 text-red-500" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-white" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full text-black" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2 text-red-500" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-300">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-blue-500 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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

        <div class="mt-6">
            <x-input-label for="mbti_type" :value="__('MBTI Type')" class="text-white" />
            <div class="mt-1 p-3 block w-full rounded-md border-gray-300 bg-gray-700 text-white"
                 x-data="{ mbtiType: '' }"
                 x-init="
                    fetch('{{ route('profile.mbti') }}', {
                        headers: {
                            'Authorization': 'Bearer {{ $token }}'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        mbtiType = data.mbti_type || 'Belum ada hasil MBTI'
                    })
                    .catch(error => {
                        mbtiType = 'Belum ada hasil MBTI'
                    })
                 "
                 x-text="mbtiType"
            >
                @if($user->quizResult)
                    {{ $user->quizResult->mbti_type }}
                @else
                    {{ __('Belum ada hasil MBTI') }}
                @endif
            </div>
            <p class="mt-2 text-sm text-gray-400">
                {{ __('* MBTI Type akan terisi otomatis setelah Anda menyelesaikan tes MBTI') }}
            </p>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

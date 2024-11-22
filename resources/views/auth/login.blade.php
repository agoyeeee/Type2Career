<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-black text-white font-sans flex items-center justify-center h-screen">
    <img
      alt="A futuristic smartphone with a sleek design and vibrant colors"
      class="absolute top-16 left-5 w-36"
      src="https://cdn.builder.io/api/v1/image/assets/TEMP/0852c74df5204e60a0becedf83a1447da7e95e2de168b8e92f5f94e5dd6a746f?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
    />
    <div class="bg-gray-700 rounded-lg p-12 w-full max-w-lg flex flex-col items-center">
      <form method="POST" action="{{ route('login') }}" class="w-full flex flex-col">
        @csrf

        <div class="text-3xl text-center font-bold uppercase mb-10">TYPE<span class="text-blue-400 text-4xl italic">2</span>CAREER</div>

        <!-- Email Address -->
        <div>
          <x-input-label for="email" :value="__('Email')" class="text-white-600" />
          <x-text-input
            id="email"
            class="block mt-1 w-full bg-black border-b border-white text-white focus:border-blue-500 focus:outline-none p-2"
            type="email"
            name="email"
            :value="old('email')"
            required
            autofocus
            autocomplete="username"
          />
          <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        <!-- Password -->
        <div class="mt-4">
          <x-input-label for="password" :value="__('Password')" />
          <x-text-input
            id="password"
            class="block mt-1 w-full bg-black border-b border-white text-white focus:border-blue-500 focus:outline-none p-2"
            type="password"
            name="password"
            required
            autocomplete="current-password"
          />
          <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
          <label for="remember_me" class="inline-flex items-center">
            <input
              id="remember_me"
              type="checkbox"
              class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
              name="remember"
            />
            <span class="ml-2 text-sm text-gray-400">{{ __('Remember me') }}</span>
          </label>
        </div>

        <!-- Submit -->
        <div class="flex items-center justify-between mt-4">
          @if (Route::has('password.request'))
          <a
            class="underline text-sm text-gray-400 hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            href="{{ route('password.request') }}"
          >
            {{ __('Forgot your password?') }}
          </a>
          @endif

          <x-primary-button class="ml-3 bg-blue-500 hover:bg-blue-600 text-white rounded-md py-2 px-4">
            {{ __('Log in') }}
          </x-primary-button>
        </div>
      </form>
    </div>
    <div class="absolute bottom-5 right-5">
      <img
        alt="A futuristic smartphone with a sleek design and vibrant colors"
        class="w-72"
        src="https://cdn.builder.io/api/v1/image/assets/TEMP/b0b8ac2bd764eda356e14ac0185ec4d6d1336b9f4ef645a165b1c133a6863e88?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
      />
    </div>
  </body>
</html>

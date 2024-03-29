<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <!-- Email Address -->
      <div>
        {{-- <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
          autofocus autocomplete="username" /> --}}
        <x-input icon="identification" id="email" label="Email" name="email" :value="old('email')" required autofocus
          autocomplete="username" placeholder="" class="border-gray-300 focus:border-green-800 focus:ring-green-800 rounded-md shadow-sm"/>
        {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
      </div>

      <!-- Password -->
      <div class="mt-4">
        {{-- <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
          autocomplete="current-password" /> --}}
        <x-inputs.password icon="lock-closed" id="password" label="Password" name="password" required
          autocomplete="current-password" value="" class="border-gray-300 focus:border-green-800 focus:ring-green-800 rounded-md shadow-sm"/>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>


      <div class="flex items-center justify-end mt-4">
        {{-- @if (Route::has('password.request'))
          <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
          </a>
        @endif --}}

        <div class="ml-3">
          <x-primary-button class="ml-3">
            {{ __('Log in') }}
          </x-primary-button>
        </div>
      </div>
    </form>
  </x-guest-layout>

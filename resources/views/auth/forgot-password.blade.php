<x-guest-layout>

    <div class="text-xl text-gray-800 dark:text-gray-400 text-center mt-2 mb-4 ">
        {{__('Title Recover password')}}
    </div>
    <div class="border-b-2 border-white mt-2 mb-4"></div>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400 text-center">
        {{ __('Recover password by email') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-6 mb-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

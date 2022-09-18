<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-login-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <div class="grid grid-cols-2 gap-8 mt-5" aria-required="true">
                <div class="relative">
                  <input class="hidden group peer"type="radio" name="role_id" value="patient" id="standard_alt" />

                  <label class="block p-3 text-md text-center font-large border border-gray-100 rounded-xl cursor-pointer transition-colors shadow-sm peer-checked:border-blue-500 hover:bg-gray-50 peer-checked:ring-1 peer-checked:ring-blue-500" for="standard_alt">
                    <span> Patient </span>

                  </label>
                </div>

                <div class="relative">
                  <input class="hidden group peer" type="radio" name="role_id" value="doctor" id="next_day_alt" />

                  <label class="block p-3 text-md font-large border text-center text border-gray-100 rounded-xl cursor-pointer transition-colors shadow-sm peer-checked:border-blue-500 hover:bg-gray-50 peer-checked:ring-1 peer-checked:ring-blue-500" for="next_day_alt">
                    <span> Doctor </span>
                  </label>
                </div>
              </div>


            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            <a class="underline text-center text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
            </a>
        </form>
    </x-auth-card>
</x-guest-layout>

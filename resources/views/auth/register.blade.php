<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
             <!-- mobile -->
            <div>
                <x-input-label for="mobile" :value="__('Mobile')" />
                <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required autofocus />
                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
            </div>

            <!-- location -->
            <div>
                <x-input-label for="location" :value="__('Location')" />
                <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required autofocus />
                <x-input-error :messages="$errors->get('location')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <!--role-->
            <select class="form-select form-select-sm mt-3" name="role" type="text" id="role" :value="old('role')">
                <option>Worker & User</option>
                <option>Only User</option>

              </select>
              <!-- worker information-->
              <!--category-->

             <span class="text-primary"> If you are worker, Fill this fields.</span>
            <br>
            <div>
                <x-input-label for="category" :value="__('Category')" />
                <select class="form-select shadow-sm" name="category">
                    <option></option>
                    <option>plumber</option>
                    <option>Teacher</option>
                    <option>Tutor</option>
                    <option>Designer</option>
                    <option>Architecture</option>
                    <option>Video Editor</option>
                    <option>Electrition</option>
                    <option>Driver</option>
                    <option>Painter</option>
                    <option>Doctor</option>
                    <option>Helper</option>
                    <option>Trainer</option>
                    <option>Accountent</option>
                    <option>Tree cutter</option>
                    <option>Lowyer</option>
                    <option>Brocker</option>
                    <option>Cook</option>
                </select>
                <x-input-error :messages="$errors->get('category')" class="mt-2" />
            </div>
              <!--sub-category-->
            <div>
                <x-input-label for="sub_category" :value="__('Sub_category')" />
                <x-text-input id="sub_category" class="block mt-1 w-full" type="text" name="sub_category" :value="old('sub_category')"  />
                <x-input-error :messages="$errors->get('sub_category')" class="mt-2" />
            </div>
              <!-- end filling area -->
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

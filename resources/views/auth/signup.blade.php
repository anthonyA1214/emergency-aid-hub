<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Emergency Aid Hub</title>

    @vite('resources/css/app.css')
    
</head>
<body class="min-h-screen flex justify-center items-center p-10">

    <div class="flex flex-col gap-10 justify-items-center items-center">

        {{-- Logo --}}
        <div class="flex flex-col lg:flex-row text-center items-center gap-6 text-red-500">
            <x-logo class="h-32 w-32" />
            <h1 class="font-bold text-4xl">Emergency Aid Hub</h1>
        </div>

        <div class="p-10 rounded-2xl lg:min-w-2xl shadow-xl text-center">
            <form class="w-full" method="POST" action="/signup">
                @csrf

                {{-- Name --}}
                <div class="flex gap-3">

                    {{-- First Name --}}
                    <x-fieldset-half>

                        <x-fieldset-label>First Name</x-fieldset-label>

                        <x-form-input type="text" name="first_name" id="first_name" placeholder="First Name" value="{{ old('first_name') }}" />

                        <x-form-error name="first_name" />

                    </x-fieldset-half> 

                    {{-- Last Name --}}
                    <x-fieldset-half>

                        <x-fieldset-label>Last Name</x-fieldset-label>

                        <x-form-input type="text" name="last_name" id="last_name" placeholder="Last Name" value="{{ old('last_name') }}" />

                        <x-form-error name="last_name" />

                    </x-fieldset-half>
      
                </div>

                {{-- Email --}}
                <x-fieldset-full>
                    
                    <x-fieldset-label>Email</x-fieldset-label>


                    <x-form-input type="email" name="email" id="email" placeholder="email@example.com" value="{{ old('email') }}">
                        <x-slot:icon>
                            <x-icons.envelope-regular class="h-[1em] opacity-50" />
                        </x-slot:icon>
                    </x-form-input>

                    <x-form-error name="email" />

                </x-fieldset-full>

                {{-- Password --}}
                <x-fieldset-full>

                    <x-fieldset-label>Password</x-fieldset-label>

                    <x-form-input type="password" name="password" id="password" placeholder="Password">
                        <x-slot:icon>
                            <x-icons.key-regular class="h-[1em] opacity-50" />
                        </x-slot:icon>
                    </x-form-input>

                    <x-form-error name="password" />

                </x-fieldset-full>

                {{-- Confirm Password --}}
                <x-fieldset-full>

                    <x-fieldset-label>Confirm Password</x-fieldset-label>

                    <x-form-input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                        <x-slot:icon>
                            <x-icons.key-regular class="h-[1em] opacity-50" />
                        </x-slot:icon>
                    </x-form-input>

                    <x-form-error name="password_confirmation" />

                </x-fieldset-full>

                {{-- Submit --}}
                <x-button-fill type="submit" class="mt-6">Sign Up</x-button-fill>

            </form>

            <p class="mt-3">
                Already have an account? <a class="text-blue-500" href="/login">Log in</a>
            </p>
            
        </div>
    </div>

    @vite('resources/js/form.js')
</body>
</html>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - Emergency Aid Hub</title>

    @vite('resources/css/app.css')
    
</head>
<body class="min-h-screen flex justify-center items-center p-10">

    <div class="grid lg:grid-cols-2 gap-10 justify-items-center">
        
        {{-- Logo --}}
        <div class="flex flex-col text-center items-center gap-6 text-red-500">
            <x-logo class="h-32 w-32 lg:w-64 lg:h-64" />
            <h1 class="font-bold text-4xl">Emergency Aid Hub</h1>
        </div>

        <div class="p-10 rounded-2xl lg:min-w-2xl shadow-xl text-center">
            <form class="w-full" method="POST" action="/login">
                @csrf

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

                    @error('password')
                        @if ($message === '__hidden__')
                            <p class="input-error-message"></p>
                        @else
                            <x-form-error name="password" />
                        @endif
                    @enderror

                </x-fieldset-full>

                {{-- Submit --}}
                <x-button-fill type="submit" class="mt-6">Log In</x-button-fill>
            </form>

            <p>
                <a class="text-blue-500 block my-3" href="#">Forgot Password?</a>
            </p>
            

            <div class="w-full my-4 border-t border-gray-300"></div>

            <p class="my-3">
                Don't have an account? <a class="text-blue-500" href="/signup">Sign up</a>
            </p>
            
        </div>
    </div>

    @vite('resources/js/form.js')
</body>
</html>
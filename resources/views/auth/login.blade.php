<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - Emergency Aid Hub</title>

    @vite('resources/css/app.css')
    
</head>
<body class="min-h-screen flex justify-center items-center">

    <div class="grid lg:grid-cols-2 gap-8 justify-items-center">
        <div class="flex flex-col text-center items-center gap-6">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" class="h-32 w-32 lg:w-64 lg:h-64"/>
            <h1 class="font-bold text-4xl text-red-500">Emergency Aid Hub</h1>
        </div>

        <div class="p-10 rounded-2xl lg:min-w-2xl shadow-xl text-center">
            <form class="w-full">
                {{-- Email --}}
                <fieldset class="fieldset w-full">
                    <legend class="fieldset-legend text-start">Email</legend>
                    
                    <label class="input validator w-full">
                        <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        
                        <input type="email" class="w-full" placeholder="mail@site.com" required />
                    </label>
                    <div class="validator-hint hidden">Enter valid email address</div>
                </fieldset>

                {{-- Password --}}
                <fieldset class="fieldset w-full">
                    <legend class="fieldset-legend text-start">Password</legend>

                    <label class="input validator w-full">
                        <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                        </svg>
                        
                        <input type="password" class="w-full" placeholder="Password" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must be more than 8 characters, including number, lowercase letter, uppercase letter" required />.

                    </label>
                    <p class="validator-hint hidden">
                    Must be more than 8 characters, including
                    <br />At least one number <br />At least one lowercase letter <br />At least one uppercase letter
                    </p>
                </fieldset>

                <button class="btn w-full bg-red-500 hover:bg-red-600 text-white rounded-xl mt-6">Log in</button>
            </form>

            <p>
                <a class="text-blue-500 block my-3" href="#">Forgot Password?</a>
            </p>
            

            <hr class="border-t border-gray-300 my-3" />

            <p>
                Don't have an account? <a class="text-blue-500 inline-block my-3" href="#">Sign up</a>
            </p>
            
        </div>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Aid Hub</title>

    @vite('resources/css/app.css')

</head>
<body class="min-h-screen bg-base-100">
    <nav class="navbar flex-col p-0 fixed">
        <div class="flex justify-center w-full py-3 bg-base-100">
            
            <div class="flex justify-between container items-center">

                {{-- Logo --}}
                <div class="flex items-center gap-x-3 ">
                    <img src="{{ asset('images/logo.png') }}" class="h-12 w-12"/>
                    <h1 class="font-bold text-4xl text-red-500">Emergency Aid Hub</h1>
                </div>
                
                <div class="flex items-center gap-x-6">

                    {{-- Search bar --}}
                    <div class="join">
                        <div class="input join-item">
                            <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                              
                            <input type="search" class="grow" placeholder="Search" />
                        </div>
                        <div class="btn join-item">
                            <svg class="h-[1em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z" clip-rule="evenodd" />
                            </svg>     
                        </div>
                    </div>
    
                  {{-- 911 Call --}}  
                  <a class="flex items-center gap-x-2 text-red-500 text-lg" href="#">
                    <svg class="h-[1em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                    </svg>
                    911
                  </a>
    
    
                  {{-- User icon --}}
                  <a class="text-lg" href="#">
                    <svg class="h-[1.5em]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0zM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                  </a>
                  
                </div>
            </div>
        </div>

        {{-- Navigation items --}}
        <div class="flex justify-center bg-base-200 shadow-lg w-full">
            <div class="flex container justify-center w-full px-4">
                <x-nav-item href="/" icon="icons.house-line-regular" iconActive="icons.house-line-fill" :active="request()->is('/')">Home</x-nav-item>
                <x-nav-item href="/map" icon="icons.map-pin-regular" iconActive="icons.map-pin-fill" :active="request()->is('map')">Map</x-nav-item>
                <x-nav-item href="/safety" icon="icons.shield-regular" iconActive="icons.shield-fill" :active="request()->is('safety')">Safety</x-nav-item>
                <x-nav-item href="/user" icon="icons.user-regular" iconActive="icons.user-fill" :active="request()->is('user')">User</x-nav-item>
            </div>
        </div>
        
    </nav>

    <main class="flex justify-center p-6">
        <div class="flex flex-col items-center container pt-32">
            {{ $slot }}
        </div>
    </main>
</body>
</html>


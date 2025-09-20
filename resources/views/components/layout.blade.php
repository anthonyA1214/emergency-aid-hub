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
                <div class="flex items-center gap-x-3 text-red-500">
                    <x-logo class="h-12 w-12" />
                    <h1 class="font-bold text-3xl">Emergency Aid Hub</h1>
                </div>
                
                <div class="flex items-center gap-x-6">

                    {{-- Search bar --}}
                    <div class="join">

                        <div class="input join-item">
                            <x-icons.magnifying-glass-regular class="h-[1em] opacity-50" />
                              
                            <input type="search" class="grow" placeholder="Search" />
                        </div>

                        <div class="dropdown dropdown-end join-item">
                            <div tabindex="0" role="button" class="btn btn-square">
                                <x-icons.funnel-simple-regular class="h-[1.2em]" />
                            </div>
                            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                            <li><a>Item 1</a></li>
                            <li><a>Item 2</a></li>
                            </ul>
                        </div>

                    </div>
    
                  {{-- 911 Call --}}  
                  <a class="flex items-center gap-x-2 text-red-500 text-lg font-medium" href="#">
                    <x-icons.phone-fill class="h-[1.2em]" />
                    911
                  </a>
    
    
                  {{-- User icon --}}
                  <a class="text-lg" href="#">
                    <x-icons.user-regular class="h-[1.5em]" />
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


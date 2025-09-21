<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Aid Hub</title>

    @vite('resources/css/app.css')

</head>
<body class="min-h-screen bg-base-100">

    <div class="drawer drawer-end">
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />

        {{-- Page content --}}
        <div class="drawer-content">
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
                          <a class="flex items-center gap-x-2 text-lg font-medium text-red-500 hover:text-red-600" href="#">
                            <x-icons.phone-fill class="h-[1.2em]" />
                            911
                          </a>
            
                          {{-- Drawer Toggle --}}
                          <label for="my-drawer-4" class="drawer-button cursor-pointer group">
                            <div class="flex items-center gap-x-2">

                                {{-- Avatar --}}
                                <div class="avatar">
                                    <div class="w-10 border border-red-500 rounded-full group-hover:ring group-hover:ring-red-600 group-hover:ring-offset-1">
                                        <img src="https://ui-avatars.com/api/?name=Anthony+Amiluddin1&background=random" />
                                    </div>
                                </div>

                                {{-- List --}}
                                <x-icons.list-regular class="h-[1em]" />
                            </div>
                          </label>

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
            
            {{-- Main content --}}
            <main class="flex justify-center p-6">
                <div class="flex flex-col items-center container pt-32">
                    {{ $slot }}
                </div>
            </main>
    
        </div>

        {{-- Drawer content --}}
        <div class="drawer-side">
            <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-base-200 min-h-full w-80 p-0 rounded-tl-3xl rounded-bl-3xl">
                <!-- Sidebar content here -->
                <div class="flex items-center bg-base-300 h-16 rounded-tl-3xl border-b-1 p-6">
                    <div class="flex justify-between w-full">

                        <div class="flex justify-center items-center text-lg gap-x-2">
                            <x-icons.user-regular class="h-[1.2em]" />
                            <span>Profile Information</span>
                        </div>

                        <div class="flex justify-center items-center">
                            <label for="my-drawer-4" class="btn btn-ghost btn-circle btn-sm">
                                <x-icons.x-regular class="w-5 h-5" />
                            </label>
                        </div>

                    </div>
                </div>
                
                <div class="flex flex-col items-center p-6 gap-y-4 flex-1">

                    {{-- Avatar and Info --}}
                    <div class="avatar">
                        <div class="w-24 rounded-full ring ring-red-500 ring-offset-2">
                            <img src="https://ui-avatars.com/api/?name=Anthony+Amiluddin1&background=random" />
                        </div>
                    </div>

                    <div class="text-center space-y-1">
                        <h2 class="font-semibold text-xl">Anthony Amiluddin</h2>
                        <p class="text-sm text-gray-500">mail@domain.com</p>
                    </div>

                    <div class="w-full grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-500">Full Name</p>
                            <p class="font-medium">Anthony Amiluddin</p>
                        </div>
                    
                        <div>
                            <p class="text-sm text-gray-500">Phone Number</p>
                            <p class="font-medium">0912 345 6789</p>
                        </div>
                    
                        <div>
                            <p class="text-sm text-gray-500">Address</p>
                            <p class="font-medium">Bagong Silang Caloocan City</p>
                        </div>
                    
                        <div>
                            <p class="text-sm text-gray-500">Birthday</p>
                            <p class="font-medium">January 1, 2000</p>
                        </div>
                    </div>
                    
                    <div class="w-full my-4 border-t border-gray-300"></div>

                    {{-- Buttons --}}
                    <div class="w-full mt-auto">
                        <a href="#" class="btn btn-outline btn-primary w-full mb-2">
                            <x-icons.pencil-fill class="h-[1.2em]" />Edit Profile
                        </a>
                        <form action="/logout" method="POST">
                            @csrf

                            <button type="submit" class="btn btn-outline btn-error w-full">
                                <x-icons.sign-out-regular class="h-[1.2em]" />Sign Out
                            </button>
                        </form>
                    </div>             
                    
                </div>        

            </ul>
        </div>

    </div>

</body>
</html>


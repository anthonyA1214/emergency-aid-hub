<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Emergency Aid Hub</title>

    @vite('resources/css/app.css')

</head>
<body class="min-h-screen bg-base-200">
    <div class="flex flex-row">
        <input type="checkbox" id="sidebar-toggle" class="peer hidden" />

        {{-- Sidebar menu --}}
        <aside class="fixed top-0 left-0 flex flex-col h-screen w-72 px-3 bg-base-200 border-r border-base-300 transform duration-300 peer-checked:-translate-x-full">
            
            {{-- Logo --}}
            <div class="flex flex-row items-center justify-center gap-x-2 py-6">
                <div>
                    <x-logo class="h-14 w-14 text-red-500" />
                </div>
                <div>
                    <h1 class="font-bold text-xl">Emergency Aid Hub</h1>
                    <p class="text-lg">Admin Panel</p>
                </div>
            </div>
            
            <div class="w-full my-4 border-t border-gray-300"></div>

            {{-- Navigation Items --}}
            <nav>
                <x-admin-nav-item href="/admin" icon="icons.squares-four-regular" iconActive="icons.squares-four-fill" :active="request()->is('admin')">Dashboard</x-admin-nav-item>
                <x-admin-nav-item href="/admin/users" icon="icons.users-regular" iconActive="icons.users-fill" :active="request()->is('admin/users')">User Management</x-admin-nav-item>
                <x-admin-nav-item href="/admin/reports" icon="icons.file-text-regular" iconActive="icons.file-text-fill" :active="request()->is('admin/reports')">Reports</x-admin-nav-item>
                <x-admin-nav-item href="/admin/analytics" icon="icons.chart-line-regular" iconActive="icons.chart-line-fill" :active="request()->is('admin/analytics')">Analytics</x-admin-nav-item>
            </nav>
            
            <div>
                
            </div>

        </aside>
        
        <div class="flex flex-col flex-1 h-screen ml-72 peer-checked:ml-0 transition-all duration-300">
            {{-- Top navbar --}}

            <div class="flex items-center px-3 h-16 bg-base-200">
                {{-- Collapse Button --}}
                <label for="sidebar-toggle" class="btn btn-ghost btn-circle">
                    <x-icons.list-regular class="w-6 h-6" />
                </label>

                {{-- Dummy --}}
                <div class="flex flex-1 justify-end items-center gap-x-2">
                    {{-- User info --}}
                    <x-icons.user-regular class="w-6 h-6" />
                    <div class="flex flex-col items-end">
                        <p class="font-semibold">Admin User</p>
                        <p class="text-sm opacity-70">Administrator</p>
                    </div>
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle btn-sm">
                            <x-icons.caret-down-regular class="w-2.5 h-2.5" />
                        </label>
                        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52 mt-3">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            {{-- Main content --}}
            <main class="flex flex-1 p-6 bg-base-100">
                {{ $slot }}
            </main>
        </div>   
        
    </div>
</body>
</html>
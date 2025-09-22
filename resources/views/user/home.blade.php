<x-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

         @vite('resources/css/app.css')

    </head>

    <body>
    <div class="bg-white shadow-md rounded-xl p-4 max-w-2xl mx-auto mt-6">
        
        <!-- Header -->
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                    <span class="text-black text-sm"> </span>
                </div>
                <div>
                    <p class="font-semibold text-gray-800">Sasuke Uzumaki</p>
                    <p class="text-xs text-gray-500">Aug 24, 25 · 5:00 PM</p>
                </div>
            </div>
            <button class="text-sm text-gray-500 hover:text-gray-700"> Report </button>
        </div>

        <!-- Post Content -->
        <div class="mt-3">
            <p class="text-gray-800 font-medium">
                Heavy Rainfall Expected This Weekend in Manila
            </p>
            <div class="mt-3">
                <img src="https://www.ready.gov/sites/default/files/2020-04/Flooded-neighborhood_1.jpg" 
                    alt="Flood in Manila" 
                    class="rounded-lg w-full object-cover">
            </div>
        </div>

        <!-- Actions -->
        <div class="flex justify-between items-center mt-4 text-gray-600 text-sm">
            <div class="flex space-x-6">
                <button class="flex items-center space-x-1 hover:text-blue-600">
                    <span> </span>
                    <span>1,000</span>
                </button>
                <button class="flex items-center space-x-1 hover:text-red-600">
                    <span> </span>
                    <span>1,000</span>
                </button>
                <button class="flex items-center space-x-1 hover:text-green-600">
                    <span> </span>
                    <span>1,000</span>
                </button>
            </div>
            <button class="flex items-center space-x-1 hover:text-gray-800">
                <span> </span>
                <span>Share</span>
            </button>
        </div>
    </div>


    </body>
    </html>


</x-layout>
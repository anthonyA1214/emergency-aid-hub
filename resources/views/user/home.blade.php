<x-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Home </title>
         @vite('resources/css/app.css')

    </head>

    <body>
    <!-- Weather-->
    <div class="bg-white shadow-md rounded-xl p-4 max-w-2xl mx-auto mt-6">
        <!-- Header -->
        <div class="flex justify-between items-center"> 
              <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                    <span class="text-black text-sm"> 
                        <x-icons.user-regular class="h-[1.5em] opacity-50" />
                    </span>
                </div>
                <div>
                    <p class="font-semibold text-gray-800"> Anthony Amiluddin </p>
                </div>
            </div>
        </div>

        <!-- Post Content -->
        <!-- weather is set to image  -->
        <div class="mt-3">
            <p class="text-gray-800 font-medium">
            </p>
            <div class="mt-3">
                <img src="https://t4.ftcdn.net/jpg/00/61/23/37/360_F_61233762_wdIqYUhZmHnWb2Dpjot2fncib3TulEAX.jpg" 
                    alt="Flood in Manila" 
                    class="rounded-lg w-full object-cover">
            </div>
        </div>

    </div>


    <!-- User Posts  -->
    <div class="bg-white shadow-md rounded-xl p-4 max-w-2xl mx-auto mt-6">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                    <span class="text-black text-sm"> 
                        <x-icons.user-regular class="h-[1.5em] opacity-50" />
                    </span>
                </div>
                <div>
                    <p class="font-semibold text-gray-800">Sasuke Uzumaki</p>
                    <p class="text-xs text-gray-500">Aug 24, 25 : 5:00 PM</p>
                </div>
            </div>
         
               
            <button class="flex items-center space-x-1 text-sm text-gray-500 hover:text-red-700">
            <span> <x-icons.report-regular class="h-[1.5em]" />  </span>
            <span> Report </span>
            </button>
          
            
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

        <!-- Action Buttons -->
        <div class="flex justify-between items-center mt-4 text-gray-600 text-sm">
            <div class="flex space-x-6">
                <button class="flex items-center space-x-1  hover:text-red-600 rounded-lg p-1">
                    <span> 
                        <x-icons.arrow-up-regular class="h-[1.5em]" />
                    </span>
                    <span>1,000 </span>
                </button>
                <button class="flex items-center space-x-1 hover:text-red-600 rounded-lg p-1">
                    <span> 
                        <x-icons.arrow-down-regular class="h-[1.5em]" />
                    </span>
                    <span>1,000</span>
                </button>
                <button class="flex items-center space-x-1 hover:text-red-600">
                    <span> 
                        <x-icons.comment-regular class="h-[1.5em]" />
                    </span>
                    <span>1,000</span>
                </button>
            </div>
            <button class="flex items-center space-x-1 hover:text-red-600">
                <span> <x-icons.share-regular class="h-[1.5em]" /> </span>
                <span>Share</span>
            </button>
        </div>
    </div>


    </body>
    </html>


</x-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full h-20 p-5 bg-UIP-blue shadow flex items-center px-10">
        <div class="flex items-center gap-4">
            <div class="w-10 h-10 bg-black/10 rounded-full">
                <a target="_blank" href="https://www.uip.ph/">
                    <img src="./img/uip-icons/UIP_solidA.png">
                </a>
            </div>
            <div class="text-white lg:text-2xl text-xl font-medium font-poppins"><a target="_blank"
                    href="https://www.uip.ph/">UIP Inc.</a></div>
        </div>
    </div>
    {{-- body part --}}
    <div class="mb-5">
        {{-- uip picture --}}
        <div class="mt-14 mx-6 h-32 w-auto md:mt-5 md:mx-32 md:h-52 bg-darkblue flex justify-center rounded-xl">
            <h1 class="text-white content-center">PICTURE</h1>
        </div>
        {{-- guide part --}}
        <div class="w-auto mx-6 md:mx-32 mt-7 md:mt-5 h-auto p-4 bg-darkblue flex flex-col rounded-xl">
            {{-- guides texts --}}
            <div class="bg-white p-4 w-full h-auto flex flex-col rounded-xl">
                <div class="w-full">
                    <h1 class="font-bold text-lg md:text-2xl mb-2">Office Hours:</h1>
                    <p class="text-red-500 text-sm md:text-base">8:00 am - 5:00 pm (Monday - Friday)</p>
                    <h5 class="text-sm md:text-base">*Note: Document request is open only during office hours</h5>
                </div>
                <div class="w-full h-0 md:h-1 mt-3 mb-3 bg-slate-500"></div>
                <div>
                    <h1 class="font-bold text-lg md:text-2xl mb-2">Reminders:</h1>
                    <p class="text-sm md:text-base">Please complete this form if you are in the offboarding process. This form is what we've given so that the emails don't miss your assessment forms. Your cooperation is appreciated!</p>
                </div>
                <div class="w-full h-0 md:h-1 mt-3 mb-3 bg-slate-500"></div>
                <div>
                    <h1 class="font-bold text-lg md:text-2xl mb-2">Contact:</h1>
                    <p class="text-sm md:text-base">Deanver M. Lucena - 09317736925</p>
                </div>
            </div>
            {{-- button --}}
            <div class="mt-4 flex justify-end">
                <a href="/Page2">
                    <button class="bg-borange text-white text-sm md:text-lg py-2 px-8 rounded-lg">Next</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
<x-layout>
    {{-- body page2 --}}
    <div class="mt-4 flex flex-col">
        {{-- forms section --}}
        {{-- personal section --}}
        <div class="bg-gray-400 h-auto w-auto mx-24 mb-4 py-5 flex flex-col rounded-lg">
            <div class="mx-14">
                <h1 class="font-bold text-3xl mt-3 mb-4">Personal Information:</h1>
                {{-- personal form --}}
                <div class="bg-white w-auto h-auto px-7 py-4 rounded-lg">
                    <form class="flex">
                        <div class="grid grid-cols-2 gap-x-20">
                            <div class="w-96 mb-3">
                            <p class="mb-3">Email</p>
                            <input type="email" placeholder="Email" class="w-full h-8 ring-2 ring-slate-300 rounded-md">
                            </div>
                            <div class="w-96 mb-3">
                            <p class="mb-3">Required Hours</p>
                            <input type="number" placeholder="Required Hours" class="w-full h-8 ring-2 ring-slate-300 rounded-md">
                            </div>
                            <div class="w-96 mb-3">
                            <p class="mb-3">Full Name</p>
                            <input type="text" placeholder="Name (Last, First, Middle Initial)" class="w-full h-8 ring-2 ring-slate-300 rounded-md">
                            </div>
                            <div class="w-96 mb-3">
                            <p class="mb-3">Completed Hours</p>
                            <input type="number" placeholder="Completed Hours" class="w-full h-8 ring-2 ring-slate-300 rounded-md">
                            </div>
                            <div class="w-96 mb-3">
                            <p class="mb-3">Application ID</p>
                            <input type="number" placeholder="Application ID" class="w-full h-8 ring-2 ring-slate-300 rounded-md">
                            </div>
                            <div class="w-96 mb-3">
                            <p class="mb-3">Google Drive Link</p>
                            <input type="text" placeholder="Google Drive Link" class="w-full h-8 ring-2 ring-slate-300 rounded-md">
                            </div>
                            <div class="w-96 mb-3">
                            <p class="mb-3">Department</p>
                            <input type="text" placeholder="Department" class="w-full h-8 ring-2 ring-slate-300 rounded-md">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- offboarding section --}}
        <div class="bg-gray-400 h-auto w-auto mx-24 mb-4 py-5 flex flex-col rounded-lg">
            <div class="mx-14">
                <h1 class="font-bold text-3xl mt-3 mb-4">Offboarding Requirements:</h1>
                <div class="bg-white w-auto h-auto px-7 py-4 rounded-lg">
                    <ul class="">
                    <h2 class="font-medium text-base">Requirements to be added to Google Drive:</h2>
                    {{-- daily journal --}}
                    <p class="text-xs ">Update your Google Drive on your <span class="underline"><a href="https://melhamconstruction.ph/uip/attendance/index.html">Attendance Tracker</a></span> and make sure that it is not restricted, auto denied for restricted Google Drive. Your Drive must contain the following folders:</p>
                    <h5>1. Daily Journals folder</h5>
                    <p>Daily Journal - All your daily journals must be in this folder.
                </div>
                <div class="bg-white w-auto h-auto px-7 py-4 mt-4 rounded-lg">
                </div>
            </div>
        </div>  
        {{-- button --}}
        <div>

        </div>
    </div>
</x-layout>
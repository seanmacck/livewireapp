

<div>
    <nav class="pt-3 pb-0 bg-purple-200">


        <div class="flex justify-between lg:invisible lg:h-2">
        <div class="flex gap-3 pl-2">
            <div x-data="{ open: false }">
            <button
            type="button"
            aria-label="toggle menu"
            @click="open = true">
            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-5 h-5 " viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
            </button>


        <ul
        x-show="open"
        @click.away="open = false">

        <div class="relative">
            <!-- Dropdown list -->
            <div class="absolute bg-white bg-gray-100 rounded-md shadow-xl w-44">
                <a href="#" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                    Account
                </a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                    Settings
                </a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                    Logout
                </a>
            </div>
        </div>

        </div>

        <div class="lg:pl-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>
        </div>

        <div class="flex justify-center lg:invisible sm:visible md:visible xl:invisible">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
          </svg>
        </div>


        <div class="flex gap-3 lg:invisible">
            <div class="gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
          </svg>
        </div>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
        </div>

        </div>

        </div>



        <div class="flex justify-between invisible lg:pb-4 lg:pl-4">
            <div class="flex lg:visible">
                <div class="flex lg:visible">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                  </svg>
                </div>
            </div>





                <div class="flex justify-center gap-12 pl-5">
        <div class="lg:visible">
        <a href="#" wire:click="$set('showWomenText', true)" class="font-normal rounded bg-grey-400 hover:underline">Women</a>
        </div>
           <div class="lg:visible">
        <a href="#" wire:click="$set('showMenText', true)" class="font-normal rounded bg-grey-400 hover:underline">Men</a>
        </div>
            <div class="lg:visible">
        <a href="#" wire:click="$set('showCompanyText', true)" class="font-normal rounded bg-grey-400 hover:underline">Company</a>
        </div>
        <div class="lg:visible">
        <a href="#" wire:click="$set('showComp', true)" class="font-normal rounded bg-grey-400 hover:underline">Get kanye Quote</a>
            </div>
        </div>







        <div class="flex invisible space-x-7">
        <div class="pr-2 lg:visible">
            <a href="#" class="font-normal rounded bg-grey-400 hover:underline">Search</a>
            </div>
            <div class="flex lg:visible">
            <a href="#" class="rounded ont-normal bg-grey-400 hover:underline">Help</a>
            </div>
                <div class="flex lg:visible lg:pr-5">
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                   </svg>
                </div>
            </div>
        </div>




        </nav>

        @if ($showComp)
        <livewire:kanye-page/>
        @endif
</div>





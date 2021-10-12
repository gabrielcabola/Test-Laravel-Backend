<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">

            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-6 w-auto" src="https://images.static-thomann.de/pics/images/logos/thomann-cyan-white.svg" alt="Backend">
                    <img class="hidden lg:block h-7 w-auto" src="https://images.static-thomann.de/pics/images/logos/thomann-cyan-white.svg" alt="Backend">
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        @include('components.menu')
                     </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <div class="flex space-x-4">
                @include('components.menu')
            </div>
        </div>
    </div>
</nav>

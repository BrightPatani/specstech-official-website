<nav class="absolute top-0 inset-x-0 z-50 flex max-w-[90%] mx-auto items-center justify-between px-8 py-6 lg:px-12">
    <div class="flex items-center">
        <img src="{{ asset('images/logo.png') }}" alt="Specstech Africa" class="h-40 w-auto lg:h-12">
    </div>

    <div class="hidden space-x-8 lg:flex">
        <a href="{{ route('home') }}" class="text-sm font-semibold tracking-wider text-[#FFFFFF] hover:text-blue-400 {{ request()->routeIs('home') ? 'bg-blue-500 px-4 py-1 rounded' : '' }}">
            HOME
        </a>
        <a href="{{ route('about') }}" class="text-sm font-semibold tracking-wider text-[#FFFFFF] hover:text-blue-400 {{ request()->routeIs('about') ? 'bg-blue-500 px-4 py-1 rounded' : '' }}">
            ABOUT
        </a>
        <a href="{{ route('services') }}" class="text-sm font-semibold tracking-wider text-[#FFFFFF] hover:text-blue-400 {{ request()->routeIs('services') ? 'bg-blue-500 px-4 py-1 rounded' : '' }}">
            SERVICES
        </a>
        <a href="{{ route('contact') }}" class="text-sm font-semibold tracking-wider text-[#FFFFFF] hover:text-blue-400 {{ request()->routeIs('contact') ? 'bg-blue-500 px-4 py-1 rounded' : '' }}">
            CONTACT US
        </a>
        <a href="{{ route('blog') }}" class="text-sm font-semibold tracking-wider text-[#FFFFFF] hover:text-blue-400 {{ request()->routeIs('blog') ? 'bg-blue-500 px-4 py-1 rounded' : '' }}">
            BLOG
        </a>
        <a href="{{ route('project') }}" class="text-sm font-semibold tracking-wider text-[#FFFFFF] hover:text-blue-400 {{ request()->routeIs('project') ? 'bg-blue-500 px-4 py-1 rounded' : '' }}">
            PROJECT
        </a>
        <a href="{{ route('feedback') }}" class="text-sm font-semibold tracking-wider text-[#FFFFFF] hover:text-blue-400 {{ request()->routeIs('feedback') ? 'bg-blue-500 px-4 py-1 rounded' : '' }}">
            FEEDBACK
        </a>
    </div>

    <button @click="isMenuOpen = true" class="block lg:hidden">
        <img src="{{ asset('images/menu.png') }}" class="h-10 w-10" alt="Open Menu">
    </button>
</nav>

<div x-show="isMenuOpen" 
    @click.outside="isMenuOpen = false"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="translate-x-full"
    class="fixed inset-y-0 right-0 z-[60] w-64 bg-[#FFFFFF] p-6 shadow-xl lg:hidden"
    style="display: none;">
    
    <div class="flex justify-center mb-8">
        <button @click="isMenuOpen = false">
            <img src="{{ asset('images/menu.png') }}" alt="Close" class="w-6 h-6">
        </button>
    </div>

    <div class="flex flex-col items-center space-y-4 w-full">
        <a href="{{ route('home') }}" @click="isMenuOpen = false"
           class="w-full text-center py-3 px-4 text-lg font-medium transition-colors rounded-lg
           {{ request()->routeIs('home') ? 'bg-[#0A81CB] text-white' : 'text-black hover:text-[#0A81CB] hover:bg-blue-50' }}">
            HOME
        </a>
        <a href="{{ route('about') }}" @click="isMenuOpen = false"
           class="w-full text-center py-3 px-4 text-lg font-medium transition-colors rounded-lg
           {{ request()->routeIs('about') ? 'bg-[#0A81CB] text-white' : 'text-black hover:text-[#0A81CB] hover:bg-blue-50' }}">
            ABOUT
        </a>
        <a href="{{ route('services') }}" @click="isMenuOpen = false"
           class="w-full text-center py-3 px-4 text-lg font-medium transition-colors rounded-lg
           {{ request()->routeIs('services') ? 'bg-[#0A81CB] text-white' : 'text-black hover:text-[#0A81CB] hover:bg-blue-50' }}">
            SERVICES
        </a>
        <a href="{{ route('contact') }}" @click="isMenuOpen = false"
           class="w-full text-center py-3 px-4 text-lg font-medium transition-colors rounded-lg
           {{ request()->routeIs('contact') ? 'bg-[#0A81CB] text-white' : 'text-black hover:text-[#0A81CB] hover:bg-blue-50' }}">
            CONTACT US
        </a>
        <a href="{{ route('blog') }}" @click="isMenuOpen = false"
           class="w-full text-center py-3 px-4 text-lg font-medium transition-colors rounded-lg
           {{ request()->routeIs('blog') ? 'bg-[#0A81CB] text-white' : 'text-black hover:text-[#0A81CB] hover:bg-blue-50' }}">
            BLOG
        </a>
        <a href="{{ route('project') }}" @click="isMenuOpen = false"
           class="w-full text-center py-3 px-4 text-lg font-medium transition-colors rounded-lg
           {{ request()->routeIs('project') ? 'bg-[#0A81CB] text-white' : 'text-black hover:text-[#0A81CB] hover:bg-blue-50' }}">
            PROJECT
        </a>
        <a href="{{ route('feedback') }}" @click="isMenuOpen = false"
           class="w-full text-center py-3 px-4 text-lg font-medium transition-colors rounded-lg
           {{ request()->routeIs('feedback') ? 'bg-[#0A81CB] text-white' : 'text-black hover:text-[#0A81CB] hover:bg-blue-50' }}">
            FEEDBACK
        </a>
    </div>
</div>

{{-- 
        <nav class="absolute top-0 inset-x-0 z-50 flex max-w-[90%] mx-auto items-center justify-between px-8 py-6 lg:px-12">
            <div class="flex items-center">
                <img src="images/logo.png" alt="Specstech Africa" class="h-40 w-auto lg:h-12">
            </div>

            <div class="hidden space-x-8 lg:flex">
                @foreach(['HOME', 'ABOUT', 'SERVICES', 'CONTACT US', 'BLOG', 'PROJECT', 'FEEDBACK'] as $item)
                    <a href="#" class="text-sm font-semibold tracking-wider text-[#FFFFFF] hover:text-blue-400 {{ $item === 'HOME' ? 'bg-blue-500 px-4 py-1 rounded' : '' }}">
                        {{ $item }}
                    </a>
                @endforeach
            </div>

            <button @click="isMenuOpen = true" class="block lg:hidden">
                <img src="images/menu.png" class="h-10 w-10" alt="">
            </button>
        </nav> --}}
        {{-- sidebar --}}
{{--         
<div x-show="isMenuOpen" 
    @click.outside="isMenuOpen = false"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="translate-x-full"
    class="fixed inset-y-0 right-0 z-[60] w-64 bg-[#FFFFFF] p-6 shadow-xl lg:hidden">
    
    <div class="flex justify-center mb-8">
        <button @click="isMenuOpen = false">
            <img src="images/menu.png" alt="Close" class="w-6 h-6">
        </button>
    </div>

    <div class="flex flex-col items-center space-y-4 w-full">
        @foreach(['HOME', 'ABOUT', 'SERVICES', 'CONTACT US', 'BLOG', 'PROJECT', 'FEEDBACK'] as $item)
            @php
                
                $isActive = ($item === 'HOME'); 
            @endphp
            
            <a href="#" 
               class="w-full text-center py-3 px-4 text-lg font-medium transition-colors rounded-lg
               {{ $isActive 
                    ? 'bg-[#0A81CB] text-white' 
                    : 'text-black hover:text-[#0A81CB] hover:bg-blue-50' }}">
                {{ $item }}
            </a>
        @endforeach
    </div>
</div> --}}

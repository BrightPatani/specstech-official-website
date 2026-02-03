@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <div class="relative h-screen w-full flex items-center justify-center bg-black">
        {{-- Background Image (Optional, based on your previous hero styles) --}}
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black/50  z-10"></div>
            <img src="{{ asset('images/project/projecthero.png') }}" class="h-full w-full object-cover" alt="About Us Background">
        </div>

        {{-- Centered Text Content --}}
        <div class="relative z-20 space-y-6 text-[#FFFFFF] text-center animate-fade-in-up px-6">
            <h1 class="text-[2.25rem] md:text-[3.5rem] lg:text-[5.5rem] font-bold leading-tight max-w-[60rem] mx-auto">
                Project
            </h1>
        </div>
    </div>

    {{-- project --}}
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-7xl">
            
            <div class="text-center mb-16">
                <h2 class="text-[#0A81CB] text-4xl md:text-5xl font-bold mb-4">Projects</h2>
                <p class="text-gray-700 text-lg font-medium max-w-3xl mx-auto">
                    We Provide Customer Driven and Efficient ICT Management and Infrastructure Service.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
                @php
                    $projects = [
                        ['img' => 'broadband.png', 'title' => 'Broadband Internet'],
                        ['img' => 'solution.png', 'title' => 'Team Spectech Africa Solutions and ICT'],
                        ['img' => 'network.png', 'title' => 'Network Integration and Support'],
                        ['img' => 'broadband.png', 'title' => 'Broadband Internet'],
                        ['img' => 'solution.png', 'title' => 'Team Spectech Africa Solutions and ICT'],
                        ['img' => 'network.png', 'title' => 'Network Integration and Support'],
                        ['img' => 'broadband.png', 'title' => 'Broadband Internet'],
                        ['img' => 'solution.png', 'title' => 'Team Spectech Africa Solutions and ICT'],
                        ['img' => 'network.png', 'title' => 'Network Integration and Support'],
                    ];
                @endphp

                @foreach($projects as $project)
                <div class="bg-[#F5F9FB] rounded-2xl overflow-hidden shadow-md border border-gray-100 flex flex-col group transition-all duration-300 hover:shadow-lg">
                    
                    <div class="p-4">
                        <div class="h-64 md:h-72 overflow-hidden rounded-xl">
                            <img src="{{ asset('images/project/' . $project['img']) }}" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                                alt="{{ $project['title'] }}">
                        </div>
                    </div>

                    <div class="px-6 pb-8 pt-2">
                        <a href="#" class="flex items-center justify-between group/link">
                            <h3 class="text-[#1e293b] text-lg font-bold leading-tight max-w-[85%]">
                                {{ $project['title'] }}
                            </h3>
                            <div class="text-gray-400 group-hover/link:text-[#0A81CB] transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- newsletter  --}}
    <x-newsletter />

    {{-- footer  --}}
    <x-footer />

@endsection
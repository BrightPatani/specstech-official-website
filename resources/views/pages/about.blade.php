@extends('layouts.app')

@section('title', 'About Us')

@section('body-class', 'home-page')

@push('extra-styles')
    @vite(['resources/css/index.css'])
@endpush


@section('content')
    

    <div class="relative h-[70vh] w-full flex items-center justify-center bg-black">
        {{-- Background Image (Optional, based on your previous hero styles) --}}
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <img src="{{ asset('images/about/abouthero.png') }}" class="h-full w-full object-cover" alt="About Us Background">
        </div>

        {{-- Centered Text Content --}}
        <div class="relative z-20 space-y-6 text-[#FFFFFF] text-center animate-fade-in-up px-6">
            <h1 class="text-[2.25rem] md:text-[3.5rem] lg:text-[5.5rem] font-bold leading-tight max-w-[60rem] mx-auto">
                About Us
            </h1>
        </div>
    </div>

    {{-- who we are  --}}
    <section class="who-we-are-section py-16 lg:py-24 bg-[#FFFFFF] overflow-hidden">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="relative flex flex-col lg:flex-row items-center">
                
                <div class="hidden lg:block w-full lg:w-1/2 z-20 lg:mb-0">
                    <div class="about-image-wrapper rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.15)] transition-transform duration-500 hover:scale-[1.02]">
                        <img src="{{ asset('images/about/network.png') }}" 
                            alt="ICT Management and Solutions" 
                            class="w-full h-[400px] lg:h-[550px] object-cover">
                    </div>
                </div>

                <div class="about-text-card w-full lg:w-[60%] lg:ml-[-5%] bg-[#F8FAFC] rounded-2xl p-8 lg:p-20 lg:pl-32 shadow-[0_15px_40px_rgba(0,0,0,0.04)] border border-gray-50 z-10">
                    <div class="max-w-xl mx-auto lg:mx-0">
                        <h2 class="about-content text-[#0A81CB] text-3xl lg:text-5xl font-bold mb-8 leading-tight text-center lg:text-left">
                            Who We Are
                        </h2>
                        
                        <div class="space-y-6">
                            <p class="about-content text-gray-600 text-lg leading-relaxed text-left">
                                <span class="font-bold text-[#334155]">SPECSTECH AFRICA</span> is an ICT management, Solutions and Knowledge transfer Company structured to provide customer-driven and efficient ICT management and infrastructure services by deploying technology-driven solutions to solving strategic problems and also to be a leading capacity development company to enhance manpower productivity and efficiency.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- our mission and our vision --}}
    <section class="mission-section py-16 bg-[#FFFFFF]">
        <div class="container mx-auto px-6 lg:px-8 max-w-6xl">
            <div class="space-y-8 value-card">
                
                <div class="bg-[#FFFFFF] rounded-2xl border border-[#0A81CB]/50 p-8 lg:p-12 shadow-[0_10px_30px_rgba(0,0,0,0.02)] transition-all hover:shadow-[0_15px_40px_rgba(10,129,203,0.05)]">
                    <h2 class="text-[#0A81CB] font-reem text-3xl lg:text-5xl font-bold mb-6">
                        Our Vision
                    </h2>
                    <p class="text-gray-700 text-lg lg:text-xl leading-relaxed">
                        To become Africa’s leading ICT Solution and Capacity development Company.
                    </p>
                </div>

                <div class=" bg-[#FFFFFF] rounded-2xl border border-blue-100 p-8 lg:p-12 shadow-[0_10px_30px_rgba(0,0,0,0.02)] transition-all hover:shadow-[0_15px_40px_rgba(10,129,203,0.05)]">
                    <h2 class="text-[#0A81CB] text-3xl lg:text-5xl font-bold mb-6">
                        Our Mission
                    </h2>
                    <p class="text-gray-600 text-lg lg:text-xl leading-relaxed mb-10">
                        To provide customer-driven and efficient ICT management and infrastructure services by deploying technology-driven solutions to solving strategic problems and also to be a leading capacity development company to enhance manpower productivity and efficiency.
                    </p>
                </div>
                <div>
                    <div class="pt-2">
                        <a href="#" class="inline-flex items-center gap-2 bg-linear-to-r from-[#0A81CB] via-[#37A2E5] to-[#0A8ACB] hover:bg-linear-to-r hover:from-[#37A2E5] hover:via-[#0A81CB] hover:to-[#37A2E5] text-white px-8 py-3 rounded-lg font-semibold transition-all shadow-lg shadow-blue-100 group">
                            Become a Client
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- our team --}}
    <section class="py-20 bg-[#FFFFFF]">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-[#0A81CB] text-4xl lg:text-5xl font-bold mb-4">Our Team</h2>
                <p class="text-[#454452] text-lg lg:text-xl font-medium">Meet Our Creative Expert</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 lg:gap-12 max-w-7xl mx-auto">
                @php
                    $team = [
                        ['name' => 'Celestine Obiosa Uzor', 'role' => 'Ict Business Solution Consultant', 'img' => 'celestine.png'],
                        ['name' => 'Emmanuel Onu', 'role' => 'Head of Software Development', 'img' => 'emmanuel.png'],
                        ['name' => 'Olugbolohan Olusanya', 'role' => 'Solution/Database Consultant', 'img' => 'olusanya.png'],
                        ['name' => 'Agharinma Ehiedu', 'role' => 'ICT Security Consultant', 'img' => 'agharinma.png'],
                        ['name' => 'Ifedi Helen Nneka', 'role' => 'Head of Software Development', 'img' => 'helen.png'],
                        ['name' => 'Ibiaye Samdwell', 'role' => 'Network/Security Infrastructure Team Lead', 'img' => 'ibiaye.png'],
                    ];
                @endphp

                @foreach($team as $member)
                <div class="relative group h-[450px] lg:h-[500px] w-full rounded-2xl overflow-hidden shadow-xl transition-all duration-500 hover:shadow-2xl">
                    <img src="{{ asset('images/team/' . $member['img']) }}" 
                        alt="{{ $member['name'] }}" 
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                    <div class="absolute bottom-6 left-6 right-6 bg-[#FFFFFF] rounded-xl p-5 shadow-lg flex justify-between items-center z-20 transition-transform duration-500 group-hover:-translate-y-2">
                        <div>
                            <h3 class="text-[#454452]/70 font-bold text-lg leading-tight">{{ $member['name'] }}</h3>
                            <p class="text-[#454452] text-sm mt-1">{{ $member['role'] }}</p>
                        </div>

                        <div class="flex flex-col gap-2 pl-4 ml-4">
                            <a href="#" class="opacity-70 hover:opacity-100 transition-opacity">
                                <img src="{{ asset('images/socials/linkedin.png') }}" alt="LinkedIn" class="w-4 h-4 object-contain">
                            </a>
                            <a href="#" class="opacity-70 hover:opacity-100 transition-opacity">
                                <img src="{{ asset('images/socials/x.png') }}" alt="X" class="w-3 h-3 object-contain">
                            </a>
                            <a href="#" class="opacity-70 hover:opacity-100 transition-opacity">
                                <img src="{{ asset('images/socials/instagram.png') }}" alt="Instagram" class="w-4 h-4 object-contain">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- newsletter --}}
    <x-newsletter />

    {{-- footer  --}}
    <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            gsap.registerPlugin(ScrollTrigger);

                const whoWeAreTl = gsap.timeline({
                    scrollTrigger: {
                        trigger: ".who-we-are-section",
                        start: "top 75%", // Triggers when the section is 75% from the top
                        toggleActions: "play none none none"
                    }
                });

                whoWeAreTl
                    // 1. The Image Box: Slides in and slightly scales up
                    .from(".about-image-wrapper", {
                        x: -100,
                        opacity: 0,
                        duration: 1.2,
                        ease: "power4.out"
                    })
                    // 2. The Text Card: Slides in from the opposite side
                    .from(".about-text-card", {
                        x: 100,
                        opacity: 0,
                        duration: 1.2,
                        ease: "power4.out"
                    }, "-=1") // Overlaps with the image animation
                    // 3. The Content Inside: Subtle fade and lift
                    .from(".about-content > *", {
                        y: 20,
                        opacity: 0,
                        stagger: 0.2,
                        duration: 0.8,
                        ease: "power3.out"
                    }, "-=0.6");

                    // Pro Tip: Subtle Parallax on Scroll
                    gsap.to(".about-image-wrapper", {
                        scrollTrigger: {
                            trigger: ".who-we-are-section",
                            start: "top bottom",
                            end: "bottom top",
                            scrub: true
                        },
                        y: -50, // Image moves slower than the scroll
                        ease: "none"
                    });


                    // Target the container for the entire section
                    const missionVisionTl = gsap.timeline({
                        scrollTrigger: {
                            trigger: ".mission-section",
                            start: "top 80%", // Triggers when the top of the section hits 80% of viewport height
                            toggleActions: "play none none none"
                        }
                    });

                    missionVisionTl
                        // 1. Animate the Vision and Mission cards sequentially
                        .from(".value-card", {
                            y: 50,
                            opacity: 0,
                            duration: 1,
                            stagger: 0.3, // 0.3s delay between the first and second card
                            ease: "power3.out"
                        })
                        // 2. Animate the text inside the cards slightly after they appear
                        .from(".value-card h2, .value-card p", {
                            opacity: 0,
                            x: -20,
                            duration: 0.6,
                            stagger: 0.1,
                            ease: "power2.out"
                        }, "-=0.5") // Starts halfway through the card animation
                });
    </script>
@endsection


@extends('layouts.app')

@section('title', 'Specstech - Home')
@section('body-class', 'home-page')

@push('extra-styles')
    @vite(['resources/css/index.css'])
@endpush

@section('content')
    @php
        $page = 'home';

        // Static services shown on the homepage
        $services = [
            [
                'title' => 'ICT Management',
                'icon' => 'ictmanagement.png',
                'desc' => 'Our ICT Management Services is Focused on Providing Customer Driven and Efficient ICT Management.',
                'link' => 'ictmgmt'
            ],
            [
                'title' => 'Solutions',
                'icon' => 'solutions.png',
                'desc' => 'Today Businesses are Driven by ICT Solutions. Specstech Africa is one of Nigeria’s Solution',
                'link' => 'solutions'
            ],
            [
                'title' => 'Knowledge Transfer',
                'icon' => 'knowledge.png',
                'desc' => 'Today Businesses are Driven by ICT Solutions. Specstech Africa is one of Nigeria’s Solution.',
                'link' => 'knowledge'
            ],
        ];
    @endphp

    {{-- Main Wrapper --}}
    <section x-data="{ 
            isMenuOpen: false,
            activeSlide: 0, 
            timer: null,
            slides: [
                {
                    image: '/images/hero1.png',
                    title: 'Specstech Africa Solution & ICT Management',
                    description: 'We Provide Customer Driven and Efficient ICT Management and Infrastructure Service by Deploying Technology Driven Solutions to Solving Strategic Problems.'
                },
                {
                    image: '/images/hero2.png',
                    title: 'Business Application Solution',
                    description: 'We Take Responsibility for Monitoring and Managing the Day to Day Operations of its Customer.'
                },
                {
                    image: '/images/hero3.png',
                    title: 'Knowledge Transfer & IT Management',
                    description: 'Knowledge Transfer is Our Training Outfits where We Render Different Categories of Training.'
                }
            ],
            next() { 
                this.activeSlide = this.activeSlide === this.slides.length - 1 ? 0 : this.activeSlide + 1;
                this.resetTimer(); 
            },
            prev() { 
                this.activeSlide = this.activeSlide === 0 ? this.slides.length - 1 : this.activeSlide - 1;
                this.resetTimer();
            },
            resetTimer() {
                clearInterval(this.timer);
                this.startTimer();
            },
            startTimer() {
                this.timer = setInterval(() => { this.next(); }, 5000);
            }
        }" 
        x-init="startTimer()"
        class="relative w-full overflow-x-hidden">

        {{--Navbar Component --}}
        <x-navbar />

        {{-- 2. Hero Slider Section --}}
        <div class="relative h-screen w-full overflow-hidden bg-[#000000]">
            {{-- Background Images --}}
            <div class="relative h-full w-full">
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="activeSlide === index" 
                        x-transition:enter="transition opacity duration-1000"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        class="absolute inset-0">
                        <div class="absolute inset-0 z-10 bg-linear-to-r from-[#000000]/80 via-[#000000]/40 to-transparent"></div>
                        <img :src="slide.image" class="h-full w-full object-cover object-center" :alt="slide.title">
                    </div>
                </template>
            </div>

            {{-- Text Content --}}
            <div class="absolute inset-0 z-20 flex flex-col max-w-[90%] mx-auto items-start justify-center px-[1.5rem] lg:px-[6rem]">
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="activeSlide === index"
                        x-transition:enter="transition all duration-1000"
                        x-transition:enter-start="opacity-0 translate-y-[1rem]"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        class="space-y-6 text-[#FFFFFF]">
                        <h1 class="text-xl md:text-2xl lg:text-3xl font-bold leading-tight max-w-[50rem]" x-text="slide.title"></h1>
                        <p class="text-sm md:text-base opacity-90 max-w-[40rem]" x-text="slide.description"></p>
                        <a href="{{ route('services') }}" class="rounded-lg bg-linear-to-r from-[#0A81CB] via-[#37A2E5] to-[#0A8ACB] hover:bg-linear-to-r hover:from-[#37A2E5] hover:via-[#0A81CB] hover:to-[#37A2E5] px-8 py-4 font-semibold hover:scale-105 transition-transform inline-block">
                            Learn More
                        </a>
                    </div>
                </template>
            </div>

            {{-- Slider Controls --}}
            <button @click="prev()" class="hidden lg:block absolute left-8 top-1/2 z-30 -translate-y-1/2 text-[#FFFFFF]/50 hover:text-[#FFFFFF]">
                <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button @click="next()" class="hidden lg:block absolute right-8 top-1/2 z-30 -translate-y-1/2 text-[#FFFFFF]/50 hover:text-[#FFFFFF]">
                <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>

            {{-- Pagination Dots --}}
            <div class="absolute bottom-10 left-1/2 z-30 flex -translate-x-1/2 space-x-3">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="activeSlide = index" 
                        :class="activeSlide === index ? 'bg-[#0A81CB] w-8' : 'bg-[#FFFFFF]/50 w-3'"
                        class="h-3 rounded-full transition-all duration-300"></button>
                </template>
            </div>
        </div>

        <x-partner />

    {{-- what we do --}}
    <section class="bg-[#FFFFFF] py-[1rem] lg:py-[1rem]">
        <div class="mx-auto max-w-[80%] lg:max-w-[70%]">
            {{-- Main Heading --}}
            <div class="content-wrapper text-center">
                <h2 class="main-heading text-xl lg:text-2xl font-bold text-[#0A81CB] leading-tight">What We do</h2>
                <p class="main-description mx-auto mt-4 max-w-[50rem] text-md lg:text-base leading-relaxed text-gray-600">
                    We Provide Customer Driven and Efficient ICT Management and Infrastructure Service.
                </p>
            </div>

            {{-- Services Grid --}}
            <div class="services-grid mt-[4rem] lg:max-w-[1200px] mx-auto grid grid-cols-1 gap-[2rem] md:grid-cols-2 lg:grid-cols-3">
                @if(isset($services) && count($services) > 0)
                    @foreach($services as $service)
                    <div class="service-card flex flex-col items-center rounded-[1rem] bg-[#FFFFFF] p-[2.5rem] text-center shadow-[0_10px_50px_rgba(0,0,0,0.05)] transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_20px_60px_rgba(0,0,0,0.1)]">
                        
                        {{-- Icon --}}
                        <div class="icon-wrapper mb-[1.5rem] flex h-[5rem] w-[5rem] items-center justify-center">
                            <img src="{{ asset('images/services/' . $service['icon']) }}" 
                                alt="{{ $service['title'] }}" 
                                class="service-icon h-full w-full object-contain">
                        </div>

                        {{-- Title --}}
                        <h3 class="service-title mb-2 text-base font-bold text-gray-800">{{ $service['title'] }}</h3>
                        
                        {{-- Description --}}
                        <p class="service-description mb-4 text-sm leading-6 text-gray-600">
                            {{ $service['desc'] }}
                        </p>

                        {{-- Learn More Button --}}
                        <a href="{{ route($service['link']) }}" 
                        class="learn-more-btn mt-auto inline-flex items-center gap-[0.5rem] rounded-[0.5rem] bg-linear-to-r from-[#0A81CB] via-[#37A2E5] to-[#0A8ACB] hover:bg-linear-to-r hover:from-[#37A2E5] hover:via-[#0A81CB] hover:to-[#37A2E5] px-[1.5rem] py-[0.75rem] text-[0.875rem] font-semibold text-[#FFFFFF] transition-all duration-300 hover:bg-[#086ba8] hover:gap-[0.75rem]">
                            Learn More
                            <svg class="arrow-icon h-[1rem] w-[1rem] transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    @endforeach
                @else
                    <div class="col-span-full text-center text-gray-500 py-8">
                        <p>No services available at the moment.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    {{-- critical success value --}}
    <section class="relative bg-linear-to-t from-[#F5F9FB] to-[#FFFFFF] py-16 px-6 lg:py-24 overflow-hidden">
        <div class="absolute inset-0  pointer-events-none justify-end flex z-10">
            <img src="images/globe.png" class="w-80 h-auto object-cover" alt="">
        </div>

        <div class="max-w-[70%] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">
            
            <div>
            <h2 class="text-xl lg:text-2xl font-bold text-[#0A81CB] mb-6">
                Our Critical Success Value
            </h2>
            <p class="text-gray-600 text-sm mb-8 max-w-md">
                We Provide Customer Driven and Efficient ICT Management and Infrastructure Service.
            </p>
            <a href="{{ route('services') }}" class="inline-flex items-center px-8 py-3 bg-linear-to-r from-[#0A81CB] via-[#37A2E5] to-[#0A8ACB] hover:bg-linear-to-r hover:from-[#37A2E5] hover:via-[#0A81CB] hover:to-[#37A2E5] text-[#FFFFFF] font-semibold rounded-lg transition shadow-lg">
                Learn More
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
            
                <div class="md:col-start-1 p-[2px] rounded-xl bg-linear-to-r from-[#0A81CB] to-[#B4E2FF] transition-transform duration-500 hover:-translate-y-2">
                    <div class="bg-[#FFFFFF] p-8 rounded-[10px] relative min-h-[220px] flex flex-col justify-center">
                        <div class="absolute top-4 left-4">
                            <img src="images/clip1.png" alt="">
                        </div>
                        <p class="text-center font-medium text-[#888888] text-lg">Access The Right Market.</p>
                        <div class="absolute bottom-4 right-4">
                            <img src="images/checkmark.png" alt="">
                        </div>
                    </div>
                </div>

            <div class="md:row-start-0 bg-linear-to-r from-[#0A81CB] to-[#B4E2FF] p-[1px] rounded-xl transition-transform duration-500 hover:-translate-y-2 ">
                <div class="bg-[#FFFFFF] p-8 rounded-xl border border-blue-100 shadow-sm relative min-h-[220px] flex flex-col justify-center">
                <div class="absolute top-4 left-4 text-blue-500-2">
                    <img src="images/clip2.png" alt="">
                </div>
                <p class="text-center font-small text-[#535353] leading-snug">
                    Passionately Focus on Bringing Solutions to Our Client's Needs using the Best Technology, Infrastructure and Human Resources.
                </p>
                <div class="absolute bottom-4 right-4 rounded-full p-1">
                    <img src="images/checkmark.png" alt="">
                </div>
                </div>
            </div>

            <div class="md:row-start-1 md:translate-x-[150px] md:mb-4 bg-linear-to-r from-[#0A81CB] to-[#B4E2FF] p-[1px] rounded-xl transition-transform duration-500 hover:-translate-y-2 ">
                <div class="bg-[#FFFFFF] p-8 rounded-xl border border-blue-100 shadow-sm relative min-h-[220px] flex flex-col justify-center">
                <div class="absolute top-4 left-4 text-blue-500">
                    <img src="images/clip3.png" alt="">
                </div>
                <p class="text-center font-medium text-[#535353] leading-snug">
                    Partner with Leading Industry Players and Professionals
                </p>
                <div class="absolute bottom-4 right-4 rounded-full p-1">
                    <img src="images/checkmark.png" alt="">
                </div>
                </div>
            </div>

            </div>
        </div>
    </section>


    {{-- core values --}}
    <section class="py-20 bg-[#FFFFFF]" id="core-values">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-xl lg:text-2xl font-bold text-[#0A81CB] mb-4">Our Core Values</h2>
            <p class="text-gray-600 mb-16 max-w-2xl mx-auto text-sm">
                We Provide Customer Driven and Efficient ICT
            </p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                @php
                    $coreValues = [
                        ['name' => 'Integrity'],
                        ['name' => 'Professionalism'],
                        ['name' => 'Accountability'],
                        ['name' => 'Exellence'],
                    ];
                @endphp

                @foreach($coreValues as $value)
                <div class="flex flex-col items-center value-item">
                    <div class="relative w-32 h-32 lg:w-40 lg:h-40 flex items-center justify-center mb-6">
                        <svg class="absolute w-full h-full transform -rotate-90">
                            <circle cx="50%" cy="50%" r="45%" stroke="#dcfce7" stroke-width="8" fill="transparent" />
                            <circle class="progress-ring" cx="50%" cy="50%" r="45%" stroke="#22c55e" stroke-width="8" 
                                    fill="transparent" stroke-dasharray="300" stroke-dashoffset="300" stroke-linecap="round" />
                        </svg>
                        <span class="text-lg lg:text-xl font-bold text-gray-800">
                            <span class="count" data-target="100">0</span>%
                        </span>
                    </div>
                    <h3 class="text-xl font-semibold text-[#888888]">{{ $value['name'] }}</h3>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- consult our experts --}}
    <section class="bg-[#FFFFFF] py-8 lg:py-24">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto bg-[#F5F9FB] rounded-xl shadow-lg overflow-hidden">
                <div class="flex flex-col lg:flex-row items-center">
                    
                    <div class="w-full lg:w-1/2 m-6 rounded-full h-[300px] lg:h-[500px]">
                        <img 
                            src="{{ asset('images/chart.png') }}" 
                            alt="ICT Solutions Expert" 
                            class="w-full h-full object-cover"
                        >
                    </div>

                    <div class="w-full lg:w-1/2 p-8 lg:p-16">
                        <div class="space-y-4">
                            <h4 class="text-[#0A81CB] text-sm lg:text-base font-bold tracking-tight">
                                Consult Our Expertise
                            </h4>
                            <h2 class="text-[#454452] text-lg lg:text-xl font-extrabold leading-tight">
                                We are Solution Driven
                            </h2>
                            
                            <div class="pt-4">
                                <p class="text-gray-600 text-xs lg:text-sm leading-relaxed">
                                    Today Businesses are Driven by ICT Solutions, Spectech Africa is one of Nigeria's solution provider with the Primary Goal of Providing Integrated ICT Solutions that Drive Business Operations with the Implementation.
                                </p>
                            </div>

                            <div class="pt-8">
                                <a href="{{ route('services') }}" class="inline-flex items-center gap-2 bg-linear-to-r from-[#0A81CB] via-[#37A2E5] to-[#0A8ACB] hover:bg-linear-to-r hover:from-[#37A2E5] hover:via-[#0A81CB] hover:to-[#37A2E5] text-[#FFFFFF] px-8 py-3.5 rounded-lg font-bold transition-all duration-300  shadow-lg shadow-blue-200">
                                    Learn More
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    {{-- projects --}}

    <section class="bg-[#FFFFFF] py-8 lg:py-24" id="projects-section">
        <div class="container mx-auto px-6 lg:px-8">
            
            <div class="text-center mb-8 project-header">
                <h2 class="text-[#0A81CB] text-lg lg:text-xl font-bold leading-tight">
                    Projects
                </h2>
                <p class="text-[#888888] text-sm mt-4 max-w-2xl mx-auto">
                    We Provide Customer Driven and Efficient ICT Management and Infrastructure Service.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @php
                    $projects = [
                        ['title' => 'Broadband Internet', 'img' => 'broadband.png'],
                        ['title' => 'Team Specstech Africa Solutions and ICT', 'img' => 'solution.png'],
                        ['title' => 'Network Integration and Support', 'img' => 'network.png'],
                    ];
                @endphp

                @foreach($projects as $project)
                <div class="project-card group bg-[#F5F9FB] rounded-2xl w-full h-auto mx-auto p-4 shadow-md transition-all duration-500 hover:shadow-[0_20px_60px_rgba(0,0,0,0.1)] hover:-translate-y-2 border border-gray-50">
                    <div class="overflow-hidden rounded-xl h-[350px]">
                        <img 
                            src="{{ asset('images/project/' . $project['img']) }}" 
                            alt="{{ $project['title'] }}" 
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        >
                    </div>

                    <div class="py-6 px-2 flex items-center justify-between">
                        <h3 class="text-gray-800 text-xs font-bold leading-snug max-w-[85%]">
                            {{ $project['title'] }}
                        </h3>
                        <div class="text-gray-400 group-hover:text-[#0A81CB] transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-right project-footer">
                <a href="#" class="inline-flex items-center text-[#0A81CB] m-4 font-bold text-lg hover:gap-2 transition-all">
                    See more
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <x-recent-posts :blogs="$blogs" />

    {{-- partners --}}
    <x-partner />

    {{-- newsletter --}}
    <x-newsletter />

    {{-- footer --}}
    <x-footer />
</section>



<script>
    document.addEventListener('DOMContentLoaded', () => {
        // 1. Entrance Animation: Icons "pop" in when they scroll into view
        gsap.from(".service-icon", {
            scrollTrigger: {
                trigger: ".services-grid",
                start: "top 80%",
            },
            scale: 0,
            opacity: 0,
            duration: 1,
            ease: "back.out(1.7)",
            stagger: 0.2 
        });

        

        // 2. Continuous Hover Effect: Subtle floating movement
    
        const cards = document.querySelectorAll('.service-card');
        
        cards.forEach(card => {
            const icon = card.querySelector('.service-icon');
            
            card.addEventListener('mouseenter', () => {
                gsap.to(icon, {
                    y: -10, 
                    rotation: 5, 
                    duration: 0.4,
                    ease: "power2.out"
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(icon, {
                    y: 0,
                    rotation: 0,
                    duration: 0.4,
                    ease: "elastic.out(1, 0.3)"
                });
            });

            
        });
        // 3. Core Values Animation: Number count-up and SVG ring animation

            const items = document.querySelectorAll('.value-item');

            items.forEach((item) => {
                const counter = item.querySelector('.count');
                const ring = item.querySelector('.progress-ring');
                const target = parseInt(counter.getAttribute('data-target'));

                const tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: "#core-values",
                        start: "top 70%", 
                        toggleActions: "play none none none"
                    }
                });

                // 1. Animate the Number counting up
                tl.to(counter, {
                    innerText: target,
                    duration: 2,
                    snap: { innerText: 1 }, 
                    ease: "power2.out"
                }, 0);

                // 2. Animate the SVG Ring stroke-dashoffset
                tl.to(ring, {
                    strokeDashoffset: 0,
                    duration: 2,
                    ease: "power2.out"
                }, 0);
            });


            // projects section animation
            const projectTl = gsap.timeline({
            scrollTrigger: {
                trigger: "#projects-section",
                start: "top 80%",
                toggleActions: "play none none none"
            }
        });

        // Animate Header
        projectTl.from(".project-header > *", {
            y: 30,
            opacity: 0,
            duration: 0.6,
            stagger: 0.2,
            ease: "power3.out"
        })

        // Animated Cards with a stagger
        .from(".project-card", {
            y: 50,
            opacity: 100,
            duration: 1,
            stagger: 0.2,
            ease: "expo.out"
        }, "-=0.4")

        // Animate "See More" link
        .from(".project-footer", {
            opacity: 0,
            x: 20,
            duration: 0.5,
            ease: "power2.out"
        }, "-=0.2");
    });
</script>
@endsection
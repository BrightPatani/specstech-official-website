@extends('layouts.app')

@section('title', 'Our Services')

@section('content')

    {{-- hero section  --}}
    <div class="relative h-[70vh] md:h-[75vh] w-full flex items-center justify-center bg-black">
        {{-- Background Image (Optional, based on your previous hero styles) --}}
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <img src="{{ asset('images/services/servicehero.png') }}" class="h-full w-full object-cover" alt="About Us Background">
        </div>

        {{-- Centered Text Content --}}
        <div class="relative z-20 space-y-6 text-[#FFFFFF] text-center animate-fade-in-up px-6">
            <h1 class="text-[2.25rem] md:text-[3.5rem] lg:text-[4.5rem] font-bold leading-tight max-w-[60rem] mx-auto">
                Our Services
            </h1>
        </div>
    </div>

    {{-- our services  --}}
    <section class="services-section py-20 bg-[#F9FAFB]">
        <div class="container mx-auto px-6 max-w-6xl">
            <div class="services-header text-center mb-16">
                <h2 class="text-[#0A81CB] text-3xl md:text-5xl font-bold tracking-tight">
                    Our Services are Solution Driven
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12  p-6 lg:p-10 rounded-2xl">
                @php
                    $services = [
                        [
                            'title' => 'ICT Management',
                            'desc' => 'Our ICT Management Service is focused on providing customer-driven and efficient ICT management',
                            'img' => 'ictmgt.png',
                            'icon' => 'ictmanagement.png'
                        ],
                        [
                            'title' => 'Solutions',
                            'desc' => 'Today businesses are driven by ICT solutions. Specstech Africa is one of Nigeria’s solution p',
                            'img' => 'idea.png',
                            'icon' => 'solutions.png'
                        ],
                        [
                            'title' => 'Knowledge Transfer',
                            'desc' => 'Today businesses are driven by ICT solutions. Specstech Africa is one of Nigeria’s solution p',
                            'img' => 'knowledge2.png',
                            'icon' => 'knowledge.png'
                        ]
                    ];
                @endphp

                @foreach($services as $service)
                <div class="service-card group bg-[#FFFFFF] rounded-2xl overflow-hidden border border-[#0A81CB]/20 shadow-md transition-all duration-500 hover:shadow-[0_20px_50px_rgba(10,129,203,0.1)] hover:-translate-y-2">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/services/' . $service['img']) }}" 
                            alt="{{ $service['title'] }}" 
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>

                    <div class="relative pt-12 pb-8 px-8 text-center">
                        <div class="absolute -top-8 left-1/2 -translate-x-1/2 w-24 h-24  bg-[#FFFFFF] rounded-full shadow-md flex items-center justify-center z-10">
                            <img src="{{ asset('images/services/' . $service['icon']) }}" 
                                alt="Icon" 
                                class="w-10 h-10 object-contain">
                        </div>

                        <h3 class="text-[#334155] text-2xl mt-4 font-bold mb-4">{{ $service['title'] }}</h3>
                        
                        <p class="text-gray-500 leading-relaxed mb-8 min-h-[80px]">
                            {{ $service['desc'] }}
                        </p>

                        <a href="#" class="inline-flex items-center gap-2 text-[#0A81CB] font-semibold text-sm transition-colors hover:text-[#086ba8]">
                            See more
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- our deliverables  --}}
<section class="relative bg-[#0A81CB] w-full min-h-[31rem] lg:min-h-[37rem] flex items-center overflow-hidden">
    <div class="container mx-auto px-[1.5rem] lg:px-[3rem] relative z-20">
        
        <table class="w-full border-collapse">
            <tr>
                <td class="hidden absolute lg:table-cell w-1/2 relative align-bottom p-0">
                    <div class="relative">
                         <img src="{{ asset('images/services/deliver.png') }}" 
                             alt="Professional Executive" 
                             class="block w-auto h-[65rem] xl:h-[45rem] object-contain origin-bottom transform translate-y-[2rem] translate-x-[2rem]">
                    </div>
                </td>

                <td class="w-full lg:w-1/2 align-middle py-[3rem] lg:pl-[2rem]">
                    <div class="text-white">
                        <h2 class="font-sans text-[2rem] lg:text-[3.2rem] font-bold leading-[1.2] mb-[1.5rem] tracking-tight">
                            Our Deliverables are <br>
                            <span class="text-[#D12B2B]">Driven</span> on Excellence, <br>
                            Integrity, <br class="hidden lg:block">
                            Professionalism, <br>
                            Accountability
                        </h2>

                        <p class="text-[0.875rem] lg:text-[1.125rem] font-light opacity-90 leading-[1.8] max-w-[32rem]">
                            Today Businesses are Driven by Ict Solutions, Spectech Africa is one of 
                            Nigeria's solution provider with the Primary Goal of Providing 
                            Integrated ICT Solutions that Drive Business Operations with the Implementation.
                        </p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</section>

    <section class="solutions-section py-16 bg-[#FFFFFF]">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="solutions-header text-center mb-12">
                <h2 class="text-[#0A81CB] font-reem  text-3xl md:text-5xl font-bold tracking-tight">
                    We Also Provide the Following Solutions
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @php
                    $solutions = [
                        [
                            'title' => 'Why you Should Change your Default...',
                            'desc' => 'Why you should change your router default password.',
                            'img' => 'solution1.png'
                        ],
                        [
                            'title' => 'How to beat Multitasking and Boost your...',
                            'desc' => 'Why you should change your router default password.',
                            'img' => 'solution2.png'
                        ],
                        [
                            'title' => 'Why You Should Swap Passord for Passphrase.',
                            'desc' => 'Why you should change your router default password.',
                            'img' => 'solution3.png'
                        ],
                        [
                            'title' => 'Trojan Checklist',
                            'desc' => 'Why you should change your router default password.',
                            'img' => 'solution4.png'
                        ]
                    ];
                @endphp

                @foreach($solutions as $solution)
                <div class="extra-card bg-[#FFFFFF] rounded-xl overflow-hidden shadow-md flex items-stretch transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class=" lg:block w-2/5 overflow-hidden">
                        <img src="{{ asset('images/services/' . $solution['img']) }}" 
                            alt="{{ $solution['title'] }}" 
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>

                    <div class="w-full lg:w-3/5 p-6 lg:p-8 flex flex-col justify-center">
                        <h3 class="text-gray-900 text-xl font-bold mb-3 leading-tight group-hover:text-[#0A81CB] transition-colors">
                            {{ $solution['title'] }}
                        </h3>
                        <p class="text-gray-500 text-sm mb-6">
                            {{ $solution['desc'] }}
                        </p>
                        
                        <a href="#" class="inline-flex items-center gap-2 text-[#0A81CB] font-semibold text-sm group/link">
                            Read more
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover/link:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                    </div>
                    @endforeach
                </div>

            <div class="mt-12 flex justify-end">
                <a href="#" class="inline-flex items-center gap-2 text-[#0A81CB] font-bold hover:underline group">
                    See more
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- newsletter --}}
    <x-newsletter />

    {{-- footer  --}}
    <x-footer />

    
    <script>
            
            document.addEventListener("DOMContentLoaded", () => {
            gsap.registerPlugin(ScrollTrigger);

            gsap.registerPlugin(ScrollTrigger);

            // 1. Create a Master Timeline for the Services Section
            const servicesTl = gsap.timeline({
                scrollTrigger: {
                    trigger: ".services-section",
                    start: "top 75%",
                    toggleActions: "play none none reverse"
                }
            });

            // 2. Sequence the Entrance
            servicesTl
                // Step A: Fade in the section and header together
                .from(".services-section", {
                    opacity: 0,
                    y: 40,
                    duration: 0.3,
                    ease: "power3.out"
                })
                .from(".services-header h2", {
                    opacity: 0,
                    y: 20,
                    duration: 0.6,
                    ease: "power2.out"
                }, "-=0.6") 

                // Step B: Stagger the Service Cards
                .from(".service-card", {
                    opacity: 0,
                    y: 60,
                    scale: 0.68, 
                    duration: 0.8,
                    stagger: 0.2,
                    ease: "power3.out",
                    force3D: false, 
                    clearProps: "all" 
                }, "-=0.4")

                // Step C: Pop in the Icons
                .from(".service-card .rounded-full", {
                    scale: 0,
                    rotation: -45,
                    duration: 0.6,
                    stagger: 0.2,
                    ease: "back.out(0.3)"
                }, "-=0.8");

            // 3. Keep Parallax separate (since it must track scroll position 'scrub')
            gsap.utils.toArray(".service-card").forEach((card) => {
                const img = card.querySelector("img"); 
                
                gsap.to(img, {
                    scrollTrigger: {
                        trigger: card,
                        start: "top bottom",
                        end: "bottom top",
                        scrub: true
                    },
                    y: -30,
                    ease: "none"
                });
            });

       

            const extraSolutions = gsap.timeline({
                scrollTrigger: {
                    trigger: ".solutions-section",
                    start: "top 80%",
                    toggleActions: "play none none none"
                }
            });

            // 1. Title Fade Down
            extraSolutions.from(".solutions-header", {
                y: -40,
                opacity: 0,
                duration: 1,
                ease: "power3.out"
            });

            // 2. Animate cards based on their position (Left/Right)
            gsap.utils.toArray(".extra-card").forEach((card, i) => {
                // Logic: Even index cards slide from left, Odd index from right
                const direction = (i % 2 === 0) ? -50 : 50;

                extraSolutions.from(card, {
                    x: direction,
                    opacity: 0,
                    duration: 0.8,
                    ease: "power2.out",
                    clearProps: "all", 
                    force3D: false
                }, "-=0.6"); 
            });

            // 3. "See More" link slide in
            extraSolutions.from(".solutions-section .mt-12", {
                y: 20,
                opacity: 0,
                duration: 0.5,
                ease: "back.out(1.7)"
            }, "-=0.2");
        });
    </script>
@endsection
@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    {{-- Hero Section --}}
    <section class="relative h-[75vh] w-full flex items-center justify-center -z-10 bg-[#111827] overflow-hidden">
     
    {{-- hero section  --}}
       <div class="relative h-screen w-full flex items-center justify-center bg-[#111827]">
        {{-- Background Image (Optional, based on your previous hero styles) --}}
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[#111827]/50 z-10"></div>
            <img src="{{ asset('images/contact/contacthero.png') }}" class="h-full w-full " alt="About Us Background">
        </div>

        {{-- Centered Text Content --}}
        <div class="relative z-20 space-y-6 text-[#FFFFFF] text-center animate-fade-in-up px-6">
            <h1 class="text-xl md:text-2xl lg:text-3xl font-bold leading-tight max-w-[60rem] mx-auto">
                Contact Us
            </h1>
        </div>
    </div>
    </section>

    {{-- Contact Form Section --}}

    <section class="relative z-40 pb-40 bg-gray-50">
        <div class="contact-card container mx-auto px-6 max-w-6xl -mt-24 md:-mt-44"> 
            
            <div class="bg-[#FFFFFF] rounded-[2rem] overflow-hidden shadow-[0_20px_60px_rgba(0,0,0,0.08)] flex flex-col lg:flex-row">
                
                {{-- Left Side: Contact Information --}}
                <div class="w-full lg:w-[45%] bg-[#F8FAFC] p-8 lg:p-16">
                    <div class="mb-12">
                        <h2 class="text-[#334155] text-lg font-bold mb-4">Get in touch</h2>
                        <p class="text-gray-500 text-xs">Lets Start a Project Together</p>
                    </div>

                    <div class="space-y-10">
                        <div class="info-item flex items-start gap-6">
                            <div class="w-14 h-14 bg-[#0A81CB] rounded-full flex items-center justify-center shrink-0 shadow-lg shadow-[#0A81CB]/50">
                                <img src="{{ asset('images/contact/location.png') }}" class="w-12 h-auto" alt="Location">
                            </div>
                            <div>
                                <h3 class="text-xs font-bold text-[#334155]">Enugu Office</h3>
                                <p class="text-[#334155]/70 leading-relaxed text-xs">54 Okpara Avenue Enugu,<br>Enugu State.</p>
                            </div>
                        </div>

                        <div class="info-item flex items-start gap-6">
                            <div class="w-14 h-14 bg-[#0A81CB] rounded-full flex items-center justify-center shrink-0 shadow-lg shadow-[#0A81CB]/50">
                                <img src="{{ asset('images/contact/email.png') }}" class="w-12 h-auto" alt="Email">
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-[#334155]">Email us</h3>
                                <p class="text-gray-600">info@specstechafrica.com</p>
                            </div>
                        </div>

                        <div class="info-item flex items-start gap-6">
                            <div class="w-14 h-14 bg-[#0A81CB] rounded-full flex items-center justify-center shrink-0 shadow-lg shadow-[#0A81CB]/50">
                                <img src="{{ asset('images/contact/call.png') }}" class="w-12 h-auto" alt="Phone">
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-[#334155]">Call us</h3>
                                <p class="text-gray-600">+(234) 8033443727</p>
                            </div>
                        </div>
                    </div>

                    {{-- Social Media --}}
                    <div class="mt-16 pt-8 border-t border-gray-200">
                        <h4 class="text-xl font-bold text-[#334155] mb-6">Follow Our Social Media</h4>
                        <div class="flex gap-5">
                            <a href="#"><img src="{{ asset('images/contact/linkedinblue.png') }}" class="w-8 h-8" alt="LinkedIn"></a>
                            <a href="#"><img src="{{ asset('images/contact/xblue.png') }}" class="w-7 h-7 mt-0.5" alt="X"></a>
                            <a href="#"><img src="{{ asset('images/contact/facebookblue.png') }}" class="w-8 h-8" alt="Facebook"></a>
                            <a href="#"><img src="{{ asset('images/contact/instagramblue.png') }}" class="w-8 h-8" alt="Instagram"></a>
                        </div>
                    </div>
                </div>

                {{-- Right Side: Messaging Form --}}
                <div class="form-field w-full lg:w-[55%] p-8 lg:p-16 bg-[#FFFFFF]">
                    <h2 class="text-[#334155] text-lg font-bold mb-12">Send us a message</h2>
                    
                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf
                        @if(session('status'))
                            <div class="p-4 bg-green-50 border border-green-200 text-green-700 rounded">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div>
                            <input type="text" name="name" placeholder="Your Name" 
                                class="w-full p-5 bg-[#F4F4F4] border-none rounded-lg focus:ring-2 focus:ring-[#0A81CB] outline-none transition-all placeholder:text-gray-400">
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Your Email" 
                                class="w-full p-5 bg-[#F4F4F4] border-none rounded-lg focus:ring-2 focus:ring-[#0A81CB] outline-none transition-all placeholder:text-gray-400">
                        </div>
                        <div>
                            <textarea name="message" rows="6" placeholder="Your Message" 
                                class="w-full p-5 bg-[#F4F4F4] border-none rounded-lg focus:ring-2 focus:ring-[#0A81CB] outline-none transition-all placeholder:text-gray-400 resize-none"></textarea>
                        </div>
                        
                        <div class="pt-4">
                            <button type="submit" 
                                class="w-full bg-linear-to-r from-[#0A81CB] via-[#37A2E5] to-[#0A8ACB] hover:bg-linear-to-r hover:from-[#37A2E5] hover:via-[#0A81CB] hover:to-[#37A2E5] text-white font-bold py-5 rounded-xl shadow-lg  transition-all transform active:scale-[0.98]">
                                Send
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    {{-- map and location  --}}
    <section class="relative w-full bg-white py-6 md:py-24">
        <div class="container mx-auto px-4 md:px-6 max-w-7xl">
            
            {{-- Section Header --}}
            {{-- <div class="mb-10 text-center md:text-left">
                <h2 class="text-[#334155] text-3xl md:text-4xl font-bold mb-2">Our Location</h2>
                <div class="w-20 h-1.5 bg-[#0A81CB] rounded-full mx-auto md:mx-0"></div>
            </div> --}}

            <div class="relative w-full rounded-[1.5rem] md:rounded-[2.5rem] overflow-hidden shadow-xl border border-gray-100">
                
                {{-- Map Container --}}
                <div class="w-full h-[400px] md:h-[600px] bg-gray-200">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.359283733054!2d7.489146174534832!3d6.444900124118086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a3d8b58943f7%3A0xc5483f80c6c6e73!2s54%20Okpara%20Ave%2C%20Enugu%20400102%2C%20Enugu!5e0!3m2!1sen!2sng!4v1700000000000!5m2!1sen!2sng" 
                        class="w-full h-full border-0" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                {{-- Floating Location Card: Hidden on mobile, overlaps on desktop --}}
                <div class="hidden md:block absolute bottom-10 left-10 z-20 w-full max-w-sm">
                    <div class="bg-white/95 backdrop-blur-md p-8 rounded-[1.5rem] shadow-[0_20px_50px_rgba(0,0,0,0.15)] border border-white">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 bg-[#0A81CB] rounded-full flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-[#334155]">Head Office</h3>
                        </div>

                        <div class="space-y-4">
                            <p class="text-gray-600 text-lg leading-relaxed">
                                <span class="font-semibold text-gray-800">Spectech Africa</span><br>
                                54 Okpara Avenue Enugu,<br>
                                Enugu State, Nigeria.
                            </p>
                            
                            <a href="https://maps.app.goo.gl/..." target="_blank" 
                            class="inline-flex items-center gap-2 text-[#0A81CB] font-bold hover:underline">
                                Get Directions
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mobile-only Info Card: Stacks below the map --}}
            <div class="md:hidden mt-6 bg-[#F8FAFC] p-6 rounded-[1.25rem] border border-gray-100">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-[#0A81CB] rounded-full flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-[#334155] text-lg">Head Office</h3>
                        <p class="text-gray-500 text-sm mt-1">54 Okpara Avenue Enugu, Enugu State.</p>
                        <a href="#" class="text-[#0A81CB] text-sm font-bold mt-3 block">Open in Google Maps</a>
                    </div>
                </div>
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
                const contact = gsap.timeline({
                    scrollTrigger: {
                        trigger: ".contact-card",
                        start: "top 90%", 
                        toggleActions: "play none none none"
                    }
                });

                // 1. The Main Card: A subtle "float up" and fade
                contact.from(".contact-card", {
                    y: 100,
                    opacity: 0,
                    duration: 1.2,
                    ease: "expo.out"
                })

                // 2. Left Side: Staggered reveal of contact info
                .from(".info-item", {
                    x: -30,
                    opacity: 0,
                    stagger: 0.2,
                    duration: 0.8,
                    ease: "power2.out"
                }, "-=0.6")

                // 3. Right Side: Staggered reveal of form fields
                .from(".form-field", {
                    y: 20,
                    opacity: 0,
                    stagger: 0.1,
                    duration: 0.6,
                    ease: "power2.out"
                }, "-=0.8")

                // 4. Social Media Icons: A quick "pop" in
                .from(".contact-card .flex.gap-5 a", {
                    scale: 0,
                    opacity: 0,
                    stagger: 0.1,
                    duration: 0.5,
                    ease: "back.out(2)"
                }, "-=0.4");
            });
    </script>
@endsection
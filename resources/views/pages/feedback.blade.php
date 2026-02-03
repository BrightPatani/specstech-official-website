@extends('layouts.app')

@section('title', 'Feedback')

@push('extra-styles')
    @vite(['resources/css/index.css'])
@endpush

@section('content')
    {{-- hero section  --}}
    <div class="relative h-screen w-full flex items-center justify-center bg-black">
        {{-- Background Image --}}
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black/50  z-10"></div>
            <img src="{{ asset('images/feedback/feedbackhero.png') }}" class="h-full w-full object-cover" alt="About Us Background">
        </div>

        {{-- Centered Text Content --}}
        <div class="relative z-20 space-y-6 text-[#FFFFFF] text-center animate-fade-in-up px-6">
            <h1 class="text-[2.25rem] md:text-[3.5rem] lg:text-[5.5rem] font-bold leading-tight max-w-[60rem] mx-auto">
                Review Page
            </h1>
        </div>
    </div> 

    {{-- partners  --}}
    <x-partner />

    {{-- feedback form  --}}
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-6 max-w-3xl">
            {{-- Section Header --}}
            <div class="text-center mb-12">
                <h2 class="text-[#0A81CB] text-4xl md:text-5xl font-bold mb-4">Form</h2>
                <p class="text-gray-700 text-lg">Send us a Feedback about our Service to your Organization</p>
            </div>

            {{-- Feedback Form --}}
            <form action="#" method="POST" class="space-y-6">
                @csrf
                
                {{-- Full Name --}}
                <div class="space-y-2">
                    <label class="block text-gray-800 font-bold text-sm">Full Name*</label>
                    <input type="text" name="full_name" required
                        class="w-full px-4 py-3 bg-white border border-gray-200 rounded-md focus:ring-1 focus:ring-[#0A81CB] focus:border-[#0A81CB] outline-none transition-all">
                </div>

                {{-- Phone Number --}}
                <div class="space-y-2">
                    <label class="block text-gray-800 font-bold text-sm">Phone Number*</label>
                    <input type="tel" name="phone" required
                        class="w-full px-4 py-3 bg-white border border-gray-200 rounded-md focus:ring-1 focus:ring-[#0A81CB] focus:border-[#0A81CB] outline-none transition-all">
                </div>

                {{-- Email Address --}}
                <div class="space-y-2">
                    <label class="block text-gray-800 font-bold text-sm">Email Address*</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-3 bg-white border border-gray-200 rounded-md focus:ring-1 focus:ring-[#0A81CB] focus:border-[#0A81CB] outline-none transition-all">
                </div>

                {{-- Position in Company --}}
                <div class="space-y-2">
                    <label class="block text-gray-800 font-bold text-sm">Your Position in the Company</label>
                    <input type="text" name="position"
                        class="w-full px-4 py-3 bg-white border border-gray-200 rounded-md focus:ring-1 focus:ring-[#0A81CB] focus:border-[#0A81CB] outline-none transition-all">
                </div>

                {{-- Satisfaction Dropdown --}}
                <div class="space-y-2">
                    <label class="block text-gray-800 font-bold text-sm">Were you Satisfied with our Service?</label>
                    <div class="relative">
                        <select name="satisfied" 
                            class="w-full px-4 py-3 bg-white border border-gray-200 rounded-md appearance-none focus:ring-1 focus:ring-[#0A81CB] focus:border-[#0A81CB] outline-none transition-all text-gray-600">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                            <option value="neutral">Neutral</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-800">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Feedback Textarea --}}
                <div class="space-y-2">
                    <label class="block text-gray-800 font-bold text-sm">Write us a Feedback (Optional)</label>
                    <textarea name="feedback" rows="5" placeholder="Message..."
                        class="w-full px-4 py-3 bg-white border border-gray-200 rounded-md focus:ring-1 focus:ring-[#0A81CB] focus:border-[#0A81CB] outline-none transition-all resize-none placeholder:text-gray-300"></textarea>
                </div>

                {{-- Submit Button --}}
                <div class="pt-4">
                    <button type="submit" 
                        class="w-full bg-[#0A81CB] text-white font-bold py-4 rounded-md shadow-md hover:bg-[#086ba8] transition-all transform active:scale-[0.99]">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </section>

    {{-- newsletter  --}}
    <x-newsletter />            

    {{-- footer  --}}   
    <x-footer />
@endsection
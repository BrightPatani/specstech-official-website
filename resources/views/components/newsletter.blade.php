<section class="newsletter-section py-16 bg-white">
    <div class="container mx-auto px-8">
        <div class="newsletter-card max-w-6xl mx-auto bg-[#f5f9fb] rounded-2xl py-24 px-8 lg:px-20 shadow-lg">
            <div class="newsletter-content text-center mb-12">
                <h2 class="text-[#334155] text-3xl lg:text-5xl font-bold tracking-tight">
                    Get Latest Update and Offers.
                </h2>
            </div>

            <form action="#" method="POST" class="newsletter-form flex flex-col lg:flex-row items-center justify-center gap-6">
                @csrf
                <div class="w-full lg:w-1/3">
                    <input 
                        type="text" 
                        name="name" 
                        placeholder="Your Name" 
                        class="w-full px-6 py-4 rounded-xl bg-white border-none text-gray-400 placeholder-gray-300 focus:ring-2 focus:ring-blue-100 shadow-[0_10px_30px_rgba(0,0,0,0.03)] transition-all outline-none"
                        required
                    >
                </div>

                <div class="w-full lg:w-1/3">
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Your Email" 
                        class="w-full px-6 py-4 rounded-xl bg-white border-none text-gray-400 placeholder-gray-300 focus:ring-2 focus:ring-blue-100 shadow-[0_10px_30px_rgba(0,0,0,0.03)] transition-all outline-none"
                        required
                    >
                </div>

                <div class="w-full lg:w-auto">
                    <button 
                        type="submit" 
                        class="magnetic-btn w-full lg:w-auto px-12 py-4 bg-linear-to-r from-[#0A81CB] via-[#37A2E5] to-[#0A8ACB] hover:bg-linear-to-r hover:from-[#37A2E5] hover:via-[#0A81CB] hover:to-[#37A2E5] text-white font-bold rounded-xl shadow-[0_10px_25px_rgba(10,129,203,0.3)] transition-all transform active:scale-95"
                    >
                        Subscribe
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            gsap.registerPlugin(ScrollTrigger);

            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: ".newsletter-section", 
                    start: "top 80%", 
                    toggleActions: "play none none none"
                }
            });

            tl.from(".newsletter-card", {
                y: 60,
                opacity: 0,
                scale: 0.95,
                duration: 1,
                ease: "power4.out"
            })
            .from(".newsletter-content > *", { //stagger h2
                y: 30,
                opacity: 0,
                filter: "blur(10px)",
                duration: 0.8,
                stagger: 0.2,
                ease: "power3.out"
            }, "-=0.6")
            .from(".newsletter-form > div", { // Staggers the input fields and button
                y: 20,
                opacity: 0,
                duration: 0.6,
                stagger: 0.1,
                ease: "back.out(1.7)"
            }, "-=0.4");
        });

    </script>
</section>



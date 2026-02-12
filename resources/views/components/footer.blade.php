<footer class="bg-[#FFFFFF] pt-16 pb-8">
    <div class="container mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
            
            <div class="order-2 lg:order-1">
                <h4 class="text-[#000000] font-bold text-lg mb-6">Pages</h4>
                <ul class="space-y-4 text-[#888888]">
                    <li><a href="#" class="hover:text-[#0A81CB] transition-colors">Home</a></li>
                    <li><a href="#" class="hover:text-[#0A81CB] transition-colors">About</a></li>
                    <li><a href="#" class="hover:text-[#0A81CB] transition-colors">Services</a></li>
                    <li><a href="#" class="hover:text-[#0A81CB] transition-colors">Contact Us</a></li>
                </ul>
            </div>

            <div class="order-3 lg:order-2">
                <h4 class="text-[#000000] font-bold text-lg mb-6">Projects</h4>
                <ul class="space-y-4 text-[#888888]">
                    <li><a href="#" class="hover:text-[#0A81CB] transition-colors">Broad Band Internet</a></li>
                    <li><a href="#" class="hover:text-[#0A81CB] transition-colors">Team Spectech Africa..</a></li>
                    <li><a href="#" class="hover:text-[#0A81CB] transition-colors">Network Integration and Support</a></li>
                    <li><a href="#" class="hover:text-[#0A81CB] transition-colors">Working on Based Station 1</a></li>
                    <li><a href="#" class="hover:text-[#0A81CB] transition-colors">Interswitch Pay Direct..</a></li>
                    <li><a href="#" class="hover:text-[#0A81CB] transition-colors">Access Project at Enugu..</a></li>
                </ul>
            </div>

            <div class="order-4 lg:order-3">
                <h4 class="text-[#000000] font-bold text-lg mb-6">Legal</h4>
                <ul class="space-y-4 text-[#888888] ">
                    <li><a href="#" class="hover:text-[#0A81CB] transition-colors">Terms</a></li>
                    <li><a href="#" class="hover:text-[#0A81CB] transition-colors">Privacy</a></li>
                </ul>
            </div>

            <div class="order-1 lg:order-4">
                <h4 class="text-[#000000] font-bold text-lg mb-6">Contact us</h4>
                
                <div class="flex items-center gap-4 mb-8">
                    <a href="#" class="block transition-all duration-300 hover:-translate-y-1 opacity-80 hover:opacity-100">
                        <img src="{{ asset('images/socials/linkedin.png') }}" 
                            alt="LinkedIn" 
                            class="w-7 h-7 object-contain">
                    </a>

                    <a href="#" class="block transition-all duration-300 hover:-translate-y-1 opacity-80 hover:opacity-100">
                        <img src="{{ asset('images/socials/x.png') }}" 
                            alt="X" 
                            class="w-6 h-6 object-contain">
                    </a>

                    <a href="#" class="block transition-all duration-300 hover:-translate-y-1 opacity-80 hover:opacity-100">
                        <img src="{{ asset('images/socials/facebook.png') }}" 
                            alt="Facebook" 
                            class="w-7 h-7 object-contain">
                    </a>

                    <a href="#" class="block transition-all duration-300 hover:-translate-y-1 opacity-80 hover:opacity-100">
                        <img src="{{ asset('images/socials/instagram.png') }}" 
                            alt="Instagram" 
                            class="w-7 h-7 object-contain">
                    </a>
                </div>

                <div class="space-y-2 text-[#000000]">
                    <p>info@specstechafrica.com</p>
                </div>
            </div>
        </div>

        <div class="mt-20 pt-8 border-t border-gray-50 text-center lg:text-left">
            <p class="text-[#888888] text-sm">
                Specstech Africa Solutions & ICT LTD © {{ date('Y') }}. All Rights Reserved.
            </p>
        </div>
    </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                    gsap.registerPlugin(ScrollTrigger);

                const footerTl = gsap.timeline({
                    scrollTrigger: {
                        trigger: "footer",
                        start: "top 90%", 
                        toggleActions: "play none none none"
                    }
                });

                footerTl
                    // 1. Fade and slide the main columns up
                    .from("footer .grid > div", {
                        y: 40,
                        opacity: 0,
                        duration: 0.8,
                        stagger: 0.15,
                        ease: "power2.out"
                    })
                    // 2. Animate the top border (growing from center)
                    .from("footer .border-t", {
                        scaleX: 0,
                        opacity: 0,
                        duration: 1,
                        ease: "expo.out"
                    }, "-=0.4")
                    // 3. Final fade for copyright text
                    .from("footer .border-t p", {
                        opacity: 0,
                        y: 10,
                        duration: 0.5
                    }, "-=0.5");    
            });
        </script>
</footer>
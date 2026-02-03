import './bootstrap';

import Alpine from 'alpinejs';

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

// Register plugins
gsap.registerPlugin(ScrollTrigger);

// make gsap and alpine.js global
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

window.Alpine = Alpine;

Alpine.start();
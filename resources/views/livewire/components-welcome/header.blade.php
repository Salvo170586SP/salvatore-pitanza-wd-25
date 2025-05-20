<div class="relative min-h-screen overflow-hidden bg-gray-200/50 " id="home">
    <!-- Particles background -->
    <div id="particles-js" class="absolute inset-0 top-0 bottom-0 left-0 right-0" style="pointer-events: all; z-index: -1;"></div>
   
    <livewire:components-welcome.navbar />
    <livewire:components-welcome.jumbtron />
</div>

@assets
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
@endassets

@script
<script>
    const tiltElement = document.querySelector('.tilt-element');

            tiltElement.addEventListener('mousemove', function(e) {
                    const rect = tiltElement.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = ((y - centerY) / centerY) * -20;
                    const rotateY = ((x - centerX) / centerX) * 20;
                    
                    tiltElement.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
                });

                tiltElement.addEventListener('mouseleave', function() {
                    tiltElement.style.transform = 'rotateX(0) rotateY(0)';
                });

                 particlesJS("particles-js", {
                    particles: {
                        number: {
                            value: 200,
                            density: {
                                enable: true,
                                value_area: 2000
                            }
                        },
                        color: {
                            value: "#002057"
                        },
                        shape: {
                            type: "circle"
                        },
                        opacity: {
                            value: 0.5,
                            random: true,
                            anim: {
                                enable: true,
                                speed: 1,
                                opacity_min: 0.1,
                                sync: false
                            }
                        },
                        size: {
                            value: 3,
                            random: true
                        },
                        line_linked: {
                            enable: true,
                            distance: 150,
                            color: "#002057",
                            opacity: 0.2,
                            width: 1
                        },
                        move: {
                            enable: true,
                            speed: 1,
                            direction: "none",
                            random: true,
                            straight: false,
                            out_mode: "bounce",
                            bounce: true,
                            attract: {
                                enable: true,
                                rotateX: 600,
                                rotateY: 1200
                            }
                        }
                    },
                    interactivity: {
                        detect_on: "window",
                        events: {
                            onhover: {
                                enable: true,
                                mode: "bubble"
                            },
                            onclick: {
                                enable: true,
                                mode: "repulse"
                            },
                            resize: true
                        },
                        modes: {
                            bubble: {
                                distance: 200,
                                size: 6,
                                duration: 2,
                                opacity: 0.8,
                                speed: 3
                            },
                            repulse: {
                                distance: 200,
                                duration: 2
                            }
                        }
                    },
                    retina_detect: true
                });

</script>
@endscript
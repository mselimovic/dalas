<section class="pt-5 pb-4">
    <div class="container text-center">
        <!-- Section Title -->
        <h5 class="text-uppercase fw-semibold text-primary text-uppercase">UNSER PORTFOLIO</h5>
        <h3 class="fw-bold text-uppercase text-dark mb-4">Präsentation der neuesten Arbeiten</h3>
        <div class="container-fluid">
            <div class="multi-carousel-container" id="multiCarousel">
                <div class="multi-carousel-inner" id="carouselInner">
                    <!-- Original items only -->
                    <div class="multi-carousel-item" data-index="0">
                        <div class="img-container"><span class="item-number">1</span>
                            <img src="/img/homepage/showcase.png" alt="Image 1">
                        </div>
                    </div>
                    <div class="multi-carousel-item" data-index="1">
                        <div class="img-container"><span class="item-number">2</span>
                            <img src="/img/homepage/showcase2.png" alt="Image 2">
                        </div>
                    </div>
                    <div class="multi-carousel-item" data-index="2">
                        <div class="img-container"><span class="item-number">3</span>
                            <img src="/img/homepage/showcase3.png" alt="Image 3">
                        </div>
                    </div>

                </div>

                <button class="multi-carousel-control-prev" id="prevBtn">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="multi-carousel-control-next" id="nextBtn">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>
</section>
<style>
    /* Carousel heading */
    .heading {
        display: block;
        text-align: center;
    }

    /* Container for the entire carousel */
    .multi-carousel-container {
        cursor: grab;
        margin: 0 auto;
        max-width: 100%;
        overflow: hidden;
        position: relative;
    }

    /* Cursor styles for dragging */
    .multi-carousel-container.dragging,
    #multiCarousel.dragging {
        cursor: grabbing;
    }

    /* Wrapper for all slides */
    .multi-carousel-inner {
        display: flex;
        transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    /* Individual slide */
    .multi-carousel-item,
    .clone {
        box-sizing: border-box;
        flex: 0 0 33.333333%;
        padding: 0 5px;
        position: relative;
        /* Essential for item-number positioning */
    }

    /* Control buttons */
    .multi-carousel-control-prev,
    .multi-carousel-control-next {
        align-items: center;
        background-color: rgba(0, 0, 0, 0.5);
        border: none;
        border-radius: 50%;
        color: white;
        cursor: pointer;
        display: flex;
        height: 40px;
        justify-content: center;
        position: absolute;
        text-decoration: none;
        top: 50%;
        transform: translateY(-50%);
        transition: background-color 0.3s ease;
        width: 40px;
        z-index: 10;
    }

    .multi-carousel-control-prev:hover,
    .multi-carousel-control-next:hover {
        background-color: rgba(0, 0, 0, 0.7);
    }

    .multi-carousel-control-prev {
        left: 10px;
    }

    .multi-carousel-control-next {
        right: 10px;
    }

    /* Image container with dynamic height */
    .img-container {
        border-radius: 1.5rem;
        height: var(--carousel-height, 80vh);
        overflow: hidden;
        position: relative;
        max-height: 300px;
    }

    /* Image styling */
    .img-container img,
    #carouselInner img {
        height: 100%;
        object-fit: cover;
        object-position: top;
        pointer-events: none;
        user-drag: none;
        width: 100%;
        -webkit-user-drag: none;
        transition: transform 0.3s ease;
    }

    .img-container:hover img {
        transform: translateZ(0) scale(1.02);
    }

    /* Item number styling - guaranteed visibility */
    .item-number {
        align-items: center;
        background-color: #6EC0D8;
        border-radius: 50%;
        display: inline-flex;
        font-size: 120%;
        font-weight: bold;
        height: 35px;
        justify-content: center;
        left: 1rem;
        position: absolute;
        top: 1rem;
        width: 35px;
        z-index: 2;
        /* Higher than default but below controls */
        /* Isolation prevents z-index context issues */
        isolation: isolate;
        color: white
    }

    /* Carousel cursor styling */
    #multiCarousel {
        cursor: grab;
        touch-action: pan-y;
    }

    /* Disable text selection during drag */
    #multiCarousel.dragging {
        user-select: none;
        -webkit-user-select: none;
    }

    /* Responsive adjustments for screens smaller than 720px (45em) */
    @media (max-width: 45em) {

        .multi-carousel-item,
        .clone {
            flex: 0 0 100%;
        }
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Configuration - dynamic based on screen size
        let itemsPerSlide = window.innerWidth < 720 ? 1 : 3; // Responsive items per slide
        const totalItems = 3; // Total real items (without clones)
        let slideBy = window.innerWidth < 720 ? 1 : 1; // How many items to advance/retreat per click

        // DOM elements
        const carousel = document.getElementById("multiCarousel");
        const carouselInner = document.getElementById("carouselInner");
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");

        // Function to update configuration based on screen size
        function updateConfig() {
            const isMobile = window.innerWidth < 720;
            itemsPerSlide = isMobile ? 1 : 3;
            slideBy = isMobile ? 1 : 1;
        }

        // Dynamically add clone elements
        function initializeClones() {
            const originalItems = Array.from(
                document.querySelectorAll(".multi-carousel-item:not(.clone)")
            );

            // Clear existing clones
            document.querySelectorAll(".clone").forEach((clone) => clone.remove());

            // Prepend clones of last items
            const lastClones = originalItems
                .slice(-itemsPerSlide)
                .map((item) => {
                    const clone = item.cloneNode(true);
                    clone.classList.add("clone");
                    return clone;
                })
                .reverse();
            lastClones.forEach((clone) => carouselInner.prepend(clone));

            // Append clones of first items
            const firstClones = originalItems.slice(0, itemsPerSlide).map((item) => {
                const clone = item.cloneNode(true);
                clone.classList.add("clone");
                return clone;
            });
            firstClones.forEach((clone) => carouselInner.append(clone));
        }

        // Calculate and set the height for carousel items (without heading dependency)
        function setCarouselHeight() {
            // Calculate available height without depending on heading element
            const windowHeight = window.innerHeight;
            const carouselContainer = carousel.closest(".container-fluid");

            // Get the carousel container's offset from top
            const containerRect = carouselContainer ?
                carouselContainer.getBoundingClientRect() :
                {
                    top: 0
                };
            const availableHeight = windowHeight - containerRect.top - 100; // 100px for padding/margins

            // Set a minimum height to ensure carousel is always visible
            const carouselHeight = Math.max(availableHeight, 300);

            document.documentElement.style.setProperty(
                "--carousel-height",
                `${carouselHeight}px`
            );
        }

        // Initial setup
        updateConfig();
        initializeClones();
        setCarouselHeight();

        // Start with the first real set of images
        let currentIndex = 0; // Index of current visible center image (0 to totalItems-1)
        let position = itemsPerSlide; // Real position considering clones
        let isAnimating = false;

        // Update carousel position
        function updateCarouselPosition(animate = true) {
            if (animate) {
                carouselInner.style.transition = "transform 0.5s ease";
            } else {
                carouselInner.style.transition = "none";
            }

            const translateX = (position * -100) / itemsPerSlide;
            carouselInner.style.transform = `translateX(${translateX}%)`;
        }

        // Initialize position
        updateCarouselPosition(false);

        // Handle transition end
        carouselInner.addEventListener("transitionend", function() {
            isAnimating = false;

            // Handle infinite loop logic
            if (position >= totalItems + itemsPerSlide) {
                position = itemsPerSlide + (position - (totalItems + itemsPerSlide));
                updateCarouselPosition(false);
            } else if (position < itemsPerSlide) {
                position = totalItems + position;
                updateCarouselPosition(false);
            }

            currentIndex = (position - itemsPerSlide) % totalItems;
        });

        // Navigation functions
        function next() {
            if (isAnimating) return;
            isAnimating = true;
            position += slideBy;
            updateCarouselPosition();
        }

        function prev() {
            if (isAnimating) return;
            isAnimating = true;
            position -= slideBy;
            updateCarouselPosition();
        }

        // Event listeners for buttons
        nextBtn.addEventListener("click", next);
        prevBtn.addEventListener("click", prev);

        // Mouse drag functionality
        let isDragging = false;
        let startX = 0;
        let startPosition = 0;

        // Prevent image drag
        const carouselImages = document.querySelectorAll("#carouselInner img");
        carouselImages.forEach((img) => {
            img.addEventListener("dragstart", (e) => {
                e.preventDefault();
            });
            img.style.pointerEvents = "none";
        });

        carousel.addEventListener("mousedown", startDrag);
        carousel.addEventListener("touchstart", startDrag, {
            passive: true
        });

        carousel.addEventListener("mousemove", drag);
        carousel.addEventListener("touchmove", drag, {
            passive: true
        });

        carousel.addEventListener("mouseup", endDrag);
        carousel.addEventListener("touchend", endDrag);
        carousel.addEventListener("mouseleave", endDrag);

        function startDrag(e) {
            if (e.target.tagName === "IMG") {
                e.preventDefault();
            }

            if (isAnimating) return;

            isDragging = true;
            startX = e.type.includes("mouse") ? e.clientX : e.touches[0].clientX;
            startPosition = position;
            carousel.classList.add("dragging");
            carouselInner.style.transition = "none";
            document.body.style.cursor = "grabbing";
            document.body.style.userSelect = "none";
            registerUserActivity();
        }

        function drag(e) {
            if (!isDragging) return;

            const x = e.type.includes("mouse") ? e.clientX : e.touches[0].clientX;
            const walk = ((x - startX) / carousel.offsetWidth) * itemsPerSlide;
            const newPosition = startPosition - walk;
            const translateX = (newPosition * -100) / itemsPerSlide;
            carouselInner.style.transform = `translateX(${translateX}%)`;
        }

        function endDrag(e) {
            if (!isDragging) return;

            isDragging = false;
            carousel.classList.remove("dragging");
            document.body.style.cursor = "";
            document.body.style.userSelect = "";
            carouselInner.style.transition = "transform 0.5s ease";

            const x = e.type?.includes("mouse") ?
                e.clientX :
                e.changedTouches ?
                e.changedTouches[0].clientX :
                startX;
            const walk = ((x - startX) / carousel.offsetWidth) * itemsPerSlide;

            if (walk > 0.2) {
                prev();
            } else if (walk < -0.2) {
                next();
            } else {
                updateCarouselPosition();
            }

            registerUserActivity();
        }

        // Keyboard navigation
        document.addEventListener("keydown", function(e) {
            if (
                carousel.offsetParent === null ||
                document.activeElement.tagName === "INPUT" ||
                document.activeElement.tagName === "TEXTAREA" ||
                document.activeElement.isContentEditable
            ) {
                return;
            }

            switch (e.key) {
                case "ArrowLeft":
                    e.preventDefault();
                    prev();
                    registerUserActivity();
                    break;
                case "ArrowRight":
                    e.preventDefault();
                    next();
                    registerUserActivity();
                    break;
            }
        });

        // Auto-advance system
        let autoAdvanceInterval;
        let userActivityTimeout;

        function startAutoAdvance() {
            clearInterval(autoAdvanceInterval);
            autoAdvanceInterval = setInterval(next, 5000);
        }

        function resetAutoAdvanceTimer() {
            clearTimeout(userActivityTimeout);
            clearInterval(autoAdvanceInterval);
            userActivityTimeout = setTimeout(startAutoAdvance, 10000);
        }

        function registerUserActivity() {
            resetAutoAdvanceTimer();
        }

        startAutoAdvance();

        carousel.addEventListener("mouseenter", () => {
            clearInterval(autoAdvanceInterval);
        });

        carousel.addEventListener("mouseleave", () => {
            resetAutoAdvanceTimer();
        });

        carousel.addEventListener("click", registerUserActivity);
        carousel.addEventListener("wheel", registerUserActivity);

        window.addEventListener("resize", function() {
            const wasMobile = itemsPerSlide === 1;
            updateConfig();
            setCarouselHeight();


            if (
                (wasMobile && itemsPerSlide > 1) ||
                (!wasMobile && itemsPerSlide === 1)
            ) {
                initializeClones();
                position = itemsPerSlide;
                updateCarouselPosition(false);
            }
        });
    });
</script>

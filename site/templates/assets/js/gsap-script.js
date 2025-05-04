/* Text Animation  */
(function () {
    let elements = document.querySelectorAll(".rolling-text");

    elements.forEach((element) => {
        let innerText = element.innerText;
        element.innerHTML = "";

        let textContainer = document.createElement("div");
        textContainer.classList.add("block");

        for (let letter of innerText) {
            let span = document.createElement("span");
            span.innerText = letter.trim() === "" ? "\xa0" : letter;
            span.classList.add("letter");
            textContainer.appendChild(span);
        }

        element.appendChild(textContainer);
        element.appendChild(textContainer.cloneNode(true));
    });

    elements.forEach((element) => {
        element.addEventListener("mouseover", () => {
            element.classList.remove("play");
        });
    });
})();



$(function () {
    let splitTextLines = gsap.utils.toArray(".splittext-line");
    splitTextLines.forEach((splitTextLine) => {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: splitTextLine,
                start: "top 90%",
                duration: 2,
                end: "bottom 60%",
                scrub: false,
                markers: false,
                toggleActions: "play none none none",
            },
        });

        const itemSplitted = new SplitText(splitTextLine, { type: "lines" });
        gsap.set(splitTextLine, { perspective: 400 });
        itemSplitted.split({ type: "lines" });
        tl.from(itemSplitted.lines, {
            duration: 1,
            delay: 0.5,
            opacity: 0,
            rotationX: -80,
            force3D: true,
            transformOrigin: "top center -50",
            stagger: 0.1,
        });
    });

});


gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
$(document).ready(function () {
    var st = $(".poort-text");
    if (st.length == 0) return;
    gsap.registerPlugin(SplitText);
    st.each(function (index, el) {
        el.split = new SplitText(el, { type: "lines,words,chars", linesClass: "poort-line" });
        gsap.set(el, { perspective: 600 });
        if ($(el).hasClass("poort-in-right")) {
            gsap.set(el.split.chars, { opacity: 0, x: "100", ease: "Back.easeOut" });
        }
        if ($(el).hasClass("poort-in-left")) {
            gsap.set(el.split.chars, { opacity: 0, x: "-100", ease: "circ.out" });
        }
        if ($(el).hasClass("poort-in-up")) {
            gsap.set(el.split.chars, { opacity: 0, y: "80", ease: "circ.out" });
        }
        if ($(el).hasClass("poort-in-down")) {
            gsap.set(el.split.chars, { opacity: 0, y: "-80", ease: "circ.out" });
        }
        el.anim = gsap.to(el.split.chars, { scrollTrigger: { trigger: el, start: "top 90%" }, x: "0", y: "0", rotateX: "0", scale: 1, opacity: 1, duration: 0.6, stagger: 0.02 });
    });
});







/* scroll-text-animation */
function scroll_animations() {
    var defaults = {
        duration: 1.2,
        ease: "power4.out",
        animation: "fade_from_bottom",
        once: !1,
    };
    gsap.utils.toArray(".scroll-text-animation").forEach(function (box) {
        var gsap_obj = {};
        var settings = {
            duration: box.dataset.animationDuration || defaults.duration,
        };
        var animations = {
            fade_from_bottom: {
                y: 180,
                opacity: 0,
            },
            fade_from_top: {
                y: -180,
                opacity: 0,
            },
            fade_from_left: {
                x: -180,
                opacity: 0,
            },
            fade_from_right: {
                x: 180,
                opacity: 0,
            },
            fade_in: {
                opacity: 0,
            },
            rotate_up: {
                y: 180,
                rotation: 10,
                opacity: 0,
            },
        };
        var scroll_trigger = {
            scrollTrigger: {
                trigger: box,
                once: defaults.once,
                start: "top bottom+=20%",
                // start: "top bottom+=5%",
                toggleActions: "play none none reverse",
                markers: !1,
            },
        };
        jQuery.extend(gsap_obj, settings);
        jQuery.extend(gsap_obj, animations[box.dataset.animation || defaults.animation]);
        jQuery.extend(gsap_obj, scroll_trigger);
        gsap.from(box, gsap_obj);
    });
}
scroll_animations();



let device_width = window.innerWidth;

gsap.set(".fade_bottom", { y: 30, opacity: 0 });

if (device_width < 1023) {
    const fadeArray = gsap.utils.toArray(".fade_bottom");
    fadeArray.forEach((item, i) => {
        let fadeTl = gsap.timeline({
            scrollTrigger: {
                trigger: item,
                start: "top center+=200",
            }
        });
        fadeTl.to(item, {
            y: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 1.5,
        });
    });
} else {
    gsap.to(".fade_bottom", {
        scrollTrigger: {
            trigger: ".fade_bottom",
            start: "top center+=300",
            markers: false,
        },
        y: 0,
        opacity: 1,
        ease: "power2.out",
        duration: 1,
        stagger: {
            each: 0.2,
        },
    });
}





/* imager scroll animation */

document.addEventListener('DOMContentLoaded', function () {
    let new_class_name_elements = document.querySelectorAll(".new_img-animet");
    new_class_name_elements.forEach((new_class_name_element) => {
        let image = new_class_name_element.querySelector("img");

        if (!image) return;

        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: new_class_name_element,
                start: "top 50%",
            }
        });

        tl.set(new_class_name_element, { autoAlpha: 1 });
        tl.from(new_class_name_element, 1.5, {
            xPercent: -100,
            ease: Power2.out
        });
        tl.from(image, 1.5, {
            xPercent: 100,
            scale: 1.3,
            delay: -1.5,
            ease: Power2.out
        });
    });
});






class HoverButton {
    constructor(el) {
        this.el = el;
        this.hover = false;
        this.calculatePosition();
        this.attachEventsListener();
    }

    attachEventsListener() {
        window.addEventListener('mousemove', e => this.onMouseMove(e));
        window.addEventListener('resize', e => this.calculatePosition(e));
    }

    calculatePosition() {
        gsap.set(this.el, {
            x: 0,
            y: 0,
            scale: 1
        });
        const box = this.el.getBoundingClientRect();
        this.x = box.left + (box.width * 0.5);
        this.y = box.top + (box.height * 0.5);
        this.width = box.width;
        this.height = box.height;
    }

    onMouseMove(e) {
        let hover = false;
        let hoverArea = (this.hover ? 0.7 : 0.5);
        let x = e.clientX - this.x;
        let y = e.clientY - this.y;
        let distance = Math.sqrt(x * x + y * y);
        if (distance < (this.width * hoverArea)) {
            hover = true;
            if (!this.hover) {
                this.hover = true;
            }
            this.onHover(e.clientX, e.clientY);
        }

        if (!hover && this.hover) {
            this.onLeave();
            this.hover = false;
        }
    }

    onHover(x, y) {
        gsap.to(this.el, {
            x: (x - this.x) * 0.4,
            y: (y - this.y) * 0.4,
            scale: 1.15,
            ease: 'power2.out',
            duration: 0.4
        });
        this.el.style.zIndex = 10;
    }

    onLeave() {
        gsap.to(this.el, {
            x: 0,
            y: 0,
            scale: 1,
            ease: 'elastic.out(1.2, 0.4)',
            duration: 0.7
        });
        this.el.style.zIndex = 1;
    }
}



/* btn-move */

const all_btns = gsap.utils.toArray(".btn-wrapper");
if (all_btns.length > 0) {
    var all_btn = gsap.utils.toArray(".btn-wrapper");
}
else {
    var all_btn = gsap.utils.toArray("#btn-wrapper");
}

const all_btn_cirlce = gsap.utils.toArray(".btn-move");
all_btn.forEach((btn, i) => {
    $(btn).mousemove(function (e) {
        callParallax(e);
    });
    function callParallax(e) {
        parallaxIt(e, all_btn_cirlce[i], 80);
    }

    function parallaxIt(e, target, movement) {
        var $this = $(btn);
        var relX = e.pageX - $this.offset().left;
        var relY = e.pageY - $this.offset().top;

        gsap.to(target, 0.5, {
            x: ((relX - $this.width() / 2) / $this.width()) * movement,
            y: ((relY - $this.height() / 2) / $this.height()) * movement,
            ease: Power2.easeOut,
        });
    }
    $(btn).mouseleave(function (e) {
        gsap.to(all_btn_cirlce[i], 0.5, {
            x: 0,
            y: 0,
            ease: Power2.easeOut,
        });
    });
});




 
! function() {
    const e = document.querySelectorAll(".coblocks-animate");
    if ("IntersectionObserver" in window) {
        const t = new IntersectionObserver((e => {
            e.forEach((e => {
                e.isIntersecting && (e.target.classList.add(e.target.dataset.coblocksAnimation), t.unobserve(e.target))
            }))
        }), {
            threshold: [.15]
        });
        e.forEach((e => {
            t.observe(e)
        }))
    } else e.forEach((e => {
        e.classList.remove("coblocks-animate"), delete e.dataset.coblocksAnimation
    }))
}();
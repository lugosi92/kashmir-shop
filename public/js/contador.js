// public/js/contador.js
document.addEventListener("DOMContentLoaded", () => {
    const endDate = new Date("2025-11-22T00:00:00").getTime();

    setInterval(() => {
        const now = new Date().getTime();
        const diff = endDate - now;

        const d = Math.floor(diff / (1000 * 60 * 60 * 24));
        const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        const s = Math.floor((diff % (1000 * 60)) / 1000);

        document.getElementById("cd-days").innerText = d;
        document.getElementById("cd-hours").innerText = h;
        document.getElementById("cd-mins").innerText = m;
        document.getElementById("cd-secs").innerText = s;
    }, 1000);
});


document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById("theme-toggle");
    const icon = document.getElementById("theme-icon");
    const html = document.documentElement;
    const body = document.body;

    function setTheme(theme) {
        html.setAttribute("data-bs-theme", theme);
        body.setAttribute("data-theme", theme);
        icon.className = "bi";
        icon.classList.add(theme === "dark" ? "bi-sun-fill" : "bi-moon-fill");
    }

    const saved = localStorage.getItem("theme") || "light";
    setTheme(saved);

    toggle.addEventListener("click", () => {
        const current = html.getAttribute("data-bs-theme");
        const next = current === "dark" ? "light" : "dark";
        localStorage.setItem("theme", next);
        setTheme(next);
    });
});

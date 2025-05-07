document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("theme-toggle");
    const icon = document.getElementById("icon");
    const header = document.querySelector("header")

    // Set initial theme
    const currentTheme = localStorage.getItem("theme");
    if (currentTheme === "dark") {
        document.body.classList.add("dark-mode");

        icon.classList.replace("bi-sun", "bi-moon");
    } else {
        icon.classList.replace("bi-moon", "bi-sun");
    }

    // Toggle theme on button click
    toggleBtn.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
        const isDark = document.body.classList.contains("dark-mode");
        localStorage.setItem("theme", isDark ? "dark" : "light");

        // Toggle icon
        if (isDark) {
            icon.classList.replace("bi-sun", "bi-moon");
        } else {
            icon.classList.replace("bi-moon", "bi-sun");
        }
    });
});


document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("theme-toggle");
    const icon = document.getElementById("icon");
    const navbar = document.getElementById("main-navbar");

    const applyTheme = (theme) => {
        const isDark = theme === "dark";
        document.body.classList.toggle("dark-mode", isDark);
        icon.classList.replace(isDark ? "bi-sun" : "bi-moon", isDark ? "bi-moon" : "bi-sun");

        // Toggle Bootstrap navbar classes
        navbar.classList.toggle("navbar-light", !isDark);
        navbar.classList.toggle("bg-light", !isDark);
        navbar.classList.toggle("navbar-dark", isDark);
        navbar.classList.toggle("bg-dark", isDark);
    };

    // Set initial theme
    const savedTheme = localStorage.getItem("theme") || "light";
    applyTheme(savedTheme);

    toggleBtn.addEventListener("click", () => {
        const newTheme = document.body.classList.contains("dark-mode") ? "light" : "dark";
        localStorage.setItem("theme", newTheme);
        applyTheme(newTheme);
    });
});

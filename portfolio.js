// JavaScript code to change the theme color of a portfolio

// Function to change the theme color
toggleTheme = (theme) => {
    // Get the root element
    const root = document.documentElement;

    // Define themes
    const themes = {
        yellow: {
            '--bg-color': '#080808',
            '--second-bg-color': '#131313',
            '--text-color': 'white',
            '--main-color': '#dffc02'
        },
        original: {
            '--bg-color': '#080808',
            '--second-bg-color': '#131313',
            '--text-color': 'white',
            '--main-color': '#00ffee'
        },
        green: {
           '--bg-color': '#080808',
            '--second-bg-color': '#131313',
            '--text-color': 'white',
            '--main-color': '#61f254'
        }
    };

    // Apply the selected theme
    if (themes[theme]) {
        for (const property in themes[theme]) {
            root.style.setProperty(property, themes[theme][property]);
        }
    } else {
        console.error('Theme not found:', theme);
    }
};

// Example of using a button to change the theme
document.addEventListener('DOMContentLoaded', () => {
    const themeButtons = document.querySelectorAll('.theme-btn');

    themeButtons.forEach(button => {
        button.addEventListener('click', () => {
            const theme = button.dataset.theme;
            toggleTheme(theme);
        });
    });
});

    const menuIcon = document.querySelector("#menu-icon");
    const navbar = document.querySelector(".navbar");

    menuIcon.addEventListener("click", () => {
        navbar.classList.toggle("active");
    });


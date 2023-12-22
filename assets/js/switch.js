$(document).ready(function(){
const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
const currentTheme = localStorage.getItem('theme');
    if (currentTheme) {
        document.documentElement.setAttribute('data-theme', currentTheme);

        if (currentTheme === 'dark') {
            toggleSwitch.checked = true;
            $('.logo_chan').attr('src', "./images/logo_white.png");
        }else{
            $('.logo_chan').attr('src', "./images/logo_dark.png");
        }
    }

    function switchTheme(e) {
        if (e.target.checked) {
            document.documentElement.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
            $('.logo_chan').attr('src', "./images/logo_white.png");
        }else {
            document.documentElement.setAttribute('data-theme', 'light');
            localStorage.setItem('theme', 'light');
            $('.logo_chan').attr('src', "./images/logo_dark.png");
        }
    }

    toggleSwitch.addEventListener('change', switchTheme, false);
});

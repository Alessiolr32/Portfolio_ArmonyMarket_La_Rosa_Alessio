document.addEventListener('livewire:navigated', () => {
    const button = document.getElementById('submitButton');
    const flyIcon = document.getElementById('flyIcon');
    const form = document.getElementById('workWithUsForm');
    
    button.addEventListener('click', (e) => {
        const rect = button.getBoundingClientRect();
        flyIcon.style.top = rect.top + 'px';
        flyIcon.style.left = rect.left + 'px';
        flyIcon.style.display = 'block';
        flyIcon.style.opacity = '1';
        flyIcon.style.fontSize = '32px';
        flyIcon.style.transition = 'none'; 
        
        flyIcon.style.transition =
        'transform 0.5s ease-in-out, opacity 0.5s ease-in-out, font-size 0.5s ease-in-out';
        
        const randomX = (Math.random() - 0.5) * 300;
        const randomY = -500 - Math.random() * 200;
        
        setTimeout(() => {
            flyIcon.style.transform = `translate(${randomX}px, ${randomY}px) rotate(${Math.random()*720}deg)`;
            flyIcon.style.opacity = '0';
            flyIcon.style.fontSize = '24px';
        });
        
        flyIcon.addEventListener('transitionend', () => {
            flyIcon.style.display = 'none';
            flyIcon.style.transform = 'none';
            flyIcon.style.opacity = '1';
        }, { once: true }); 
    });
});


// Language Switcher
document.addEventListener('DOMContentLoaded', function() {
    const langBubble = document.getElementById('langBubble');
    const langOptions = document.getElementById('langOptions');
    
    langBubble.addEventListener('click', function(e) {
        e.stopPropagation();
        langOptions.classList.toggle('active');
    });
    
    document.addEventListener('click', function() {
        langOptions.classList.remove('active');
    });
    
    langOptions.addEventListener('click', function(e) {
        e.stopPropagation();
    });
    
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            langOptions.classList.remove('active');
        }
    });
});


//Section Hidden Animation
document.addEventListener("DOMContentLoaded", () => {
    const hiddenSections = document.querySelectorAll(".section-hidden");       
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("section-visible");
                observer.unobserve(entry.target); 
            }
        });
    }, { threshold: 0.2 });    
    hiddenSections.forEach(section => observer.observe(section));
});


//Slide Animation All Pages
document.addEventListener("DOMContentLoaded", () => {
    const main = document.querySelector(".page-transition-main");
    if (!main) return;

    requestAnimationFrame(() => {
        main.classList.add("show");
    });
});






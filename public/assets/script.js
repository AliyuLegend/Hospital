// script.js
document.addEventListener('DOMContentLoaded', () => {
  const links = document.querySelectorAll('nav a');

  for (const link of links) {
    link.addEventListener('click', (e) => {
      const targetId = link.getAttribute('href').substring(1);
      const targetSection = document.getElementById(targetId);

      if (targetSection) {
        e.preventDefault();

        window.scrollTo({
          top: targetSection.offsetTop,
          behavior: 'smooth'
        });
      }
    });
  }
});


// script.js
// script.js
document.addEventListener('DOMContentLoaded', () => {
  const links = document.querySelectorAll('.header .nav a');
  const sections = document.querySelectorAll('section'); // Update selector if your sections are different

  function removeActiveClass() {
    links.forEach(link => link.parentElement.classList.remove('active'));
  }

  function setActiveClass() {
    let currentSection = '';

    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;

      if (window.scrollY >= sectionTop - 50 && window.scrollY < sectionTop + sectionHeight - 50) {
        currentSection = section.getAttribute('id');
      }
    });

    removeActiveClass();

    if (currentSection) {
      const activeLink = document.querySelector(`.header .nav a[href="#${currentSection}"]`);
      if (activeLink) {
        activeLink.parentElement.classList.add('active');
      }
    } else if (window.location.pathname === '/' || window.location.pathname.endsWith('index.html')) {
      // Highlight Home link if on the homepage
      document.getElementById('home').parentElement.classList.add('active');
    }
  }

  window.addEventListener('scroll', setActiveClass);

  // Smooth scrolling for navbar links
  links.forEach(link => {
    link.addEventListener('click', (e) => {
      const href = link.getAttribute('href');
      if (href.startsWith('#')) {
        // It's a section link
        e.preventDefault();
        const targetId = href.substring(1);
        const targetSection = document.getElementById(targetId);

        if (targetSection) {
          window.scrollTo({
            top: targetSection.offsetTop,
            behavior: 'smooth'
          });
        }
      }
    });
  });

  // Initial check to set active class on page load
  setActiveClass();
});

/* MENU SHOW Y HIDDEN */
const navMenu = document.getElementById("nav-menu"),
  navToggle = document.getElementById("nav-toggle"),
  navClose = document.getElementById("nav-close");

/* MENU SHOW */
if (navToggle) {
  navToggle.addEventListener("click", () => {
    navMenu.classList.add("show-menu");
  });
}

/* MENU HIDDEN */
if (navClose) {
  navClose.addEventListener("click", () => {
    navMenu.classList.remove("show-menu");
  });
}

/* REMOVE MENU MOBILE */
const navLink = document.querySelectorAll(".nav-link");

function linkAction() {
  const navMenu = document.getElementById("nav-menu");
  navMenu.classList.remove("show-menu");
}
navLink.forEach((n) => n.addEventListener("click", linkAction));

/* ACCORDION SKILLS */
const skillsContent = document.getElementsByClassName(
    "skills-container-content"
  ),
  skillsHeader = document.querySelectorAll(".skills-container-header");

function toggleSkills() {
  let itemClass = this.parentNode.className;

  for (i = 0; i < skillsContent.length; i++) {
    skillsContent[i].className = "skills-container-content skills-close";
  }
  if (itemClass === "skills-container-content skills-close") {
    this.parentNode.className = "skills-container-content skills-open";
  }
}

skillsHeader.forEach((el) => {
  el.addEventListener("click", toggleSkills);
});

/* QUALIFICATION TABS */
const tabs = document.querySelectorAll("[data-target]"),
  tabContents = document.querySelectorAll("[data-content]");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = document.querySelector(tab.dataset.target);

    tabContents.forEach((tabContent) => {
      tabContent.classList.remove("qualification-active");
    });
    target.classList.add("qualification-active");

    tabs.forEach((tab) => {
      tab.classList.remove("qualification-active");
    });
    tab.classList.add("qualification-active");
  });
});

/* SERVICES MODAL */
const modalViews = document.querySelectorAll(".services-modal"),
  modalBtns = document.querySelectorAll(".services-button"),
  modalCloses = document.querySelectorAll(".services-modal-close");

let modal = function (modalClick) {
  modalViews[modalClick].classList.add("active-modal");
};

modalBtns.forEach((modalBtn, i) => {
  modalBtn.addEventListener("click", () => {
    modal(i);
  });
});

modalCloses.forEach((modalClose) => {
  modalClose.addEventListener("click", () => {
    modalViews.forEach((modalView) => {
      modalView.classList.remove("active-modal");
    });
  });
});

/* PORTFOLIO SWIPER  */
var swiperPortfolio = new Swiper(".portfolio-container", {
  cssMode: true,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

/* TESTIMONIAL */
// var swiperTestimonial = new Swiper(".testimonial-container", {
//   loop: true,
//   grabCursor: true,
//   spaceBetween: 50,

//   breakpoints: {
//     568: {
//       slidesPerView: 2,
//     },
//   },
// });

/* SCROLL SECTIONS ACTIVE LINK */

const sections = document.querySelectorAll("section[id]");

  function updateActiveSection() {
    const scrollY = window.pageYOffset;

    for (let i = sections.length - 1; i >= 0; i--) {
      const current = sections[i];
      const sectionHeight = current.offsetHeight;
      const sectionTop = current.offsetTop - 50;
      const sectionId = current.getAttribute("id");

      if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
        const navLink = document.querySelector(".nav-menu a[href*=" + sectionId + "]");
        if (navLink) {
          navLink.classList.add("active-link");
        }
      } else {
        const navLink = document.querySelector(".nav-menu a[href*=" + sectionId + "]");
        if (navLink) {
          navLink.classList.remove("active-link");
        }
      }
    }
  }

  window.addEventListener("scroll", updateActiveSection);

  
/* CHANGE BACKGROUND HEADER */
function scrollHeader() {
  const nav = document.getElementById("header");
  // When the scroll is greater than 200 viewport height, add the scroll-header class to the header tag
  if (this.scrollY >= 80) nav.classList.add("scroll-header");
  else nav.classList.remove("scroll-header");
}
window.addEventListener("scroll", scrollHeader);

/* SHOW SCROLL UP */
function scrollUp() {
  const scrollUp = document.getElementById("scroll-up");
  // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
  if (this.scrollY >= 560) scrollUp.classList.add("show-scroll");
  else scrollUp.classList.remove("show-scroll");
}
window.addEventListener("scroll", scrollUp);



/* DARK LIGHT THEME */
const themeButton = document.getElementById("theme-button");
const darkTheme = "dark-theme";
const iconTheme = "fa-moon";

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () =>
  document.body.classList.contains(darkTheme) ? "dark" : "light";
const getCurrentIcon = () =>
  themeButton.classList.contains(iconTheme) ? "fa-moon" : "fa-moon";

// Function to set the theme and icon based on the user's preferred color scheme
function setThemeBySystemPreference() {
  if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    document.body.classList.add(darkTheme);
    themeButton.classList.add(iconTheme);
    // Save the user's preference to local storage
    localStorage.setItem("selected-theme", "dark");
    localStorage.setItem("selected-icon", "fa-moon");
  } else {
    document.body.classList.remove(darkTheme);
    themeButton.classList.remove(iconTheme);
    // Save the user's preference to local storage
    localStorage.setItem("selected-theme", "light");
    localStorage.setItem("selected-icon", "fa-moon");
  }
}

// Call the function to set the theme and icon based on the system preference
setThemeBySystemPreference();

// Toggle theme function remains the same as before (you may keep this code as it is)
function toggleTheme() {
  // Rest of your toggle theme function
}


// Activate / deactivate the theme manually with the button
themeButton.addEventListener("click", () => {
  // Add or remove the dark / icon theme
  document.body.classList.toggle(darkTheme);
  themeButton.classList.toggle(iconTheme);
  // We save the theme and the current icon that the user chose
  localStorage.setItem("selected-theme", getCurrentTheme());
  localStorage.setItem("selected-icon", getCurrentIcon());
});

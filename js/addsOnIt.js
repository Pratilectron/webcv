//************** */ Get the element with the id "project" (the section you want to observe)
const imageSection = document.getElementById("project");
// Get the image element inside the section with id "project"
const img = imageSection.querySelector("img");
// Declare a variable to store the IntersectionObserver instance
let observer;
// Function to start the bounce animation
function startBounce() {
  img.classList.add("bounce");
}
// Function to stop the bounce animation
function stopBounce() {
  img.classList.remove("bounce");
}

// Function to handle the intersection changes
function handleIntersect(entries, observer) {
  entries.forEach((entry) => {
    // Check if the section with id "project" is intersecting (visible in the viewport)
    if (entry.isIntersecting) {
      // If the section is visible, start the bounce animation
      startBounce();
    } else {
      // If the section is not visible, stop the bounce animation
      stopBounce();
    }
  });
}
// Create an Intersection Observer with the handleIntersect function as the callback
observer = new IntersectionObserver(handleIntersect);
// Start observing the section with id "project"
observer.observe(imageSection);

//****************** */ Get a reference to the elements
const homeContent = document.querySelector(".home-content");
const homeBlobImg = document.querySelector(".home-blob-img");

// Add the slideAnimation class to trigger the slideAnimation
homeContent.classList.add("slideAnimation");

// After slideAnimation has completed, add the animLawgo class to trigger animLawgo
homeContent.addEventListener("animationend", () => {
  homeBlobImg.classList.add("animLawgo");
});

// Get a reference to the about section element
const aboutSection = document.querySelector(".about");

// Create an intersection observer
const observerS = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // If the about section is in the viewport, add the animEntrance class
      entry.target.classList.add("animEntrance");
      // Disconnect the observer after the animation has been triggered once
      //observer.disconnect();
    }
  });
});

// Observe the about section element
observerS.observe(aboutSection);

//*********** This code will update the URL based on the currently visible section

// document.addEventListener("DOMContentLoaded", function () {
//     let scrollSpyElements = document.querySelectorAll("section[id]");
//     let scrollSpyOffsets = [];

//     scrollSpyElements.forEach((element) => {
//       scrollSpyOffsets.push(element.offsetTop);
//     });

//     function updateActiveSection() {
//       let currentPosition = window.scrollY;

//       for (let i = scrollSpyOffsets.length - 1; i >= 0; i--) {
//         if (currentPosition >= scrollSpyOffsets[i]) {
//           let sectionId = scrollSpyElements[i].id;
//           let cleanURL = window.location.href.split("#")[0]; // Get the base URL without the fragment identifier
//           history.replaceState({}, "", cleanURL + "#" + sectionId);
//           break;
//         }
//       }
//     }

//     // Call updateActiveSection on scroll
//     window.addEventListener("scroll", updateActiveSection);

//     // Call updateActiveSection once on page load to set the initial URL
//     updateActiveSection();
//   });

/********************************** */
// Function to capitalize the first letter of a word
function capitalizeFirstLetter(word) {
  return word.charAt(0).toUpperCase() + word.slice(1);
}

// Function to update the title based on the currently active section
function updateTitle() {
  var sections = document.querySelectorAll("section");
  for (var i = 0; i < sections.length; i++) {
    var section = sections[i];
    var rect = section.getBoundingClientRect();
    var headerHeight = document.getElementById("header").offsetHeight;
    var threshold = headerHeight * 0.9; // Adjust the threshold as needed
    if (rect.top - threshold <= 0 && rect.bottom >= threshold) {
      var sectionId = section.id;
      var title = capitalizeFirstLetter(sectionId);
      document.title = title + " | Anas Taieb";
      history.replaceState(null, null, "#" + sectionId); // Update the URL without triggering a page refresh
      break;
    }
  }
}

// Smooth scrolling for section navigation
var links = document.querySelectorAll('a[href^="#"]');
links.forEach(function (link) {
  link.addEventListener("click", function (event) {
    event.preventDefault();
    var target = document.querySelector(this.getAttribute("href"));
    if (target) {
      var offsetTop = target.getBoundingClientRect().top;
      var scrollOptions = {
        behavior: "smooth",
      };
      window.scrollBy({
        top: offsetTop,
        left: 0,
        behavior: "smooth",
      });
    }
  });
});

// Check for scroll events and update the title and URL hash accordingly
var isScrolling;
window.addEventListener("scroll", function () {
  updateTitle();
  clearTimeout(isScrolling);
  isScrolling = setTimeout(function () {
    var sections = document.querySelectorAll("section");
    var headerHeight = document.getElementById("header").offsetHeight;
    var threshold = headerHeight * 0.9; // Adjust the threshold as needed
    for (var i = 0; i < sections.length; i++) {
      var section = sections[i];
      var rect = section.getBoundingClientRect();
      if (rect.top - threshold <= 0 && rect.bottom >= threshold) {
        var sectionId = section.id;
        history.pushState(null, null, "#" + sectionId); // Update the URL without triggering a page refresh
        break;
      }
    }
  }, 200); // Adjust the delay as needed to avoid excessive updates
});

// Run the updateTitle() function after the page has finished loading
document.addEventListener("DOMContentLoaded", function () {
  updateTitle();
});

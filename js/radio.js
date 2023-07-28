// Function to generate radio buttons
function generateRadioButtons() {
  var generateBtn = document.getElementById("generateBtn");
  generateBtn.style.display = "none";

  var radioContainer = document.getElementById("radioContainer");

  // Clear any previous radio buttons
  radioContainer.innerHTML = "";

  // Create the radio buttons and labels
  var option1 = document.createElement("input");
  option1.type = "radio";
  option1.name = "options";
  option1.value = "English";
  option1.id = "englishOption";

  var label1 = document.createElement("label");
  label1.setAttribute("for", "englishOption");
  label1.innerText = "English";

  var option2 = document.createElement("input");
  option2.type = "radio";
  option2.name = "options";
  option2.value = "French";
  option2.id = "frenchOption";

  var label2 = document.createElement("label");
  label2.setAttribute("for", "frenchOption");
  label2.innerText = "Français";

  var radioContainer = document.getElementById("radioContainer");
  var radio1Container = document.createElement("div");
  radio1Container.className = "radio-container";
  radio1Container.appendChild(option1);
  radio1Container.appendChild(label1);

  var radio2Container = document.createElement("div");
  radio2Container.className = "radio-container";
  radio2Container.appendChild(option2);
  radio2Container.appendChild(label2);

  radioContainer.appendChild(radio1Container);
  radioContainer.appendChild(radio2Container);

  // Show the download button
  var downloadBtn = document.getElementById("downloadBtn");
  downloadBtn.style.display = "block";
}

// Function to handle download button click
function downloadCV() {
  // Get the selected radio button value
  var selectedOption = document.querySelector(
    'input[name="options"]:checked'
  ).value;

  // Define the CV file path based on the selected option
  var filePath = "";

  if (selectedOption === "English") {
    filePath = "pdf/ACV_en.pdf";
  } else if (selectedOption === "French") {
    filePath = "pdf/ACV_fr.pdf";
  }

  // Perform any necessary processing before downloading the CV

  // Simulating CV download by creating a dummy link
  var link = document.createElement("a");
  link.href = filePath;
  link.download = "AT_" + selectedOption + ".pdf";
  link.click();
}

// Attach event listener to the "Generate Radio Buttons" button
var generateBtn = document.getElementById("generateBtn");
generateBtn.addEventListener("click", generateRadioButtons);

// Attach event listener to the "Download CV" button
var downloadBtn = document.getElementById("downloadBtn");
downloadBtn.addEventListener("click", downloadCV);

/////////*** Smooth scroll by sections */
/*

(function () {
  // Get references to all the section elements
  const sections = document.querySelectorAll('section');

  // Function to handle smooth scrolling to the next or previous section
  function scrollToNextSection(event) {
    let scrollDirection;

    // Check if the event is triggered by a mouse wheel or keyboard
    if (event.deltaMode === 0) {
      // Mouse wheel scrolling
      scrollDirection = Math.sign(event.deltaY);
    } else if (event.type === 'keydown') {
      // Keyboard scrolling (arrow keys, Page Up, Page Down, etc.)
      if (event.key === 'ArrowDown' || event.key === 'PageDown') {
        scrollDirection = 1; // Down
      } else if (event.key === 'ArrowUp' || event.key === 'PageUp') {
        scrollDirection = -1; // Up
      } else {
        return; // Ignore other keys
      }
    } else {
      return; // Ignore other events
    }

    // Find the index of the current section in the list of sections
    const currentSectionIndex = Array.from(sections).findIndex((section) => {
      const rect = section.getBoundingClientRect();
      return rect.top >= 0;
    });

    // Calculate the index of the next section based on the scrolling direction
    const nextSectionIndex = currentSectionIndex + scrollDirection;

    // Check if the next section index is within bounds
    if (nextSectionIndex >= 0 && nextSectionIndex < sections.length) {
      // Scroll to the next or previous section smoothly
      sections[nextSectionIndex].scrollIntoView({ behavior: 'smooth' });
      event.preventDefault(); // Prevent the default scrolling behavior
    }
  }

  // Attach the scrollToNextSection function to the 'wheel' event with { passive: false } option
  document.addEventListener('wheel', scrollToNextSection, { passive: false });

  // Additionally, handle keyboard scrolling
  document.addEventListener('keydown', scrollToNextSection);
})();
*/
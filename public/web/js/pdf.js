const pdfContainer = document.querySelector('.pdf-container');

function createPDF(url) {
  // Create the iframe
  const iframe = document.createElement('iframe');
  iframe.src = url;
  iframe.allowFullScreen = true;
  iframe.width = '100%';
  iframe.height = '100%';

  // Remove any existing iframe
  pdfContainer.innerHTML = '';
  
  // Add the iframe to the container
  pdfContainer.appendChild(iframe);

  // Create a back button
  const backButton = document.createElement('button');
  backButton.textContent = 'Back';
  backButton.classList.add('feedback-button');

  // Add event listener to the back button to hide the pdf container
  backButton.addEventListener('click', () => {
    pdfContainer.style.display = 'none';
  });

  // Add the back button to the pdf container
  pdfContainer.appendChild(backButton);

  // Display the pdf container
  pdfContainer.style.display = 'block';
}

// Get all buttons
const buttons = document.querySelectorAll('.image-button');

// Add event listener to each button
buttons.forEach(button => {
  button.addEventListener('click', () => {
    // Get the url from the button's data attribute
    const url = button.getAttribute('data-url');
    createPDF(url);
  });
});

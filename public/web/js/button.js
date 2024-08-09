const videoContainer = document.querySelector('.video-container');

function createVideo(url) {
  // Get the offset position and size of the video container
  const width = 567; // Fixed width
  const height = 465; // Fixed height

  // Create a new div to hold the iframe
  const iframeContainer = document.createElement('div');
  iframeContainer.style.position = 'absolute'
  iframeContainer.style.width = `${width}px`;
  iframeContainer.style.height = `${height}px`;
  iframeContainer.style.zIndex = '0'; // Make sure it's on top of the video
  iframeContainer.style.backgroundColor = 'white'; // Add a background color to cover the videoContainer

  // Create the iframe
  const iframe = document.createElement('iframe');
  iframe.src = url;
  iframe.frameBorder = '0';
  iframe.allowFullScreen = true;
  iframe.width = '100%';
  iframe.height = '100%';
 

  // Add the iframe to the container
  iframeContainer.appendChild(iframe);

  const backButton = document.createElement('button');
  backButton.textContent = 'Back';
  backButton.classList.add('feedback-button');
  backButton.style.position = 'absolute';
  backButton.style.width = '50px';
  backButton.style.height = '30px';
  backButton.style.bottom = '30px';
  backButton.style.right = '10px';
  backButton.style.zIndex = '2'; // Ensure it's on top of the iframe

  // Add event listener to the back button to remove the iframe container
  backButton.addEventListener('click', () => {
    videoContainer.removeChild(iframeContainer);
  });

  // Add the back button to the iframe container
  iframeContainer.appendChild(backButton);

  // Add the container to the video container
  videoContainer.appendChild(iframeContainer);
}

// Get all buttons
const buttons = document.querySelectorAll('.image-button, .feedback-button, .custom-text');
console.log('Buttons:', buttons);



// Add event listener to each button
buttons.forEach(button => {
  button.addEventListener('click', () => {
    // Get the url from the button's data attribute
    const url = button.getAttribute('data-url');
    createVideo(url);
  });
});

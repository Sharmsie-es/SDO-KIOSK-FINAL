  // Select the anchor tag and iframe elements
  const link = document.getElementById('dynamic-link');
  const iframe = document.getElementById('dynamic-iframe');

  // Add event listener to the anchor tag
  link.addEventListener('click', (event) => {
      // Prevent the default action of the anchor tag
      event.preventDefault();
      
      // Get the URL from the href attribute
      const url = link.getAttribute('href');
      
      // Set the URL to the iframe's src
      iframe.src = url;
      
      // Make sure the iframe is visible
      iframe.style.display = 'block';
  });
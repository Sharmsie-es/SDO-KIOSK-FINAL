// Function to update the time dynamically
function updateTime() {
    const now = new Date();
    const hours = now.getHours();
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const ampm = hours >= 12 ? 'PM' : 'AM';
    const timeString = `${hours % 12 || 12}:${minutes} ${ampm}`;
    document.getElementById('time').innerText = timeString;
}

function updateDate() {
    const now = new Date();
    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const dateString = `${dayNames[now.getDay()]}, ${monthNames[now.getMonth()]} ${now.getDate()}, ${now.getFullYear()}`;
    document.getElementById('date').innerText = dateString;
}

setInterval(updateTime, 1000); // Update time every second
setInterval(updateDate, 1000); // Update date every second
updateTime(); // Initial call for time
updateDate(); // Initial call for date

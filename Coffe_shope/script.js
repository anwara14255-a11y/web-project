 // This function asks the user for confirmation before submitting the order form.
 // If the user clicks "OK", the form will be submitted.
 // If the user clicks "Cancel", the form submission is prevented and an alert is shown.
function confirmOrder(event) {
  var isConfirmed = confirm("هل أنت متأكد من إرسال الطلب؟");

  if (isConfirmed) {
    return true;
  } else {
    event.preventDefault();
    alert("تم إلغاء الطلب.");
    return false;
  }
}

// welcome message//
document.addEventListener("DOMContentLoaded", function() {   //function is executed when home page loads//
  let hour = new Date().getHours();    // get the time from user device//
  let greeting = "";

  if (hour < 12) {  // determine the message based on tie the user log in//
      greeting = "صباح الخير ";
  } else if (hour < 22) {
      greeting = "مساء الخير ";
  } else {
      greeting = "مساء الهدوء";
  }
  
  const welcomeElement = document.getElementById("welcomeMessage");
  if (welcomeElement) {  // display the appropriate message by id fro html//
      welcomeElement.innerText = "Welcome to Bean House | " + greeting;
  }
    changeBackground(hour);
});

function changeBackground(hour) {
  const body = document.body; // Get the <body> element from the page
  // Remove any previous background classes (morning, afternoon, or night)

  body.classList.remove("morning", "afternoon", "night");
  // Add the appropriate background class based on the current hour
 
  if (hour < 12) {
    body.classList.add("morning");  // Before noon → morning background 
  } else if (hour < 18) {
    body.classList.add("afternoon"); // From noon to evening → afternoon background
  } else {
    body.classList.add("night");   // After 6 PM → night background 
    
    
    
  }
}

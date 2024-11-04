// const navLink = document.querySelectorAll('nav__link');
// const windowPathname = window.location.pathname;

// navLink.forEach(navLink=>{
//     if(navLink.href.includes(windowPathname)){
//         navLink.classList.add('active');
//     }
// });

// document.addEventListener('DOMContentLoaded', function() {
//     const navLinks = document.querySelectorAll('.nav__link');
//     const currentPath = window.location.pathname;

//     navLinks.forEach(navLink => {
//         if (navLink.getAttribute('href') === currentPath) {
//             navLink.classList.add('active');
//         }
//     });
// });


// document.addEventListener('DOMContentLoaded', function() {
//   const navLinks = document.querySelectorAll('.nav__link');
//   const currentPath = window.location.pathname;

//   navLinks.forEach(navLink => {
//       const linkPath = navLink.getAttribute('href');

//       if (linkPath === currentPath || (linkPath === '/' && currentPath === '/index.html')) {
//           navLink.classList.add('active');
//       }
//   });
// });

$(document).ready(function() {
  // Load the header content
  $('.head_content2').load('header.html');

  // Handle form submission
  $('#adminForm').on('submit', function(event) {
      event.preventDefault(); // Prevent default form submission

      $.ajax({
          url: 'add_admin.php',
          type: 'POST',
          data: $(this).serialize(),
          success: function(response) {
              if (response.trim() === "Items submitted successfully!") {
                  showSnackbar();
              } else {
                  alert('Error: ' + response);
              }
          },
          error: function() {
              alert('An error occurred while submitting the form.');
          }
      });
  });
});

function showSnackbar() {
  var snackbar = document.getElementById("snackbar");
  snackbar.className = "show";
  setTimeout(function() {
      snackbar.className = snackbar.className.replace("show", "");
  }, 3000);
}

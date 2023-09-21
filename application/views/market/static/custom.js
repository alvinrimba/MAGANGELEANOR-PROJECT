// Add smooth scrolling to all links with the class "smooth-scroll"
$(document).ready(function () {
    $(".smooth-scroll").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});


// Masonry Images
var elem = document.querySelector('.gallery');
var msnry = new Masonry(elem, {
    // options
    itemSelector: '.gallery-item',
    columnWidth: '.gallery-item',
});
// element argument can be a selector string
//   for an individual element
var msnry = new Masonry('.gallery', {
    // options
});





$(document).ready(function(){
    $("#Contact").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollBottom: $(hash).offset().bottom
        }, 800, function(){
          window.location.hash = hash;
        });
      }
    });
  });
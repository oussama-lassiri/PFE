"use strict";

(function ($) {
  "use strict"; // Form

  var contactForm = function contactForm() {
    if ($('#contactForm').length > 0) {
      $("#contactForm").validate({
        rules: {
          name: "required",
          subject: "required",
          email: {
            required: true,
            email: true
          },
          message: {
            required: true,
            minlength: 5
          }
        },
        messages: {
          name: "S'il vous plaît entrez votre nom",
          subject: "Veuillez entrer votre sujet",
          email: "S'il vous plaît, mettez une adresse email valide",
          message: "Veuillez entrer un message"
        },

        /* submit via ajax */
        submitHandler: function submitHandler(form) {
          var $submit = $('.submitting'),
              waitText = 'Envoi...';
          $.ajax({
            type: "POST",
            url: "php/sendEmail.php",
            data: $(form).serialize(),
            beforeSend: function beforeSend() {
              $submit.css('display', 'block').text(waitText);
            },
            success: function success(msg) {
              if (msg == 'OK') {
                $('#form-message-warning').hide();
                setTimeout(function () {
                  $('#contactForm').fadeIn();
                }, 1000);
                setTimeout(function () {
                  $('#form-message-success').fadeIn();
                }, 1400);
                setTimeout(function () {
                  $('#form-message-success').fadeOut();
                }, 8000);
                setTimeout(function () {
                  $submit.css('display', 'none').text(waitText);
                }, 1400);
                setTimeout(function () {
                  $('#contactForm').each(function () {
                    this.reset();
                  });
                }, 1400);
              } else {
                $('#form-message-warning').html(msg);
                $('#form-message-warning').fadeIn();
                $submit.css('display', 'none');
              }
            },
            error: function error() {
              $('#form-message-warning').html("Quelque chose s'est mal passé. Veuillez réessayer.");
              $('#form-message-warning').fadeIn();
              $submit.css('display', 'none');
            }
          });
        } // end submitHandler

      });
    }
  };

  contactForm();
})(jQuery);
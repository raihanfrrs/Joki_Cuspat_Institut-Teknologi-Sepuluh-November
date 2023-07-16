$(document).ready(function() {
    $('#confirmPassword').on('keyup', function() {
      let password = $('#registerPassword').val();
      let confirmPassword = $(this).val();
      let errorParagraph = $('#passwordError');
  
      if (password === confirmPassword) {
        errorParagraph.hide();
        $(this).removeClass('border-red-500');
        $('#submitButton').removeClass('pointer-events-none opacity-50 cursor-not-allowed');
        $(this).removeClass('hidden');
      } else {
        errorParagraph.show();
        $(this).addClass('border-red-500');
        $('#submitButton').addClass('pointer-events-none opacity-50 cursor-not-allowed');
      }
    });

    $('#phone').on('input', function() {
        var text = $(this).val();
        var sanitizedText = text.replace(/\D/g, ''); 

        if (text !== sanitizedText) {
          alert("Input Harus Berupa Angka Saja!");
          $(this).val(sanitizedText);
        }
      });
  });
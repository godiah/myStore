    function showPaymentInstructions(paymentOption) {
      const paymentInstructions = document.querySelectorAll('.payment-instructions');

      paymentInstructions.forEach(function (instructions) {
        if (instructions.dataset.option === paymentOption) {
          instructions.style.display = 'block';
        } else {
          instructions.style.display = 'none';
        }
      });
    }
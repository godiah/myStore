// JavaScript code for handling interactions
const cartTable = document.getElementById('cart');
const deleteButtons = cartTable.getElementsByClassName('delete-btn');

// Add event listeners to delete buttons
for (let i = 0; i < deleteButtons.length; i++) {
  deleteButtons[i].addEventListener('click', function() {
    // Handle delete button click event
    const row = this.parentNode.parentNode;
    row.parentNode.removeChild(row);
  });
}

// JavaScript code for Cart Price Manipulation
  document.addEventListener('DOMContentLoaded', function () {
    const cartTable = document.getElementById('cart');
    const quantityInputs = cartTable.getElementsByClassName('cart-quantity-input');
    const subTotalCells = cartTable.getElementsByClassName('sub-total');

    function updateSubTotal() {
      for (let i = 0; i < quantityInputs.length; i++) {
        const quantity = parseInt(quantityInputs[i].value);
        const price = parseFloat(quantityInputs[i].getAttribute('data-price'));
        const subTotal = quantity * price;
        subTotalCells[i].textContent = '$' + subTotal.toFixed(2);
      }
    }

    for (let i = 0; i < quantityInputs.length; i++) {
      quantityInputs[i].addEventListener('change', updateSubTotal);
    }
  });
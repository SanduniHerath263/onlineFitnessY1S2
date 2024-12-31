		document.addEventListener('input', function (event) {
            if (event.target.classList.contains('quantity')) {
                updateSubtotal();
            }
        });

        document.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove')) {
                event.target.closest('tr').remove();
                updateSubtotal();
            }
        });

        function updateSubtotal() {
            var subtotal = 0;
            var quantityInputs = document.querySelectorAll('.quantity');
            quantityInputs.forEach(function (input) {
                var price = parseFloat(input.getAttribute('data-price'));
                var quantity = parseInt(input.value);
                subtotal += price * quantity;
            });
            document.getElementById('subtotal').textContent = subtotal.toFixed(2);
        }
   
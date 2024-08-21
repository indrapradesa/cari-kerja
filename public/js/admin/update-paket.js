var idField = document.getElementById('id');
var itemField = document.getElementById('item');
var closeButton = document.getElementById('close');

document.querySelectorAll('[data-modal-toggle="updateProductModal"]').forEach(function(button) {
button.addEventListener('click', function() {
    const productId = this.getAttribute('data-id');

     // Add skeleton class before fetching data
     document.querySelectorAll('.skeleton').forEach(function(element) {
        element.classList.add('skeleton');
    });

    fetch(`/admin/packages/${productId}/find`)
        .then(response => response.json())
        .then(productData => {
            // Remove skeleton class after data is loaded
            document.querySelectorAll('.skeleton').forEach(function(element) {
                element.classList.remove('skeleton');
            });

            const dataId = document.getElementById('id');
                dataId.value =  productData.id;
            const nama = document.getElementById('name_package');
                nama.value =  productData.name_package;
            const max_posting = document.getElementById('max_posting');
                max_posting.value =  productData.max_posting;
            const max_highlight = document.getElementById('max_highlight');
                max_highlight.value =  productData.max_highlight;
            const day_duration = document.getElementById('day_duration');
                day_duration.value =  productData.day_duration;
            const price = document.getElementById('price');
                price.value =  productData.price;
            const discount = document.getElementById('discount');
                discount.value =  productData.discount;
        })
        .catch(error => {
            console.error('Error:', error);
            // Remove skeleton class even if there's an error
            document.querySelectorAll('.skeleton').forEach(function(element) {
                element.classList.remove('skeleton');
            });
        });
    });
});

// closeButton.addEventListener('click', function() {
//     supplierField.value = '';
//     itemField.value = '';

// });

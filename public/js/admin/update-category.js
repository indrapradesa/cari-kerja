var idField = document.getElementById('id');
var itemField = document.getElementById('item');
var closeButton = document.getElementById('close');

document.querySelectorAll('[data-modal-toggle="updateCategoryModal"]').forEach(function(button) {
button.addEventListener('click', function() {
    const productId = this.getAttribute('data-id');

    fetch(`/admin/categories/${productId}/find`)
        .then(response => response.json())
        .then(productData => {
            const dataId = document.getElementById('id');
                dataId.value = productData.id;
            const nama = document.getElementById('nameCategory');
                nama.value = productData.name_category;
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});

// closeButton.addEventListener('click', function() {
//     idField.value = '';
//     itemField.value = '';

// });

// js/interaccionProductos.js

const productElements = document.querySelectorAll('.product');
const previewElements = document.querySelectorAll('.preview');
const productsPreviewContainer = document.getElementById('products-preview');

productElements.forEach(productElement => {
    productElement.addEventListener('click', () => {
        const targetId = productElement.getAttribute('data-name');
        const targetPreview = document.querySelector(`.preview[data-target="${targetId}"]`);

        productsPreviewContainer.style.display = 'flex'; // Muestra el contenedor de previsualización
        targetPreview.style.display = 'block'; // Muestra la vista previa del producto
    });
});

previewElements.forEach(previewElement => {
    const closeBtn = previewElement.querySelector('.fa-times');

    closeBtn.addEventListener('click', () => {
        previewElement.style.display = 'none'; // Oculta la vista previa
        productsPreviewContainer.style.display = 'none'; // Oculta el contenedor de previsualización
    });
});

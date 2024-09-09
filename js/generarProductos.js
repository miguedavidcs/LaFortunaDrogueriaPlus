// js/generarProductos.js

const productsContainer = document.getElementById('products-container-prod');
const productsPreview = document.getElementById('products-preview');

products.forEach(product => {
    // Generar HTML para la lista de productos
    const productHTML = `
        <div class="product" data-name="${product.id}">
            <img src="${product.img}" alt="${product.name}">
            <h3>${product.name}</h3>
            <div class="price">${product.price}</div>
        </div>
    `;
    productsContainer.innerHTML += productHTML;

    // Generar HTML para la vista previa de cada producto
    const starsHTML = '<i class="fas fa-star"></i>'.repeat(Math.floor(product.stars)) +
                      (product.stars % 1 !== 0 ? '<i class="fas fa-star-half-alt"></i>' : '');

    const previewHTML = `
        <div class="preview" data-target="${product.id}" style="display: none;">
            <i class="fas fa-times"></i>
            <img src="${product.img}" alt="${product.name}">
            <h3>${product.name}</h3>
            <div class="stars">
                ${starsHTML}
                <span>(${product.reviews} reviews)</span>
            </div>
            <p>${product.description}</p>
            <div class="price">${product.price}</div>
            <div class="buttons">
                <a href="#" class="buy">Buy Now</a>
                <a href="#" class="cart">Add to Cart</a>
            </div>
        </div>
    `;
    productsPreview.innerHTML += previewHTML;
});

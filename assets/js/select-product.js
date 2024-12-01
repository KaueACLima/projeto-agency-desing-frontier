const products = document.querySelectorAll('.product');


products.forEach((product) => {
  product.addEventListener('click', () => {

        if(window.innerWidth < 450){
            window,scrollTo({top: 0, behavior: 'smooth'});
        };
        
        removeProductSelection();

        product.classList.add('selecionado');

        
        changeImageProductSelected(product);

        changeSelectedProductName(product);

        changeProductDescription(product);
    })
});

function changeProductDescription(product) {
    const productDescription = document.getElementById('product-description');
    productDescription.innerText = product.getAttribute('data-description');
}

function changeSelectedProductName(product) {
    const productName = document.getElementById('product-name');
    productName.innerText = product.getAttribute('data-name');
}

function changeImageProductSelected(product) {
    const imageProductLarge = document.querySelector('.big-product');
    const idProduto = product.attributes.id.value;
    imageProductLarge.src = `../../assets/images/card-${idProduto}.png`;
}

function removeProductSelection() {
    const productSelected = document.querySelector('.selected');
    productSelected.classList.remove('.selected');
}
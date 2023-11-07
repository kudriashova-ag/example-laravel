const addToCartForm = document.forms.addToCartForm;

addToCartForm.addEventListener('submit', async (e) => { 
    e.preventDefault();
    const formData = new FormData(addToCartForm);
    const response = await axios.post('/cart/store', formData);
    document.querySelector('#cart .modal-body').innerHTML = response.data
})
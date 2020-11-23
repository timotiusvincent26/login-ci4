const inputs = document.querySelectorAll('.input');
inputs.forEach(input => {
    let parent = input.parentNode.parentNode;
    let i = input.parentNode.parentNode.firstElementChild.firstElementChild;
    let h5 = input.parentNode.firstElementChild
    input.addEventListener('focus', () => {
        parent.classList.replace('border-gray-600', 'border-blue-600');
        i.classList.replace('opacity-50', 'text-blue-700');
        h5.classList.replace('text-xl', 'text-base');
        h5.style.top = '-5px';
    })

    input.addEventListener('blur', () => {
        if (input.value.trim() == '') {
            parent.classList.replace('border-blue-600', 'border-gray-600');
            i.classList.replace('text-blue-700', 'opacity-50');
            h5.classList.replace('text-base', 'text-xl');
            h5.style.top = '50%';
        }
    })

});
window.toggleAccordion = function (button) {

    const item = button.closest('.accordion-item');
    const content = item.querySelector('.accordion-content');

    const isActive = item.classList.contains('active');

    document.querySelectorAll('.accordion-item.active').forEach(activeItem => {
        if (activeItem !== item) {
            activeItem.classList.remove('active');
            activeItem.querySelector('.accordion-content').classList.remove('active');
        }
    });

    item.classList.toggle('active');
    content.classList.toggle('active');

};
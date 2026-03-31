document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.toggle-btn').forEach(button => {
        button.addEventListener('click', () => {
            const id = button.dataset.toggle;
            const content = document.getElementById(id);
            const text = button.querySelector('span');
            const icon = button.querySelector('svg');

            content.classList.toggle('hidden');

            const expanded = !content.classList.contains('hidden');
            text.textContent = expanded ? 'Sembunyikan' : 'Tampilkan lainnya';
            icon.classList.toggle('rotate-180', expanded);
        });
    });
});
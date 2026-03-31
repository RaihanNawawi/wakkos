document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('input', (e) => {
        if (!e.target.classList.contains('price-input')) return;

        const input = e.target;

        // Ambil angka mentah
        let rawValue = input.value.replace(/\D/g, '');

        // Simpan ke dataset (untuk backend)
        input.dataset.value = rawValue;

        if (!rawValue) {
            input.value = '';
            return;
        }

        // Format Rupiah
        const formatted = new Intl.NumberFormat('id-ID').format(rawValue);

        input.value = `Rp${formatted}`;
    });
});
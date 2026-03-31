function initShareButtons() {
    document.querySelectorAll('.shareBtn').forEach(btn => {
        if (btn.dataset.initialized) return;

        btn.dataset.initialized = "true";

        btn.addEventListener('click', async () => {
            if (navigator.share) {
                try {
                    await navigator.share({
                        title: document.title,
                        text: 'Lihat kost ini:',
                        url: window.location.href
                    });
                } catch (err) {
                    console.log('Share cancelled', err);
                }
            } else {
                alert('Fitur share tidak didukung di browser ini.');
            }
        });
    });
}

document.addEventListener("DOMContentLoaded", initShareButtons);
document.addEventListener("livewire:navigated", initShareButtons);
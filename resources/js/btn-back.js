window.handleBack = function () {
    if (window.history.length > 1) {
        window.history.back();
    } else {
        window.location.href = '/homepage';
    }
};

// Show button only if possible
window.addEventListener('DOMContentLoaded', () => {
    const backBtn = document.getElementById('backBtn');
    if (window.history.length > 1 && backBtn) {
        backBtn.classList.remove('hidden');
    }
});
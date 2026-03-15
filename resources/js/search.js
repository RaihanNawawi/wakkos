window.openSearch = function () {

const layer = document.getElementById('search-layer');
const input = document.getElementById('search-input');

layer.classList.remove('hidden');

setTimeout(() => input.focus(), 50);

}

window.closeSearch = function () {

document.getElementById('search-layer').classList.add('hidden');

}
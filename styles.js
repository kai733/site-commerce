let currentIndex = {};

function initCarousel(id) {
    currentIndex[id] = 0;
    const container = document.getElementById(id);
    const items = container.getElementsByClassName('carousel-item');
    if (items.length > 0) {
        items[0].style.display = 'block';
    }
}

function showSlide(id, index) {
    const container = document.getElementById(id);
    const items = container.getElementsByClassName('carousel-item');
    if (index >= items.length) {
        currentIndex[id] = 0;
    } else if (index < 0) {
        currentIndex[id] = items.length - 1;
    } else {
        currentIndex[id] = index;
    }
    for (let i = 0; i < items.length; i++) {
        items[i].style.display = 'none';
    }
    items[currentIndex[id]].style.display = 'block';
}

function nextSlide(id) {
    showSlide(id, currentIndex[id] + 1);
}

function prevSlide(id) {
    showSlide(id, currentIndex[id] - 1);
}

document.addEventListener('DOMContentLoaded', () => {
    initCarousel('featured-products');
    initCarousel('customer-reviews');
});
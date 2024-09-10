const videoCards = [...document.querySelectorAll('.video-card')];

videoCards.forEach(item => {
    item.addEventListener('mouseover', () => {
        let video = item.children[1];
        video.play();
    })

    item.addEventListener('mouseleave', () => {
        let video = item.children[1];
        video.pause();
    })
})
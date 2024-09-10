let cardContainers = [...document.querySelectorAll('.media-container')];
let prevBtns = [...document.querySelectorAll('.prev-btn')];
let nxtBtns = [...document.querySelectorAll('.nxt-btn')];

// Função para atualizar o valor de scrollOffset com base na largura da tela
function updateScrollOffset() {
    let screenWidth = window.innerWidth;

    // Definindo scrollOffset com base na largura da tela
    let scrollOffset = screenWidth < 700 ? 85 : 200;

    // Adicionando listeners de evento de clique aos botões
    cardContainers.forEach((item, i) => {
        let containerDimensions = item.getBoundingClientRect();
        let containerWidth = containerDimensions.width;

        nxtBtns[i].addEventListener('click', () => {
            item.scrollLeft += containerWidth - scrollOffset;
        });

        prevBtns[i].addEventListener('click', () => {
            item.scrollLeft -= containerWidth + scrollOffset;
        });
    });
}

// Atualizando a função
updateScrollOffset();

// Adicionar um ouvinte de evento de redimensionamento da janela para chamar a função de atualização
window.addEventListener('resize', updateScrollOffset);
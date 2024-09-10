let carousel = document.querySelector('.carousel');
let sliders = [];

let slideIndex = 0;

let movies = [
    {
        name: 'TOP-GUN Maverick',
        des: 'Um piloto veterano, Maverick, retorna para treinar uma nova geração de aviadores de elite. Usando suas habilidades excepcionais, ele guia os jovens em missões desafiadoras e enfrenta ameaças perigosas, mostrando que a verdadeira coragem vai além dos céus.',
        image: '/img/slider2.PNG' // Corrigido aqui
    },
    
    {
        name: 'FROZEN II',
        des: 'Elsa e Anna embarcam em uma jornada perigosa para descobrir a origem dos poderes de gelo de Elsa e salvar seu reino de uma antiga magia, explorando temas de amor, família e autodescoberta.',
        image: '/img/slider3.PNG' // Corrigido aqui
    }
    ,

    {
        name: 'X-MEN 97',
        des: ' A história de um grupo de mutantes com habilidades extraordinárias, enfrentando desafios pessoais e sociais enquanto lutam para proteger um mundo que os teme e os odeia.',
        image: '/img/slider1.PNG' // Corrigido aqui
    },

    {
        name: 'Barbie',
        des: 'Uma boneca que vive na perfeita Barbielândia é expulsa por não ser suficientemente perfeita. Em uma jornada no mundo real, ela descobre que a verdadeira beleza está na imperfeição e encontra seu verdadeiro propósito.',
        image: '/img/slider4.PNG' // Corrigido aqui
    },



];

const createSlide = () => {
    if (slideIndex >= movies.length) {
        slideIndex = 0;
    }

    let slide = document.createElement('div');
    let imgElement = document.createElement('img');
    let content = document.createElement('div');
    let h1 = document.createElement('h1');
    let p = document.createElement('p');

    imgElement.src = movies[slideIndex].image; // Corrigido aqui
    h1.appendChild(document.createTextNode(movies[slideIndex].name));
    p.appendChild(document.createTextNode(movies[slideIndex].des));
    content.appendChild(h1);
    content.appendChild(p);
    slide.appendChild(content);
    slide.appendChild(imgElement);
    carousel.appendChild(slide);

    slideIndex++;

    slide.className = 'Slider';
    content.className = 'slider-content';
    h1.className = 'movie-title';
    p.className = 'movie-desc';

    sliders.push(slide);

    if (sliders.length) {
        sliders[0].style.marginLeft = `calc(-${100 * (sliders.length - 2)}% - ${30 * (sliders.length - 2)}px)`;
    }
};

for (let i = 0; i < 6; i++) {
    createSlide();
}

setInterval(() => {
    createSlide();

}, 3000);
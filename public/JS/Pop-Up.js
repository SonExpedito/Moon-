function openPopup(titulo, descricao, video) {
    // Adiciona parâmetros ao URL do vídeo
    var videoURL = video + "?modestbranding=1&rel=0&showinfo=0";
    document.getElementById("popupTitulo").innerText = titulo;
    document.getElementById("popupDescricao").innerText = descricao;
    document.getElementById("popupVideo").innerHTML = "<iframe width='560' height='315' src='" + videoURL + "' frameborder='0' allowfullscreen></iframe>";
    document.getElementById("popup").style.display = "block";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
    document.getElementById("popupVideo").innerHTML = "";
}


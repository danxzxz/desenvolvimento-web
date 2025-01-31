function carregaArquivo(container, arquivo){
    fetch(arquivo).
    then(arq => arq.text()).
    then(elemento => {
        document.getElementById("container").innerHTML = elemento;
    }).
    catch(erro => console.log('erro ao carregar o arquivo' + arquivo));
}

carregaArquivo('container-sidebar', 'sidebar-html');
carregaArquivo('container-mavbar', 'navbar-html');
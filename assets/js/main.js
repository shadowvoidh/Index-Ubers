document.addEventListener("DOMContentLoaded", () => {
    console.log("Sistema Tático da Ubers Iniciado... 🇮🇹💎");

    // ======================================================
    // LOGICA DOS BOTÕES DE STATUS (PEGA TODOS OS JOGADORES)
    // ======================================================
    const botoesToggle = document.querySelectorAll('.btn-toggle-perfil');
    
    botoesToggle.forEach(btn => {
        btn.addEventListener('click', function() {
            // Encontra o bloco de perfil mais próximo deste botão clicado
            const secaoPai = this.closest('.secao-perfil');
            const conteudoPerfil = secaoPai.querySelector('.conteudo-perfil-bloco');
            
            if (conteudoPerfil) {
                if (conteudoPerfil.classList.contains('hidden')) {
                    conteudoPerfil.classList.remove('hidden');
                    this.innerText = 'Fechar Status';
                } else {
                    conteudoPerfil.classList.add('hidden');
                    this.innerText = 'Status and Profile';
                }
            }
        });
    });

    // ======================================================
    // LOGICA DOS PLAYERS DE MÚSICA (CADA JOGADOR TEM O SEU)
    // ======================================================
    const botoesPlay = document.querySelectorAll('.botao-play-player');

    botoesPlay.forEach(btnPlay => {
        btnPlay.addEventListener('click', function() {
            // Encontra a seção ou container onde o player de música está embutido
            const containerPai = this.closest('.tela-projeto') || this.closest('#root');
            const musica = containerPai.querySelector('.musica-mp3-player');

            if (musica) {
                if (musica.paused) {
                    // Pausa qualquer outra música que esteja tocando antes de iniciar a nova
                    document.querySelectorAll('.musica-mp3-player').forEach(m => m.pause());
                    document.querySelectorAll('.botao-play-player').forEach(b => b.innerText = '▶');

                    musica.play()
                        .then(() => {
                            this.innerText = '⏸';
                            console.log("Áudio iniciado com sucesso!");
                        })
                        .catch(error => {
                            console.error("Erro ao tocar música: interaja com a página antes.", error);
                        });
                } else {
                    musica.pause();
                    this.innerText = '▶';
                }
            }
        });
    });

    // ======================================================
    // FUNÇÃO MASTER: GERENCIADOR DE SEQUÊNCIAS DE GIFS
    // ======================================================
    function iniciarSequenciaJogador(idPlayer, listaGifs) {
        const tela = document.getElementById(idPlayer);
        if (!tela || !listaGifs || listaGifs.length === 0) return;

        let indiceAtual = 0;

        function proximoItem() {
            indiceAtual++;
            if (indiceAtual < listaGifs.length) {
                const proximo = listaGifs[indiceAtual];
                tela.src = proximo.src;
                setTimeout(proximoItem, proximo.tempo);
            } else {
                console.log(`Fim da sequência no elemento: ${idPlayer}`);
            }
        }

        setTimeout(proximoItem, listaGifs[0].tempo);
    }

    // ======================================================
    // DISPARO DAS SEQUÊNCIAS DE GIFS DO BANCO DE DADOS
    // ======================================================

    // BAROU
iniciarSequenciaJogador('player-barou', [
    { src: "/assets/img/gif/barou-barou-goal.gif", tempo: 5800 }
]);

// DON LORENZO
iniciarSequenciaJogador('player-lorenzo', [
    { src: "/assets/img/gif/don-lorenzo-music.gif", tempo: 4700 }
]);

// AIKU
iniciarSequenciaJogador('player-aiku', [
    { src: "/assets/img/gif/aikugif1.gif", tempo: 5000 }
]);

    // ARYU
    iniciarSequenciaJogador('player-aryu', [
        { src: "/assets/img/gif/aryujyubei.gif", tempo: 5800 }
    ]);

    // NIKO
    iniciarSequenciaJogador('player-niko', [
        { src: "/assets/img/gif/niko2.gif", tempo: 3000 }
    ]);

    // SENDOU
    iniciarSequenciaJogador('player-sendou', [
        { src: "/assets/img/gif/sendou.gif", tempo: 5800 }
    ]);
});

// FUNÇÃO GLOBAL DE NAVEGAÇÃO SPA
function mudarTela(idAlvo) {
    document.querySelectorAll('.tela-projeto').forEach(tela => {
        tela.classList.remove('ativa');
    });

    const telaDestino = document.getElementById(`tela-${idAlvo}`);
    if (telaDestino) {
        telaDestino.classList.add('ativa');
        window.scrollTo(0, 0);
        console.log(`Metavisão Ativada: Transição para ${idAlvo} 👁️`);
    }
}
// ======================================================
//Testes para o futuro, não mexer por enquanto
// ======================================================

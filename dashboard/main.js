"use strict";
/*/////////////////////////////////////////////////////////
Leave it alone, that's art. (@shadow_voidh)
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\*/
document.addEventListener("DOMContentLoaded", () => {
    console.log("Sistema Tático da Ubers Iniciado... 🇮🇹💎");
    // ======================================================
    // LÓGICA DOS BOTÕES DE STATUS (PEGA TODOS OS JOGADORES)
    // ======================================================
    const botoesToggle = document.querySelectorAll('.btn-toggle-perfil');
    botoesToggle.forEach((btn) => {
        btn.addEventListener('click', function () {
            const secaoPai = this.closest('.secao-perfil');
            if (!secaoPai)
                return;
            const conteudoPerfil = secaoPai.querySelector('.conteudo-perfil-bloco');
            if (conteudoPerfil) {
                if (conteudoPerfil.classList.contains('hidden')) {
                    conteudoPerfil.classList.remove('hidden');
                    this.innerText = 'Fechar Status';
                }
                else {
                    conteudoPerfil.classList.add('hidden');
                    this.innerText = 'Status and Profile';
                }
            }
        });
    });
    // ======================================================
    // LÓGICA DOS PLAYERS DE MÚSICA (CADA JOGADOR TEM O SEU)
    // ======================================================
    const botoesPlay = document.querySelectorAll('.botao-play-player');
    botoesPlay.forEach((btnPlay) => {
        btnPlay.addEventListener('click', function () {
            const containerPai = this.closest('.tela-projeto') || this.closest('#root');
            if (!containerPai)
                return;
            const musica = containerPai.querySelector('.musica-mp3-player');
            if (musica) {
                if (musica.paused) {
                    document.querySelectorAll('.musica-mp3-player').forEach((m) => m.pause());
                    document.querySelectorAll('.botao-play-player').forEach((b) => (b.innerText = '▶'));
                    musica
                        .play()
                        .then(() => {
                        this.innerText = '⏸';
                        console.log("Áudio iniciado com sucesso!");
                    })
                        .catch((error) => {
                        console.error("Erro ao tocar música: interaja com a página antes.", error);
                    });
                }
                else {
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
        const primeiroGif = listaGifs[0];
        if (!tela || !primeiroGif)
            return;
        let indiceAtual = 0;
        function proximoItem() {
            indiceAtual++;
            if (indiceAtual < listaGifs.length) {
                const proximo = listaGifs[indiceAtual];
                if (proximo && tela) {
                    tela.src = proximo.src;
                    setTimeout(proximoItem, proximo.tempo);
                }
            }
            else {
                console.log(`Fim da sequência no elemento: ${idPlayer}`);
            }
        }
        setTimeout(proximoItem, primeiroGif.tempo);
    }
    // ======================================================
    // DISPARO DAS SEQUÊNCIAS DE GIFS DO BANCO DE DADOS
    // ======================================================
    // BAROU
    iniciarSequenciaJogador('player-barou', [
        { src: "/assets/img/gif/barou-barou-goal.gif", tempo: 5800 }
    ]);
    // DON LORENZO
    iniciarSequenciaJogador('player-zombie', [
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
// ======================================================
// FUNÇÕES GLOBAIS (Acessíveis via onclick no HTML)
// ======================================================
function mudarTela(idAlvo) {
    const todasTelas = document.querySelectorAll('.tela-projeto');
    todasTelas.forEach((tela) => {
        tela.classList.remove('ativa');
        tela.style.display = 'none';
    });
    const idProcurado = `tela-${idAlvo}`;
    const telaDestino = document.getElementById(idProcurado);
    if (telaDestino) {
        telaDestino.classList.add('ativa');
        telaDestino.style.display = 'block'; // Força exibir a tela encontrada
        window.scrollTo(0, 0);
        console.log(`Metavisão Ativada: Transição para #${idProcurado} 👁️`);
    }
    else {
        console.error(`[ERRO] Elemento com ID '${idProcurado}' não foi encontrado no DOM!`);
    }
}
function trocarFormacao(indexFormacao) {
    const todasFormacoes = document.querySelectorAll('.container-formacao');
    todasFormacoes.forEach((formacao) => (formacao.style.display = 'none'));
    const formacaoAtiva = document.getElementById(`formacao-${indexFormacao}`);
    if (formacaoAtiva) {
        formacaoAtiva.style.display = 'flex';
    }
}
function trocarFormacaoTatica(idFormacao) {
    const abas = document.querySelectorAll('.layout-estrategia-aba');
    abas.forEach((aba) => {
        aba.classList.remove('ativa');
        aba.style.setProperty('display', 'none', 'important');
    });
    const abaAtiva = document.getElementById(idFormacao);
    if (abaAtiva) {
        abaAtiva.classList.add('ativa');
        abaAtiva.style.setProperty('display', 'flex', 'important');
    }
    else {
        console.error("Aba não encontrada com o ID:", idFormacao);
    }
}
// Vincula no objeto window para o HTML reconhecer
window.mudarTela = mudarTela;
window.trocarFormacao = trocarFormacao;
window.trocarFormacaoTatica = trocarFormacaoTatica;

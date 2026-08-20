/*/////////////////////////////////////////////////////////
Leave it alone, that's art. (@shadow_voidh)
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\*/

// Estrutura de dados para os GIFs da sequência
interface ItemGif {
  src: string;
  tempo: number;
}

document.addEventListener("DOMContentLoaded", (): void => {
  console.log("Sistema Tático da Ubers Iniciado... 🇮🇹💎");

  // ======================================================
  // LÓGICA DOS BOTÕES DE STATUS (PEGA TODOS OS JOGADORES)
  // ======================================================
  const botoesToggle = document.querySelectorAll<HTMLButtonElement>('.btn-toggle-perfil');

  botoesToggle.forEach((btn: HTMLButtonElement) => {
    btn.addEventListener('click', function (this: HTMLButtonElement): void {
      const secaoPai = this.closest<HTMLElement>('.secao-perfil');
      if (!secaoPai) return;

      const conteudoPerfil = secaoPai.querySelector<HTMLElement>('.conteudo-perfil-bloco');

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
  // LÓGICA DOS PLAYERS DE MÚSICA (CADA JOGADOR TEM O SEU)
  // ======================================================
  const botoesPlay = document.querySelectorAll<HTMLButtonElement>('.botao-play-player');

  botoesPlay.forEach((btnPlay: HTMLButtonElement) => {
    btnPlay.addEventListener('click', function (this: HTMLButtonElement): void {
      const containerPai = this.closest<HTMLElement>('.tela-projeto') || this.closest<HTMLElement>('#root');
      if (!containerPai) return;

      const musica = containerPai.querySelector<HTMLAudioElement>('.musica-mp3-player');

      if (musica) {
        if (musica.paused) {
          document.querySelectorAll<HTMLAudioElement>('.musica-mp3-player').forEach((m) => m.pause());
          document.querySelectorAll<HTMLButtonElement>('.botao-play-player').forEach((b) => (b.innerText = '▶'));

          musica
            .play()
            .then((): void => {
              this.innerText = '⏸';
              console.log("Áudio iniciado com sucesso!");
            })
            .catch((error: unknown): void => {
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
  function iniciarSequenciaJogador(idPlayer: string, listaGifs: ItemGif[]): void {
    const tela = document.getElementById(idPlayer) as HTMLImageElement | null;
    const primeiroGif = listaGifs[0];

    if (!tela || !primeiroGif) return;

    let indiceAtual = 0;

    function proximoItem(): void {
      indiceAtual++;
      if (indiceAtual < listaGifs.length) {
        const proximo = listaGifs[indiceAtual];

        if (proximo && tela) {
          tela.src = proximo.src;
          setTimeout(proximoItem, proximo.tempo);
        }
      } else {
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

// ======================================================
// FUNÇÕES GLOBAIS (Acessíveis via onclick no HTML)
// ======================================================

function mudarTela(idAlvo: string): void {
  document.querySelectorAll<HTMLElement>('.tela-projeto').forEach((tela) => {
    tela.classList.remove('ativa');
  });

  const telaDestino = document.getElementById(`tela-${idAlvo}`);
  if (telaDestino) {
    telaDestino.classList.add('ativa');
    window.scrollTo(0, 0);
    console.log(`Metavisão Ativada: Transição para ${idAlvo} 👁️`);
  }
}

function trocarFormacao(indexFormacao: string | number): void {
  const todasFormacoes = document.querySelectorAll<HTMLElement>('.container-formacao');
  todasFormacoes.forEach((formacao) => (formacao.style.display = 'none'));

  const formacaoAtiva = document.getElementById(`formacao-${indexFormacao}`);
  if (formacaoAtiva) {
    formacaoAtiva.style.display = 'flex';
  }
}

function trocarFormacaoTatica(idFormacao: string): void {
  const abas = document.querySelectorAll<HTMLElement>('.layout-estrategia-aba');
  abas.forEach((aba) => {
    aba.classList.remove('ativa');
    aba.style.setProperty('display', 'none', 'important');
  });

  const abaAtiva = document.getElementById(idFormacao);
  if (abaAtiva) {
    abaAtiva.classList.add('ativa');
    abaAtiva.style.setProperty('display', 'flex', 'important');
  } else {
    console.error("Aba não encontrada com o ID:", idFormacao);
  }
}

// Vincula no objeto window para o HTML reconhecer
(window as any).mudarTela = mudarTela;
(window as any).trocarFormacao = trocarFormacao;
(window as any).trocarFormacaoTatica = trocarFormacaoTatica;
<?php
require_once 'includes/jogadores.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Time que o Barou Roubou</title>
    <link rel="icon" type="image/x-icon" href="assets/img/img/favicon.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&family=JetBrains+Mono&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
</head>
<body>

<!--/////////////////////////////////////////////////////////
Leave it alone, that's art. (@shadow_voidh)
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <!-- Area Tecnica -->
    <nav class="area-tecnica-menu">
        <button onclick="mudarTela('formacao')">Quadro Tático</button>
        <span class="separador">|</span>
        <button onclick="mudarTela('treinador')">Formação</button>
        <span class="separador">|</span>
        <button onclick="mudarTela('regra')">Regras</button>
    </nav>

    <!-- Container Principal -->
    <main id="container-principal">

        <!-- Tela Inicial -->
        <section id="tela-formacao" class="tela-projeto ativa">
            <div class="container-tatico">
                <div class="campo-ubers">
                    <div class="jogador-pos barou" onclick="mudarTela('barou')">Barou</div>
                    <div class="jogador-pos sendou" onclick="mudarTela('sendou')">Sendou</div>
                    <div class="jogador-pos niko" onclick="mudarTela('niko')">Niko</div>
                    <div class="jogador-pos zombie" onclick="mudarTela('zombie')">Zombie</div>
                    <div class="jogador-pos aiku" onclick="mudarTela('aiku')">Aiku</div>
                    <div class="jogador-pos aryu" onclick="mudarTela('aryu')">Aryu</div>
                </div>
                <div class="card-treinador">
                    <div class="badge-treinador">Master Coach</div>
                    <img src="assets/img/img/snuffy.jpg" alt="Marc Snuffy" class="foto-treinador">
                    <div class="info-treinador">
                        <h2>Marc Snuffy</h2>
                        <p class="subtitulo">Estrategista Chefe</p>
                        <div class="frase-snuffy">
                            "O talento individual é apenas a engrenagem de um sistema perfeito."
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tela de Regras -->
        <section id="tela-regra" class="tela-projeto">
            <button class="btn-voltar" onclick="mudarTela('formacao')">← Voltar ao Menu</button>
            <div class="conteudo-contrato-omerta" style="padding: 20px 0; display: flex; justify-content: center; align-items: center; min-height: 90vh;">
                <div class="contract-container">
                    <div class="corner top-left"></div>
                    <div class="corner top-right"></div>
                    <div class="corner bottom-left"></div>
                    <div class="corner bottom-right"></div>

                    <div class="header-meta">
                        <span>UBERS • OPERAÇÃO OMERTÀ</span>
                        <div>NÍVEL S-RANK <span class="status-dot"></span></div>
                    </div>

                    <div class="title-section">
                        <h1 class="title-gold">Contrato de Adesão</h1>
                        <div class="subtitle">Ao Sistema Integrado Ubers</div>
                        <p style="text-align: center; font-size: 10px; color: var(--text-dim); font-family: var(--font-mono); margin-top: 20px; letter-spacing: 1px;">
                            DOCUMENTO CRIPTOGRAFADO • ACESSO RESTRITO A MEMBROS DA ELITE
                        </p>
                    </div>

                    <div class="divider"></div>

                    <div class="clause">
                        <span class="clause-title"><span>CLÁUSULA I</span> O Silêncio (Omertà)</span>
                        <p class="clause-body">O silêncio é nossa moeda mais valiosa. O que é visto, ouvido ou realizado dentro da organização jamais deve ser compartilhado. Violações resultam em rescisão irrevogável.</p>
                    </div>

                    <div class="clause">
                        <span class="clause-title"><span>CLÁUSULA II</span> Lealdade Absoluta</span>
                        <p class="clause-body">A hierarquia é sagrada. Ordens não são sugestões. A lealdade ao sistema precede qualquer interesse pessoal ou externo.</p>
                    </div>

                    <div class="clause">
                        <span class="clause-title"><span>CLÁUSULA III</span> Permanência Perpétua</span>
                        <p class="clause-body">A entrada é uma escolha; a permanência é uma condição. Uma vez sob o brasão dos Ubers, o vínculo é indissolúvel.</p>
                    </div>

                    <div class="verification-seal">
                        <div class="seal-text">STATUS: VERIFICADO PELO MASTER SNUFFY</div>
                        <div style="font-size: 1.2rem; margin-top: 10px; letter-spacing: 2px;">TODAS AS CONDIÇÕES APROVADAS</div>
                    </div>

                    <div style="text-align: center; margin: 30px 0;">
                        <button class="btn-accept" onclick="mudarTela('formacao')" style="cursor: pointer;">Aceitar Termos</button>
                    </div>

                    <footer>TRANSMISSÃO MONITORADA • SISTEMA DE SEGURANÇA UBERS V4.0</footer>
                </div>
            </div>
        </section>

        <!-- Tela de Campo (Estratégias) -->
        <section id="tela-treinador" class="tela-projeto">
            <div class="conteudo-paginas-novas" style="padding: 20px; text-align: center; color: #fff;">
                <h2 style="color: var(--gold-primary); font-family: var(--font-mono); letter-spacing: 2px; margin-bottom: 5px;">
                    // DISPOSIÇÃO EM CAMPO (ESTRATÉGIA)
                </h2>
                <p style="color: var(--text-dim); font-size: 12px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">
                    Configuração posicional das peças táticas do Master Coach Marc Snuffy
                </p>

                <div class="botoes-formacao" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 25px;">
                    <button type="button" onclick="trocarFormacaoTatica('formacao-1')">STARTING 11</button>
                    <button type="button" onclick="trocarFormacaoTatica('formacao-2')">STAR CHANGE SYSTEM</button>
                    <button type="button" onclick="trocarFormacaoTatica('formacao-3')">FINAL FORMATION</button>
                </div>

                <div class="layout-estrategia">
                    <!-- Formação 1 -->
                    <div id="formacao-1" class="layout-estrategia-aba ativa">
                        <div class="painel-reservas">
                            <div class="secao-banco">
                                <div class="titulo-banco">COACH</div>
                                <div class="item-reserva"><img src="assets/img/img/snuffy.jpg" class="foto-reserva" onerror="this.src='assets/img/img/snuffy.png'"><span>Marc Snuffy</span></div>
                            </div>
                            <hr class="divisor-banco">
                            <div class="secao-banco">
                                <div class="titulo-banco">BANCO</div>
                                <div class="item-reserva"><img src="assets/img/img/Gen_Fukaku.webp" class="foto-reserva"><span>G. Fukaku</span></div>
                                <div class="item-reserva"><img src="assets/img/img/Yukio_Ishikari.webp" class="foto-reserva"><span>Y. Ishikari</span></div>
                                <div class="item-reserva"><img src="assets/img/img/Kyohei_Shiguma.webp" class="foto-reserva"><span>K. Shiguma</span></div>
                                <div class="item-reserva"><img src="assets/img/img/Shingen_Tanaka.webp" class="foto-reserva"><span>S. Tanaka</span></div>
                            </div>
                        </div>

                        <div class="campo-ubers">
                            <div class="linha ataque">
                                <div class="jogador-pos barou" onclick="mudarTela('barou')" style="cursor: pointer;"><img src="assets/img/img/barou.jpg" alt="Barou" class="img-jogador"><span>Barou (O Rei)</span></div> 
                            </div>
                            <div class="linha S ataque">
                                <div class="jogador-pos sendou" onclick="mudarTela('sendou')" style="cursor: pointer;"><img src="assets/img/img/Shuto_Sendo.webp" alt="Sendou" class="img-jogador"><span>Sendou</span></div>
                            </div>
                            <div class="linha meio">
                                <div class="jogador-pos abdi"><img src="assets/img/img/abdi.png" class="img-jogador"><span>Abdi</span></div>
                                <div class="jogador-pos drago"><img src="assets/img/img/DRAGO.webp" class="img-jogador"><span>Drago</span></div>
                                <div class="jogador-pos peron"><img src="assets/img/img/PERON.webp" class="img-jogador"><span>Peron</span></div>
                                <div class="jogador-pos rico"><img src="assets/img/img/RICO.webp" class="img-jogador"><span>Rico</span></div>
                            </div>
                            <div class="linha vol">
                                <div class="jogador-pos niko" onclick="mudarTela('niko')" style="cursor: pointer;"><img src="assets/img/img/NIko.png" class="img-jogador"><span>Niko</span></div>
                            </div>
                            <div class="linha defesa">
                                <div class="jogador-pos aryu" onclick="mudarTela('aryu')" style="cursor: pointer;"><img src="assets/img/img/aryumusic.png" class="img-jogador"><span>Aryu</span></div>
                                <div class="jogador-pos lorenzo" onclick="mudarTela('zombie')" style="cursor: pointer;"><img src="assets/img/img/Lorenzo.webp" class="img-jogador"><span>Lorenzo</span></div>
                                <div class="jogador-pos aiku" onclick="mudarTela('aiku')" style="cursor: pointer;"><img src="assets/img/img/aikuu.jpg" class="img-jogador"><span>Aiku</span></div>
                            </div>
                            <div class="linha goleiro">
                                <div class="jogador-pos canali"><img src="assets/img/img/Canali.webp" class="img-jogador"><span>Canali</span></div>
                            </div>
                        </div>

                        <div class="card-treinador">
                            <div class="badge-treinador">TREINADOR CHEFE</div>
                            <img src="assets/img/img/snu.jpg" alt="Marc Snuffy" class="foto-treinador">
                            <div class="info-treinador">
                                <h2>Marc Snuffy</h2>
                                <p class="subtitulo">Estrategista Chefe</p>
                                <div class="frase-snuffy">
                                    "Se você não consegue ser uma peça útil dentro de uma engrenagem, você não é um gênio incompreendido... você é apenas uma peça descartável."
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Formação 2 -->
                    <div id="formacao-2" class="layout-estrategia-aba">
                        <div class="painel-reservas">
                            <div class="secao-banco">
                                <div class="titulo-banco">COACH</div>
                                <div class="item-reserva"><span>EM JOGO</span></div>
                            </div>
                            <hr class="divisor-banco">
                            <div class="secao-banco">
                                <div class="titulo-banco">BANCO</div>
                                <div class="item-reserva"><img src="assets/img/img/Canali.webp" class="foto-reserva"><span>Canali</span></div>
                                <div class="item-reserva"><img src="assets/img/img/Shuto_Sendo.webp" class="foto-reserva"><span>Sendou</span></div>
                                <div class="item-reserva"><img src="assets/img/img/Yukio_Ishikari.webp" class="foto-reserva"><span>Y. Ishikari</span></div>
                                <div class="item-reserva"><img src="assets/img/img/Kyohei_Shiguma.webp" class="foto-reserva"><span>K. Shiguma</span></div>
                                <div class="item-reserva"><img src="assets/img/img/Shingen_Tanaka.webp" class="foto-reserva"><span>S. Tanaka</span></div>
                            </div>
                        </div>

                        <div class="campo-ubers">
                            <div class="linha ataque">
                                <div class="jogador-pos barou" onclick="mudarTela('barou')" style="cursor: pointer;"><img src="assets/img/img/barou.jpg" class="img-jogador"><span>Barou (O Rei)</span></div> 
                            </div>
                            <div class="linha S ataque">
                                <div class="jogador-pos drago"><img src="assets/img/img/DRAGO.webp" class="img-jogador"><span>Drago</span></div>
                                <div class="jogador-pos niko" onclick="mudarTela('niko')" style="cursor: pointer;"><img src="assets/img/img/NIko.png" class="img-jogador"><span>Niko</span></div>
                                <div class="jogador-pos peron"><img src="assets/img/img/PERON.webp" class="img-jogador"><span>Peron</span></div>
                            </div>
                            <div class="linha meio">
                                <div class="jogador-pos lorenzo" onclick="mudarTela('zombie')" style="cursor: pointer;"><img src="assets/img/img/Lorenzo.webp" class="img-jogador"><span>Lorenzo</span></div>
                            </div>
                            <div class="linha vol">
                                <div class="jogador-pos snuffy"><img src="assets/img/img/snu.jpg" class="img-jogador"><span>Marc.Snuffy</span></div>
                            </div>
                            <div class="linha defesa">
                                <div class="jogador-pos abdi"><img src="assets/img/img/abdi.png" class="img-jogador"><span>Abdi</span></div>
                                <div class="jogador-pos aryu" onclick="mudarTela('aryu')" style="cursor: pointer;"><img src="assets/img/img/aryumusic.png" class="img-jogador"><span>Aryu</span></div>
                                <div class="jogador-pos aiku" onclick="mudarTela('aiku')" style="cursor: pointer;"><img src="assets/img/img/aikuu.jpg" class="img-jogador"><span>Aiku</span></div>
                                <div class="jogador-pos rico"><img src="assets/img/img/RICO.webp" class="img-jogador"><span>Rico</span></div>
                            </div>
                            <div class="linha goleiro">
                                <div class="jogador-pos fukaku"><img src="assets/img/img/Gen_Fukaku.webp" class="img-jogador"><span>Fukaku</span></div>
                            </div>
                        </div>

                        <div class="card-treinador">
                            <div class="badge-treinador">STAR PLAYER</div>
                            <img src="assets/img/img/snuffyvsnoa.png" alt="Marc Snuffy" class="foto-treinador">
                            <div class="info-treinador">
                                <h2>Marc Snuffy</h2>
                                <p class="subtitulo">Mestre em Campo (3 Minutos)</p>
                                <div class="frase-snuffy">
                                    "Noa já está na hora de nos aposentarmos, vamos deixar as crianças brincarem."
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Formação 3 -->
                    <div id="formacao-3" class="layout-estrategia-aba">
                        <div class="painel-reservas">
                            <div class="secao-banco">
                                <div class="titulo-banco">COACH</div>
                                <div class="item-reserva"><img src="assets/img/img/snuffy.jpg" class="foto-reserva" onerror="this.src='assets/img/img/snuffy.png'"><span>Marc Snuffy</span></div>
                            </div>
                            <hr class="divisor-banco">
                            <div class="secao-banco">
                                <div class="titulo-banco">BANCO</div>
                                <div class="item-reserva"><img src="assets/img/img/Canali.webp" class="foto-reserva"><span>Canali</span></div>
                                <div class="item-reserva"><img src="assets/img/img/Yukio_Ishikari.webp" class="foto-reserva"><span>Y. Ishikari</span></div>
                                <div class="item-reserva"><img src="assets/img/img/Kyohei_Shiguma.webp" class="foto-reserva"><span>K. Shiguma</span></div>
                                <div class="item-reserva"><img src="assets/img/img/Shingen_Tanaka.webp" class="foto-reserva"><span>S. Tanaka</span></div>
                            </div>
                        </div>

                        <div class="campo-ubers">
                            <div class="linha ataque">
                                <div class="jogador-pos barou" onclick="mudarTela('barou')" style="cursor: pointer;"><img src="assets/img/img/barou.jpg" class="img-jogador"><span>Barou (O Rei)</span></div>
                            </div>
                            <div class="linha meio">
                                <div class="jogador-pos abdi"><img src="assets/img/img/abdi.png" class="img-jogador"><span>Abdi</span></div>
                                <div class="jogador-pos drago"><img src="assets/img/img/DRAGO.webp" class="img-jogador"><span>Drago</span></div>
                                <div class="jogador-pos sendou" onclick="mudarTela('sendou')" style="cursor: pointer;"><img src="assets/img/img/Shuto_Sendo.webp" class="img-jogador"><span>Sendou</span></div>
                                <div class="jogador-pos peron"><img src="assets/img/img/PERON.webp" class="img-jogador"><span>Peron</span></div>
                                <div class="jogador-pos rico"><img src="assets/img/img/RICO.webp" class="img-jogador"><span>Rico</span></div>
                            </div>
                            <div class="linha vol">
                                <div class="jogador-pos niko" onclick="mudarTela('niko')" style="cursor: pointer;"><img src="assets/img/img/NIko.png" class="img-jogador"><span>Niko</span></div>
                            </div>
                            <div class="linha defesa">
                                <div class="jogador-pos aryu" onclick="mudarTela('aryu')" style="cursor: pointer;"><img src="assets/img/img/aryumusic.png" class="img-jogador"><span>Aryu</span></div>
                                <div class="jogador-pos lorenzo" onclick="mudarTela('zombie')" style="cursor: pointer;"><img src="assets/img/img/Lorenzo.webp" class="img-jogador"><span>Lorenzo</span></div>
                                <div class="jogador-pos aiku" onclick="mudarTela('aiku')" style="cursor: pointer;"><img src="assets/img/img/aikuu.jpg" class="img-jogador"><span>Aiku</span></div>
                            </div>
                            <div class="linha goleiro">
                                <div class="jogador-pos fukaku"><img src="assets/img/img/Gen_Fukaku.webp" class="img-jogador"><span>Fukaku</span></div>
                            </div>
                        </div>

                        <div class="card-treinador card-barou-vermelho" style="border-color: #ff003c; box-shadow: 0 0 15px rgba(255, 0, 60, 0.4);">
                            <div class="badge-treinador" style="background-color: #ff003c; color: #fff;">O VERDADEIRO REI</div>
                            <img src="assets/img/img/baroking.png" alt="Barou" class="foto-treinador" style="border-color: #ff003c;">
                            <div class="info-treinador">
                                <h2 style="color: #ff003c;">Shoei Barou</h2>
                                <p class="subtitulo" style="color: #a20320;">Eu não sou igual seu amigo</p>
                                <div class="frase-snuffy" style="border-left-color: #ff003c;">
                                    "Snuffy, eu não vou deixar você se aposentar aqui. Eu ainda quero usar suas taças, Snuffy, por uns bons anos. Perder também faz parte, isso só começou."
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Loop Dinâmico para Renderizar as Telas dos Jogadores -->
<?php foreach ($jogadores as $key => $j): ?>
    <section id="tela-<?= $key; ?>" class="tela-projeto">
        <button class="btn-voltar" onclick="mudarTela('formacao')">← Voltar ao Campo</button>
        <div class="conteudo-<?= $key; ?>">
            <center>
                <div id="root">
                    <div style="min-height: 100vh; display: flex; align-items: center; justify-content: center; opacity: 1;">
                        <div class="card-container-restrito" style="text-align: center; position: relative;">
                            
                            <div style="position: absolute; inset: 0px; background-image: linear-gradient(var(--bg-black) 2px, transparent 2px), linear-gradient(90deg, var(--bg-black) 2px, transparent 2px); background-size: 60px 60px; opacity: 0.03; pointer-events: none;"></div>
                            <div style="position: absolute; top: 20px; left: 20px; width: 30px; height: 30px; border-top: 1px solid var(--gold-primary); border-left: 1px solid var(--gold-primary); opacity: 0.5;"></div>
                            <div style="position: absolute; top: 20px; right: 20px; width: 30px; height: 30px; border-top: 1px solid var(--gold-primary); border-right: 1px solid var(--gold-primary); opacity: 0.5;"></div>
                            <div style="position: absolute; bottom: 20px; left: 20px; width: 30px; height: 30px; border-bottom: 1px solid var(--gold-primary); border-left: 1px solid var(--gold-primary); opacity: 0.5;"></div>
                            <div style="position: absolute; bottom: 20px; right: 20px; width: 30px; height: 30px; border-bottom: 1px solid var(--gold-primary); border-right: 1px solid var(--gold-primary); opacity: 0.5;"></div>

                            <div style="display: flex; justify-content: space-between; align-items: center; font-size: 10px; letter-spacing: 3px; color: var(--text-dim); margin-bottom: 40px; padding-bottom: 15px; border-bottom: 1px solid var(--border-soft);">
                                <span style="font-family: var(--font-mono);"><?= $j['meta_tag']; ?></span>
                            </div>
                            
                            <h2 class="corLetra"><?= $j['subtitulo_card']; ?></h2>

                            <div style="text-align: center; margin-top: 50px;">
                                <img id="player-<?= $key; ?>" class="player-multimidia" src="<?= $j['gif']; ?>" style="width: 400px; height: 300px; border: 5px solid <?= $j['cor_borda']; ?>; border-radius: 5px;">
                            </div>

                            <div style="margin-top: 20px;">
                                <img src="assets/img/img/Ubers_Official_Logo.webp" style="width: 20px; cursor: pointer;">
                            </div>

                            <h3 class="<?= $j['cor_texto']; ?>" style="margin: 20px auto; max-width: 600px; line-height: 1.6; text-align: justify; font-size: 14px;">
                                <?= $j['descricao']; ?>
                            </h3>

                            <div class="spotify-widget spotify-<?= $key; ?>" style="margin-top: 40px;">
                                <div class="album-art">
                                    <img src="<?= $j['capa_musica']; ?>" alt="<?= $key; ?>music"> 
                                </div>
                                <div class="song-info" style="text-align: left;">
                                    <div class="song-title"><?= $j['musica_titulo']; ?></div>
                                    <div class="song-artist"><?= $j['musica_artista']; ?></div>
                                    <div class="progress-bar"><div class="progress"></div></div>
                                </div>
                                <div class="controls">
                                    <span class="btn">⏮</span>
                                    <span class="btn play botao-play-player" style="cursor: pointer; font-size: 20px; color: #FFD700;">▶</span>
                                    <span class="btn">⏭</span>
                                </div>
                            </div> 

                            <audio class="musica-mp3-player">
                                <source src="<?= $j['musica']; ?>" type="audio/mpeg">
                            </audio>

                            <div class="secao-perfil" style="margin-top: 30px;">
                                <button class="btn-perfil btn-toggle-perfil" style="cursor: pointer;">Status and Profile</button>

                                <div class="conteudo-perfil-bloco hidden" style="margin-top: 20px;">
                                    <div class="perfil-card">
                                        <div class="perfil-header" style="display: flex; justify-content: space-between; align-items: center;">
                                            <span class="status-tag">Ubers Database</span>
                                            <div class="rank-circle"><?= $j['rank_badge']; ?></div>
                                        </div>

                                        <div class="perfil-content" style="display: flex; gap: 20px; margin-top: 20px; text-align: left;">
                                            <div class="foto-container">
                                                <img src="<?= $j['icon']; ?>" alt="<?= $j['nome']; ?>" class="foto-perfil" style="width: 110px; border-radius: 4px; border: 1px solid var(--border-soft);">
                                            </div>
                                            
                                            <div class="info-container" style="flex: 1;">
                                                <h2 class="nome-atleta" style="margin: 0; font-size: 22px; color: #fff;"><?= $j['nome']; ?></h2>
                                                <p class="posicao" style="color: var(--gold-primary); font-size: 11px; margin: 4px 0 15px 0; letter-spacing: 1px;"><?= $j['posicao']; ?></p>
                                                
                                                <div class="overall-badge" style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                                                    <div class="ovr-number" style="font-size: 28px; font-weight: bold; color: #fff;"><?= $j['overall']; ?></div>
                                                    <div class="ovr-rank" style="font-size: 16px; color: var(--text-dim);"><?= $j['rank']; ?></div>
                                                </div>

<div class="stats-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;">
    <?php foreach ($j['stats'] as $stat => $val): ?>
        <div class="stat-box">
            <span><?= $stat; ?></span> 
            <?php 
                $numeroStat = is_array($val) ? $val[0] : $val;
                $corStat = (is_array($val) && isset($val[1])) ? 'color: ' . $val[1] . ';' : 'color: #fff;';
            ?>
            <strong style="<?= $corStat ?>"><?= $numeroStat; ?></strong>
        </div>
    <?php endforeach; ?>
</div>

                                        <div class="perfil-footer" style="margin-top: 25px; text-align: center; border-top: 1px solid var(--border-soft); padding-top: 10px; font-size: 9px; color: var(--text-dim); letter-spacing: 2px;">
                                            <p>// CLASSIFIED DATA - UBERS PROPERTY //</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </center>
        </div>
    </section>
<?php endforeach; ?>

    </main>

    <script src="dashboard/main.js"></script>
</body>
</html>
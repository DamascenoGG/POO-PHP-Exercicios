<?php

declare(strict_types=1);

require_once 'src/Reproduzivel.php';
require_once 'src/Midia.php';
require_once 'src/Musica.php';
require_once 'src/Podcast.php';
require_once 'src/VideoCurto.php';
require_once 'src/Playlist.php';

$minhaPlaylist = new Playlist("Mix Diário do Grupo");

$musica = new Musica("Take What You Want", 209, "Travis Scott ft. Post Malone & Ozzy Osbourne");
$podcast = new Podcast("SACANI RESPONDE [VIDA NO UNIVERSO]", 8400, "Flow Podcast", 42);
$video = new VideoCurto("Trend do passinho do Jamal", 30, "Natalia Valente");

$minhaPlaylist->adicionarMidia($musica);
$minhaPlaylist->adicionarMidia($podcast);
$minhaPlaylist->adicionarMidia($video);

$minhaPlaylist->executarPlaylist();
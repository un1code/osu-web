<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'header' => [
        'small' => 'Compete em mais maneiras do que só clicar em círculos.',
        'large' => 'Concursos da comunidade',
    ],

    'index' => [
        'nav_title' => 'listagem',
    ],

    'voting' => [
        'over' => 'A votação para este concurso terminou',
        'login_required' => 'Por favor inicia sessão para votar.',

        'best_of' => [
            'none_played' => "Não parece que jogaste nenhuns beatmaps que se qualificam para este concurso!",
        ],

        'button' => [
            'add' => 'Votar',
            'remove' => 'Remover voto',
            'used_up' => 'Usaste todos os teus votos',
        ],
    ],
    'entry' => [
        '_' => 'inscrição',
        'login_required' => 'Por favor inicia sessão para entrar no concurso.',
        'silenced_or_restricted' => 'Não podes entrar em concursos enquanto estiveres restrito ou silenciado.',
        'preparation' => 'Atualmente, estamos a preparar este concurso. Por favor espera pacientemente!',
        'over' => 'Obrigado pelas tuas inscrições! As submissões foram fechadas para este concurso e a votação irá abrir em breve.',
        'limit_reached' => 'Chegaste ao limite de inscrições para este concurso',
        'drop_here' => 'Larga a tua inscrição aqui',
        'download' => 'Transferir .osz',
        'wrong_type' => [
            'art' => 'Somente ficheiros .jpg e .png são aceites para este concurso.',
            'beatmap' => 'Somente ficheiros .osu são aceites para este concurso.',
            'music' => 'Somente ficheiros .mp3 são aceites para este concurso.',
        ],
        'too_big' => 'As inscrições para este concurso só podem ser até :limit.',
    ],
    'beatmaps' => [
        'download' => 'Transferir inscrição',
    ],
    'vote' => [
        'list' => 'votos',
        'count' => ':count voto|:count votos',
        'points' => ':count ponto|:count pontos',
    ],
    'dates' => [
        'ended' => 'Terminou em :date',

        'starts' => [
            '_' => 'Começa em :date',
            'soon' => 'em breve™',
        ],
    ],
    'states' => [
        'entry' => 'Entrada aberta',
        'voting' => 'A votação começou',
        'results' => 'Resultados',
    ],
];

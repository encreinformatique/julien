<?php

use App\Models\WorkExperience;

return [
    'context' => "Après plus de 10 années de programmation web et chef de projet en Espagne, je cherche à intégrer une équipe dynamique en Argentine, propice à l'émulation et à l'apprentissage.",
    'education' => [
        [
            'school' => 'IÉSEG, Lille',
            'title' => 'Master of Science',
            'details' => "Spécialité technologies de l'information. Tous les cours sont dispensés en anglais.",
            'year' => '2007'
        ],
        [
            'school' => 'IÉSEG, Lille',
            'title' => 'Bachelor',
            'details' => "Comptabilité, logistique, TI, économie",
            'year' => '2005'
        ],
    ],
    'experience' => [
        new WorkExperience(
            'Développeur Web freelance',
            [
                'Projets Symfony, Nuxt et Wordpress',
                'Création d’e-commerces Sylius',
                'Administration de serveurs VPS',
                'CI (CircleCI, Github Actions)',
                'Software as a Service pour entreprises',
            ],
            2018
        ),
        new WorkExperience(
            'Directeur Technique 3JBA',
            [
                'Dév. intranet de gestion financière',
                'Direction équipe technique (3-5 pers.)',
                'API REST',
            ],
            2013,
            2018,
            'Barcelona, Espagne'
        ),
        new WorkExperience(
            'Chef d’équipes web et email',
            [
                'Direction équipes techniques (dév., design et email)',
                'Solutions de retargeting publicitaire',
            ],
            2012,
            2013,
            'Barcelona, Espagne'
        ),
        new WorkExperience(
            'Chef de Projet EMAILING NETWORK',
            [
                'Recrutement équipe de développeurs',
                'Dév. de la plateforme d’affiliation',
                'Gestion de l\'outil de questionnaires',
                'Services d’envoi d’emails',
            ],
            2007,
            2011,
            'Barcelona, Espagne'
        ),
    ],
];

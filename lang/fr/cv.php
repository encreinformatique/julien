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
            'Développeur Web WebsetStudio',
            [
                'Projets Symfony, Nuxt (VueJS) et Wordpress',
                'Création d’e-commerces Sylius',
                'Administration de serveurs VPS',
                'CI (CircleCI, Github Actions)',
                'Software as a Service pour entreprises',
            ],
            (new DateTime())->setDate(2018, 4, 1),
            null,
            'Barcelona (ES), Buenos Aires (AR)'
        ),
        new WorkExperience(
            'Directeur Technique 3JBA',
            [
                'Dév. intranet de gestion financière',
                'Direction équipe technique (3-5 pers.)',
                'API REST',
            ],
            (new DateTime())->setDate(2013, 6, 1),
            (new DateTime())->setDate(2018, 4, 1),
            'Barcelona, Espagne'
        ),
        new WorkExperience(
            'Chef d’équipes web et email',
            [
                'Direction équipes techniques (dév., design et email)',
                'Solutions de retargeting publicitaire',
            ],
            (new DateTime())->setDate(2012, 1, 1),
            (new DateTime())->setDate(2013, 4, 1),
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
            (new DateTime())->setDate(2007, 11, 1),
            (new DateTime())->setDate(2011, 10, 1),
            'Barcelona, Espagne'
        ),
    ],
];

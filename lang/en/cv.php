<?php

use App\Models\WorkExperience;

return [
    'context' => "After more than 10 years as a web programmer and project manager in Spain, I'm looking to join a dynamic team in Argentina that's conducive to emulation and learning.",
    'education' => [
        [
            'school' => 'IÉSEG, Lille',
            'title' => 'Master of Science',
            'details' => "Information technology specialization. All courses are taught in English.",
            'year' => '2007'
        ],
        [
            'school' => 'IÉSEG, Lille',
            'title' => 'Bachelor',
            'details' => "Accounting, logistics, IT, economics",
            'year' => '2005'
        ],
    ],
    'experience' => [
        new WorkExperience(
            'Web developer freelance',
            [
                'Symfony, Nuxt and Wordpress projects',
                'e-commerces with Sylius',
                'VPS server management',
                'CI (CircleCI, Github Actions)',
                'Software as a Service',
            ],
            2018
        ),
        new WorkExperience(
            'Technical Director 3JBA',
            [
                'Recruiting of the team of developers',
                'Technical team leader (3-5 people)',
                'API REST',
            ],
            2013,
            2018,
            'Barcelona, Spain'
        ),
        new WorkExperience(
            'Team leader web e email',
            [
                'Technical teams management (prog., design and email)',
                'Retargeting solutions',
            ],
            2012,
            2013,
            'Barcelona, Spain'
        ),
        new WorkExperience(
            'Project Manager EMAILING NETWORK',
            [
                'Recruiting of the team of developers',
                'Dév. de la plateforme d’affiliation',
                'Gestion de l\'outil de questionnaires',
                'Services d’envoi d’emails',
            ],
            2007,
            2011,
            'Barcelona, Spain'
        ),
    ],
];

<?php

use App\Models\WorkExperience;

return [
    'context' => "After more than 10 years as a web programmer and project manager in Spain, I'm looking to join a dynamic team in Argentina that's conducive to emulation and learning.",
    'education' => [
        [
            'school' => 'Github',
            'title' => 'Career Essentials in GitHub Professional',
            'details' => "This validates Github Actions, Github Project, Github Code Search and Github Copilot",
            'year' => '2024'
        ],
        [
            'school' => 'Academind',
            'title' => 'VueJS',
            'details' => "Course on VueJS 2.",
            'year' => '2018'
        ],
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
            'Web developer WebsetStudio',
            [
                'Symfony, Nuxt (VueJS) and Wordpress projects',
                'e-commerces with Sylius',
                'VPS server management',
                'CI (CircleCI, Github Actions)',
                'Software as a Service',
            ],
            (new DateTime())->setDate(2018, 4, 1),
            null,
            'Spain, Argentina',
            [
                'Symfony, Laravel, Wordpress, PHP',
                'Vue, Nuxt, Node, React Native',
                'Tailwind, Bootstrap, Foundation, CSS',
                'VPS, MySQL, Debian, Ubuntu',
                'API REST',
                'CI, Github'
            ]
        ),
        new WorkExperience(
            'IT Manager 3JBA',
            [
                'Recruiting of the team of developers',
                'Technical team leader (3-5 people)',
                'API REST',
            ],
            (new DateTime())->setDate(2013, 6, 1),
            (new DateTime())->setDate(2018, 4, 1),
            'Barcelona, Spain',
            ['Symfony, PHP', 'VPS, MySQL, Debian', 'API REST', 'CI, Github']
        ),
        new WorkExperience(
            'Team leader web e email',
            [
                'Technical teams management (prog., design and email)',
                'Retargeting solutions',
            ],
            (new DateTime())->setDate(2012, 1, 1),
            (new DateTime())->setDate(2013, 4, 1),
            'Barcelona, Spain',
            ['Symfony, PHP, Ruby', 'PostgreSQL', 'API REST', 'SVN']
        ),
        new WorkExperience(
            'Project Manager EMAILING NETWORK',
            [
                'Recruiting of the team of developers',
                'Dév. de la plateforme d’affiliation',
                'Gestion de l\'outil de questionnaires',
                'Services d’envoi d’emails',
            ],
            (new DateTime())->setDate(2007, 11, 1),
            (new DateTime())->setDate(2011, 10, 1),
            'Barcelona, Spain',
            ['PHP, JavaScript', 'CSS, HTML', 'MySQL, CentOS', 'API XML, SOAP']
        ),
    ],
];

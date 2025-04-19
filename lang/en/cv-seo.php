<?php

use App\Models\WorkExperience;

return [
    'context' => "After 6 years as SEO specialist and project manager in WebsetStudio, I am looking to join a dynamic team in Buenos Aires for new projects.",
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
            'SEO specialist WebsetStudio',
            [
                'Sistrix, Semrush',
                'Search Console, Google Analytics 4',
                'Screaming Frog',
                'Editorial content and affiliate project',
                'Wordpress',
                'Automation with Active Campaign, Pabbly',
                'IA generated images',
            ],
            (new DateTime())->setDate(2017, 11, 1),
            null,
            'Barcelona (ES), Buenos Aires (AR)'
        ),
        new WorkExperience(
            'Technical Director 3JBA',
            [
                'ERP for Email Marketing strategy',
                'Recruiting of the team of developers',
                'Technical team leader (3-5 people)',
                'API REST',
            ],
            2013,
            2018,
            'Barcelona, Spain'
        ),
        new WorkExperience(
            'Email deliverability leader BHE',
            [
                'Email deliverability',
                'Technical teams management (prog., design and email)',
                'Retargeting solutions',
            ],
            2012,
            2013,
            'Barcelona, Spain'
        ),
        new WorkExperience(
            'Email Marketing Manager EMAILING NETWORK',
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

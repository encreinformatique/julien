<?php

use App\Models\WorkExperience;

return [
    'context' => "Tras más de 10 años como programador web y gestor de proyectos, busco compartir mi experiencia con un equipo dinámico en Argentina que favorezca la emulación y el aprendizaje.",
    'education' => [
        [
            'school' => 'Github',
            'title' => 'Career Essentials in GitHub Professional',
            'details' => "Esta formación incluye Github Actions, Github Project, Github Code Search and Github Copilot.",
            'year' => '2024'
        ],
        [
            'school' => 'Academind',
            'title' => 'VueJS',
            'details' => "Formación completa sobre VueJS 2.",
            'year' => '2018'
        ],
        [
            'school' => 'IÉSEG, Lille',
            'title' => 'Master of Science',
            'details' => "Master con especialidad . Todos los cursos se imparten en inglés.",
            'year' => '2007'
        ],
        [
            'school' => 'IÉSEG, Lille',
            'title' => 'Bachelor',
            'details' => "Bachelor (3 años) general incluyendo IT, contabilidad, logística, ventas y economía",
            'year' => '2005'
        ],
    ],
    'experience' => [
        new WorkExperience(
            'Programador Web full-stack WebsetStudio',
            [
                'Proyectos Symfony, Nuxt y Wordpress',
                'Creación de e-commerces Sylius',
                'Administración de servidores VPS',
                'CI (CircleCI, Github Actions',
                'Software as a Service para empresas',
            ],
            (new DateTime())->setDate(2018, 4, 1),
            null,
            'España, Argentina',
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
            'Director Técnico 3JBA',
            [
                'Gestión del equipo técnico (3 a 5 pers.)',
                'Prog. intranet de gestión financiera',
                'API REST',
            ],
            (new DateTime())->setDate(2013, 6, 1),
            (new DateTime())->setDate(2018, 4, 1),
            'Barcelona, España',
            ['Symfony, PHP', 'VPS, MySQL, Debian', 'API REST', 'CI, Github']
        ),
        new WorkExperience(
            'Jefe de equipo de web e email',
            [
                'Gestión de los equipos técnicos (prog., design e email)',
                'Soluciones de retargeting publicitarios',
            ],
            (new DateTime())->setDate(2012, 1, 1),
            (new DateTime())->setDate(2013, 4, 1),
            'Barcelona, España',
            ['Symfony, PHP, Ruby', 'PostgreSQL', 'API REST', 'SVN']
        ),
        new WorkExperience(
            'Jefe de Proyectos EMAILING NETWORK',
            [
                'Reclutamiento de programadores',
                'Prog. de la plataforma de afiliación',
                'Gestión de la herramienta',
                'Servicios de envíos de email',
            ],
            (new DateTime())->setDate(2007, 11, 1),
            (new DateTime())->setDate(2011, 10, 1),
            'Barcelona, España',
            ['PHP, JavaScript', 'CSS, HTML', 'MySQL, CentOS', 'API XML, SOAP']
        ),
    ],
];

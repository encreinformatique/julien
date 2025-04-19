<?php

use App\Models\WorkExperience;

return [
    'context' => "Después de 6 años como especialista en SEO y gestor de proyectos en WebsetStudio, estoy buscando unirme a un equipo dinámico en Buenos Aires para nuevos proyectos.",
    'education' => [
        [
            'school' => 'IÉSEG, Lille',
            'title' => 'Master of Science',
            'details' => "Especialización en tecnologías de información. Todos los cursos se imparten en inglés.",
            'year' => '2007'
        ],
        [
            'school' => 'IÉSEG, Lille',
            'title' => 'Bachelor',
            'details' => "Contabilidad, logística, IT, economía",
            'year' => '2005'
        ],
    ],
    'experience' => [
        new WorkExperience(
            'Especialista SEO WebsetStudio',
            [
                'Sistrix, Semrush',
                'Search Console, Google Analytics 4',
                'Screaming Frog',
                'Editorial content and affiliate project',
                'Wordpress',
                'Automation with Active Campaign',
//                'IA generated images',
            ],
            (new DateTime())->setDate(2017, 11, 1),
            null,
            'Barcelona (ES), Buenos Aires (AR)'
        ),
        new WorkExperience(
            'IT Manager 3JBA',
            [
                'ERP para estrategia Email Marketing',
                'Reclutamiento del equipo de programadores',
                'Leader de equipo (3-5 personas)',
            ],
            (new DateTime())->setDate(2013, 6, 1),
            (new DateTime())->setDate(2018, 4, 1),
            'Barcelona, España'
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
            'Barcelona, España'
        ),
    ],
];

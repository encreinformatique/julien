<?php

use App\Models\WorkExperience;

return [
    'context' => "Tras más de 10 años como programador web y gestor de proyectos, busco compartir mi experiencia con un equipo dinámico en Argentina que favorezca la emulación y el aprendizaje.",
    'education' => [
        [
            'school' => 'IÉSEG, Lille',
            'title' => 'Master of Science',
            'details' => "Especialidad Tecnologías de la Información. Todos los cursos se imparten en inglés.",
            'year' => '2007'
        ],
        [
            'school' => 'IÉSEG, Lille',
            'title' => 'Bachelor',
            'details' => "Contabilidad, logistica, TI, economía",
            'year' => '2005'
        ],
    ],
    'experience' => [
        new WorkExperience(
            'Programador Web freelance',
            [
                'Proyectos Symfony, Nuxt y Wordpress',
                'Creación de e-commerces Sylius',
                'Administración de servidores VPS',
                'CI (CircleCI, Github Actions',
                'Software as a Service para empresas',
            ],
            2018
        ),
        new WorkExperience(
            'Director Técnico 3JBA',
            [
                'Gestión del equipo técnico (3 a 5 pers.)',
                'Prog. intranet de gestión financiera',
                'API REST',
            ],
            2013,
            2018,
            'Barcelona, España'
        ),
        new WorkExperience(
            'Jefe de equipo de web e email',
            [
                'Gestión de los equipos técnicos (prog., design e email)',
                'Soluciones de retargeting publicitarios',
            ],
            2012,
            2013,
            'Barcelona, España'
        ),
        new WorkExperience(
            'Jefe de Proyectos EMAILING NETWORK',
            [
                'Reclutamiento de programadores',
                'Prog. de la plataforma de afiliación',
                'Gestión de la herramienta de cuestionarios',
                'Servicios de envíos de email',
            ],
            2007,
            2011,
            'Barcelona, España'
        ),
    ],
];

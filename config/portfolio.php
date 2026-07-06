<?php

return [
    'name' => 'Subhan Shahid',
    'title' => 'Software Engineering Student',
    'tagline' => 'Building responsive web experiences with PHP, Laravel, and modern frontend tools.',
    'school' => 'Aptech — Advance Diploma in Software Engineering (ADSE)',
    'semesters_completed' => 2,
    'location' => 'Pakistan',
    'github_username' => env('GITHUB_USERNAME', 'subhanshahid1'),
    'github_url' => 'https://github.com/subhanshahid1',
    'linkedin_url' => 'https://www.linkedin.com/in/subhan-shahid-3688ba3b3/',
    'indeed_note' => 'Indeed profile is available via the same contact email.',
    'email' => env('CONTACT_EMAIL', 'subhanshahid.pk1@gmail.com'),
    'resume_note' => 'Resume is available on request via email.',

    'about' => [
        'intro' => 'I am a software engineering student at Aptech, pursuing the Advance Diploma in Software Engineering (ADSE). I have completed two semesters and enjoy turning ideas into clean, functional web applications.',
        'journey' => 'Through my ADSE program, I have built projects ranging from conversion-focused landing pages to full-stack PHP applications with admin dashboards. I focus on writing readable code, responsive UI design, and practical problem solving.',
        'goals' => 'I am continuing to grow my skills in Laravel, backend development, and database design while building projects that demonstrate real-world workflows like authentication, CRUD operations, and admin management.',
    ],

    'education' => [
        [
            'institution' => 'Aptech Computer Education',
            'degree' => 'Advance Diploma in Software Engineering',
            'period' => '2025 — Present',
            'achievement' => 'GPA: 3.80 / 4.00',
            'coursework' => [
                'Advanced Mathematics',
                'Data Structures & Algorithms',
                'Database Systems',
                'Web Application Development',
                'Software Engineering Fundamentals',
            ],
            'honors' => [
                'Merit-based academic recognition',
                'Top performer in applied computing projects',
            ],
        ],
    ],

    'certifications' => [
        [
            'title' => 'Web Development Foundations',
            'issuer' => 'Coursera',
            'description' => 'Structured learning in responsive interfaces, version control, and modern web workflow fundamentals.',
            'verify_url' => 'https://www.coursera.org/',
        ],
        [
            'title' => 'Professional Web Programming',
            'issuer' => 'Google',
            'description' => 'Practical exposure to web technologies, development discipline, and digital product delivery.',
            'verify_url' => 'https://grow.google/',
        ],
        [
            'title' => 'Software Engineering Fundamentals',
            'issuer' => 'Meta',
            'description' => 'Focused study in software engineering practices, problem decomposition, and scalable application thinking.',
            'verify_url' => 'https://www.meta.com/',
        ],
    ],

    'skills' => [
        'frontend' => ['HTML', 'CSS', 'JavaScript', 'Bootstrap', 'jQuery'],
        'backend' => ['PHP', 'Laravel'],
        'database' => ['MySQL'],
        'others' => ['SEO', 'Git', 'Cursor', 'XML', 'JSON', 'WordPress CMS'],
    ],

    'projects' => [
        [
            'slug' => 'bootstrap-landing-page',
            'title' => 'Digital Marketing Landing Page',
            'short_description' => 'High-conversion Bootstrap 5 landing page with lead capture, FAQ accordion, and mobile-first layout.',
            'description' => 'A responsive, high-performance single-page landing page built using Bootstrap 5 to demonstrate modern UI/UX design patterns, semantic HTML implementation, and conversion rate optimization (CRO) layouts.',
            'github_url' => 'https://github.com/subhanshahid1/Boostrap-project',
            'live_url' => 'https://subhanshahid1.github.io/Boostrap-project/',
            'tech' => ['HTML5', 'CSS3', 'Bootstrap 5', 'JavaScript', 'FontAwesome'],
            'features' => [
                'Hero lead generation form above the fold',
                'Career options and curriculum tab sections',
                'Bootstrap accordion FAQ component',
                'SEO-optimized semantic HTML structure',
                'Mobile-first responsive design',
            ],
            'thumbnail' => 'images/projects/bootstrap-landing.png',
            'gallery' => ['images/projects/bootstrap-landing.png'],
            'featured' => true,
        ],
        [
            'slug' => 'elegance-salon',
            'title' => 'Elegance Salon — Full Stack Management System',
            'short_description' => 'Core PHP + MySQL salon website with booking, admin dashboard, and service management.',
            'description' => 'A dynamic, database-driven web application built to streamline salon operations, customer appointments, and administrative management. The project uses Core PHP and MySQL with session-based authentication and a comprehensive admin dashboard.',
            'github_url' => 'https://github.com/subhanshahid1/Elegance-Saloon-Management-e-project',
            'live_url' => null,
            'tech' => ['PHP', 'MySQL', 'HTML5', 'CSS3', 'JavaScript', 'Bootstrap'],
            'features' => [
                'User authentication with PHP sessions',
                'Appointment booking with date and time slot selection',
                'Admin dashboard with revenue, bookings, and feedback stats',
                'Service CRUD and inventory management',
                'Contact and feedback forms with star ratings',
                'Responsive dark luxury UI across public site and dashboard',
            ],
            'thumbnail' => 'images/projects/elegance-home.png',
            'gallery' => [
                'images/projects/elegance-home.png',
                'images/projects/elegance-about.png',
                'images/projects/elegance-services.png',
                'images/projects/elegance-contact.png',
                'images/projects/elegance-feedback.png',
                'images/projects/elegance-dashboard.png',
            ],
            'featured' => true,
        ],
    ],
];

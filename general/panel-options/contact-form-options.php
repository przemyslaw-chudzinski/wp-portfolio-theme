<?php

Redux::setSection( $opt_name, array(
    'title'            => 'Contact Form',
    'id'               => 'th-contactForm',
    'fields'           => [
        [
            'id'       =>  'th-contactForm-header',
            'type'     => 'text',
            'title'    => 'Header',
            'subtitle' => 'Main text in this section'
        ],
        [
            'id'       =>  'th-contactForm-subheader',
            'type'     => 'text',
            'title'    => 'Subheader',
            'subtitle' => 'The text below header'
        ],
        [
            'id'       =>  'th-contactForm-rodo',
            'type'     => 'textarea',
            'title'    => 'Rodo text',
            'subtitle' => 'The text of approval about processing personal data'
        ]
    ]
) );

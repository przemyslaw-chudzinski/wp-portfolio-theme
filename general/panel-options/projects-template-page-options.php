<?php

Redux::setSection( $opt_name, array(
    'title'            => 'Projects template page',
    'id'               => 'th-projects-tp',
    'fields'           => [
        [
            'id'       =>  'th-projects-tp-about-s-header',
            'type'     => 'text',
            'title'    => 'Header',
            'subtitle' => 'Main text in this section'
        ],
        [
            'id'       =>  'th-projects-tp-about-s-subheader',
            'type'     => 'textarea',
            'title'    => 'Subheader',
            'subtitle' => 'Text below header'
        ]
    ]
) );

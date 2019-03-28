<?php

Redux::setSection( $opt_name, array(
    'title'            => 'Contact template page',
    'id'               => 'th-contact-tp',
) );

Redux::setSection( $opt_name, array(
    'title'            => 'Main section',
    'id'               => 'th-contact-tp-main-s',
    'subsection'       => true,
    'fields'           => [
        [
            'id'       =>  'th-contact-tp-main-s-header',
            'type'     => 'text',
            'title'    => 'Header',
            'subtitle' => 'Main text in this section'
        ],
        [
            'id'       =>  'th-contact-tp-main-s-subheader',
            'type'     => 'text',
            'title'    => 'Subheader',
            'subtitle' => 'The text below header'
        ]
    ]
) );

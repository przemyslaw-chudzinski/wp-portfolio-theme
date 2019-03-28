<?php

Redux::setSection( $opt_name, array(
    'title'            => 'Global options',
    'id'               => 'th-global',
) );

Redux::setSection( $opt_name, array(
    'title'            => 'Social Media',
    'id'               => 'th-global-socialMedia',
    'subsection'       => true,
    'fields'           => [
        [
            'id'       =>  'th-global-socialMedia-facebook',
            'type'     => 'text',
            'title'    => 'Facebook URL',
            'subtitle' => 'Link to facebook profile'
        ],
        [
            'id'       =>  'th-global-socialMedia-instagram',
            'type'     => 'text',
            'title'    => 'Instagram URL',
            'subtitle' => 'Link to instagram profile'
        ],
        [
            'id'       =>  'th-global-socialMedia-linkedIn',
            'type'     => 'text',
            'title'    => 'LinkedIn URL',
            'subtitle' => 'Link to LinkedIn profile'
        ]
    ]
) );


Redux::setSection( $opt_name, array(
    'title'            => 'Personal data',
    'id'               => 'th-global-personal',
    'subsection'       => true,
    'fields'           => [
        [
            'id'       =>  'th-global-personal-email',
            'type'     => 'text',
            'title'    => 'Email',
            'subtitle' => 'Your email'
        ],
        [
            'id'       =>  'th-global-personal-phone',
            'type'     => 'text',
            'title'    => 'Phone',
            'subtitle' => 'Your phone number'
        ],
        [
            'id'       =>  'th-global-personal-location',
            'type'     => 'text',
            'title'    => 'Location',
            'subtitle' => 'Your location'
        ]
    ]
) );

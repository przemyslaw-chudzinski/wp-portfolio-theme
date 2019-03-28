<?php

Redux::setSection( $opt_name, array(
    'title'            => 'Home template page',
    'id'               => 'th-home-tp',
) );

Redux::setSection( $opt_name, array(
    'title'            => 'Banner',
    'id'               => 'th-home-tp-banner-s',
    'subsection'       => true,
    'fields'           => [
        [
            'id'       =>  'th-home-tp-banner-s-header',
            'type'     => 'text',
            'title'    => 'Header',
            'subtitle' => 'Main text in this section'
        ],
        [
            'id'       => 'th-home-tp-banner-s-subheader',
            'type'     => 'textarea',
            'title'    => 'Subheader',
            'subtitle' => 'The text below header'
        ]
    ]
) );

Redux::setSection( $opt_name, array(
    'title'            => 'Projects section',
    'id'               => 'th-home-tp-projects-s',
    'subsection'       => true,
    'fields'           => [
        [
            'id'       =>  'th-home-tp-projects-s-header',
            'type'     => 'text',
            'title'    => 'Header',
            'subtitle' => 'Main text in this section'
        ],
        [
            'id'       =>  'th-home-tp-projects-s-subheader',
            'type'     => 'text',
            'title'    => 'Subheader',
            'subtitle' => 'The text below header'
        ]
    ]
) );

Redux::setSection( $opt_name, array(
    'title'            => 'Blog section',
    'id'               => 'th-home-tp-blog-s',
    'subsection'       => true,
    'fields'           => [
        [
            'id'       =>  'th-home-tp-blog-s-header',
            'type'     => 'text',
            'title'    => 'Header',
            'subtitle' => 'Main text in this section'
        ],
        [
            'id'       =>  'th-home-tp-blog-s-subheader',
            'type'     => 'text',
            'title'    => 'Subheader',
            'subtitle' => 'The text below header'
        ]
    ]
) );

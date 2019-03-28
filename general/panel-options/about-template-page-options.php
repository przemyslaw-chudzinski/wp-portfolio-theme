<?php

Redux::setSection( $opt_name, array(
    'title'            => 'About template page',
    'id'               => 'th-about-tp',
) );

Redux::setSection( $opt_name, array(
    'title'            => 'About me section',
    'id'               => 'th-about-tp-about-s',
    'subsection'       => true,
    'fields'           => [
        [
            'id'       =>  'th-about-tp-about-s-header',
            'type'     => 'text',
            'title'    => 'Header',
            'subtitle' => 'Main text in this section'
        ],
        [
            'id'       =>  'th-about-tp-about-s-subheader',
            'type'     => 'text',
            'title'    => 'Subheader',
            'subtitle' => 'Text below header'
        ],
        [
            'id'       => 'th-about-tp-about-s-image',
            'type'     => 'media',
            'title'    => 'Image',
            'subtitle' => 'Image on the left side of the section'
        ]
    ]
) );

Redux::setSection( $opt_name, array(
    'title'            => 'Technologies section',
    'id'               => 'th-about-tp-technologies-s',
    'subsection'       => true,
    'fields'           => [
        [
            'id'       =>  'th-about-tp-technologies-s-header',
            'type'     => 'text',
            'title'    => 'Header',
            'subtitle' => 'Main text in this section'
        ],
        [
            'id'       =>  'th-about-tp-technologies-s-subheader',
            'type'     => 'text',
            'title'    => 'Subheader',
            'subtitle' => 'Text below header'
        ]
    ]
) );

Redux::setSection( $opt_name, array(
    'title'            => 'Courses section',
    'id'               => 'th-about-tp-coursesList-s',
    'subsection'       => true,
    'fields'           => [
        [
            'id'       =>  'th-about-tp-coursesList-s-header',
            'type'     => 'text',
            'title'    => 'Header',
            'subtitle' => 'Main text in this section'
        ],
        [
            'id'       =>  'th-about-tp-coursesList-s-subheader',
            'type'     => 'text',
            'title'    => 'Subheader',
            'subtitle' => 'Text below header'
        ]
    ]
) );

Redux::setSection( $opt_name, array(
    'title'            => 'Certifications section',
    'id'               => 'th-about-tp-certifications-s',
    'subsection'       => true,
    'fields'           => [
        [
            'id'       =>  'th-about-tp-certifications-s-header',
            'type'     => 'text',
            'title'    => 'Header',
            'subtitle' => 'Main text in this section'
        ],
        [
            'id'       =>  'th-about-tp-certifications-s-subheader',
            'type'     => 'text',
            'title'    => 'Subheader',
            'subtitle' => 'Text below header'
        ],
        [
            'id'         => 'th-about-tp-certifications-s-content',
            'type'       => 'editor',
            'title'      => 'content',
            'full_width' => true
        ]
    ]
) );

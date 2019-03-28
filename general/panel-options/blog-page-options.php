<?php

Redux::setSection( $opt_name, array(
    'title'            => 'Blog page',
    'id'               => 'th-blog',
    'fields'           => [
        [
            'id'       =>  'th-blog-header',
            'type'     => 'text',
            'title'    => 'Header',
            'subtitle' => 'Main text in this section'
        ],
        [
            'id'       =>  'th-blog-subheader',
            'type'     => 'text',
            'title'    => 'Subheader',
            'subtitle' => 'Text below header'
        ]
    ]
) );

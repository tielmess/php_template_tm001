<?php
/* ==========================================================================
   SITE DATA CONFIGURATION
   ========================================================================== */

$content = [
    'site' => [
        'name' => "Local Business",
    ],
    
    'portfolio_section' => [
        'heading'    => "Local Business",
        'subheading' => "Explore premium local business services.",
    ],

    'nav' => [
        [
            'title'   => "Home",
            'class'   => "home",
            'url'     => "index",
            'current' => true
        ],
        [
            'title'   => "About",
            'class'   => "about",
            'url'     => "about",
            'current' => false
        ],
        [
            'title'   => "Services",
            'class'   => "services",
            'url'     => "services",    
            'current' => false
        ],
        [
            'title'   => "Blog",
            'class'   => "blog",
            'url'     => "blog",
            'current' => false
        ]
    ],  // End nav array

    'footer_nav' => [
        [
            'title'   => "Sitemap",
            'class'   => "sitemap",
            'url'     => "sitemap",
            'current' => false
        ],
            [
            'title'   => "Cookies",
            'class'   => "cookies",
            'url'     => "cookies",
            'current' => false
        ]
    ],  // End footer_nav array

    'footer_nav2' => [
        [
            'title'   => "Privacy Policy",
            'class'   => "privacy",
            'url'     => "privacy",
            'current' => false
        ]
    ],  // End footer_nav2 array

    'cards' => [
        [
            'title'       => 'The Field Note Book',
            'description' => 'A beautifully constrained desktop companion engineered entirely to isolate focus and reduce environmental noise.',
            'image_url'   => 'https://images.unsplash.com/photo-1517842645767-c639042777db?q=80&w=600',
            'image_alt'   => 'Minimalist notebook open on a clean wooden desk',
            'cta_text'    => 'Explore Collection',
            'cta_url'     => '#field-note'
        ],
        [
            'title'       => "The Scholar's Scarf",
            'description' => 'Woven with hidden pockets tailored for minimalist tools, transitioning your workspace seamlessly into winter.',
            'image_url'   => 'https://images.unsplash.com/photo-1544022613-e87ca75a784a?q=80&w=600',
            'image_alt'   => 'Premium woven textiles neatly folded',
            'cta_text'    => 'View Fabric Details',
            'cta_url'     => '#scholars-scarf'
        ],
        [
            'title'       => 'The Local Frog Workspace',
            'description' => 'A hyper-minimal, single-page micro-environment optimized for rapid loading and high-intent local presentation.',
            'image_url'   => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=600',
            'image_alt'   => 'Clean digital layout on a sleek computer monitor',
            'cta_text'    => 'Launch Micro-Site',
            'cta_url'     => '#local-frog'
        ],
        [
            'title'       => "The Scholar's Scarf",
            'description' => 'Woven with hidden pockets tailored for minimalist tools, transitioning your workspace seamlessly into winter.',
            'image_url'   => 'https://images.unsplash.com/photo-1544022613-e87ca75a784a?q=80&w=600',
            'image_alt'   => 'Premium woven textiles neatly folded',
            'cta_text'    => 'View Fabric Details',
            'cta_url'     => '#scholars-scarf'
        ],
        [
            'title'       => 'The Local Frog Workspace',
            'description' => 'A hyper-minimal, single-page micro-environment optimized for rapid loading and high-intent local presentation.',
            'image_url'   => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=600',
            'image_alt'   => 'Clean digital layout on a sleek computer monitor',
            'cta_text'    => 'Launch Micro-Site',
            'cta_url'     => '#local-frog'
        ]
    ], // End cards

    'categories' => [
        [ // <--- Category 1
            'heading' => 'Our Process',
            'items' => [            
                [
                    'summary' => 'What defines the Artisan Archive standard?',
                    'description' => 
                    [
                        'Each piece in our collective is vetted through a rigorous <span style="white-space: nowrap;">three-stage</span> verification process. We prioritize structural integrity, material provenance, and the <span style="white-space: nowrap;">hand-finished</span> signature of the master craftsman. Our standard ensures that every object is not just a product, but a generational <span style="white-space: nowrap;">legacy piece.</span>',
                        'Second paragraph for testing, with a lot more copy to make it all the more.'
                    ],
                    'image_url' => '',
                    'image_alt' => '', 
                    'button_url' => '',
                    'button_text' => '' 
                ],
                [
                    'summary' => 'Sourcing & Sustainability',
                    'description' => 
                    [
                        'We source raw materials exclusively from <span style="white-space: nowrap;">FSC-certified</span> forests and local stone quarries within a <span style="white-space: nowrap;">200-mile</span> radius of our main workshop. This minimizes our carbon footprint while supporting regional economies.'
                    ],
                    'image_url' => 'assets/img/weathered-timber.png',
                    'image_alt' => 'Raw weathered timber in workshop', 
                    'button_url' => '',
                    'button_text' => '' 
                ]
            ]
        ], // <--- End Category 1
        [ // <--- Category 2
            'heading' => 'Shipping & Logistics',
            'items' => [ 
                [           
                    'summary' => 'Global White-Glove Delivery',
                    'description' => 
                    [
                        'For large-scale commissions and furniture, we provide a <span style="white-space: nowrap;">full-service</span> <span style="white-space: nowrap;">white-glove</span> delivery option. This includes <span style="white-space: nowrap;">climate-controlled</span> transport, <span style="white-space: nowrap;">room-of-choice</span> placement, and debris removal. Currently available in 24 countries across Europe, North America, and East&nbsp;Asia.'
                    ],
                    'image_url' => '',
                    'image_alt' => '', 
                    'button_url' => '',
                    'button_text' => ''  
                ],
                [
                    'summary' => 'Lead Times & Tracking',
                    'description' => 
                    [
                        'As each item is crafted to order, standard lead times vary between 6 to 12 weeks. Clients receive <span style="white-space: nowrap;">bi-weekly</span> updates from their dedicated logistics coordinator, including photographs of the piece during final finishing&nbsp;stages.'
                    ],
                    'image_url' => '',
                    'image_alt' => '', 
                    'button_url' => '',
                    'button_text' => '' 
                ]
            ]
        ], // <--- End Category 2
        [ // <--- Category 3
            'heading' => 'Custom Commissions',
            'items' => [ 
                [           
                    'summary' => 'Bespoke Design Engagement',
                    'description' => 
                    [
                        'The commissioning process begins with a <span style="white-space: nowrap;">1-on-1</span> consultation with our design director. We work with architects and private collectors to create unique adaptations of our core collection or entirely new conceptual&nbsp;objects.'
                    ],
                    'image_url' => '',
                    'image_alt' => '', 
                    'inquire_url' => '#contact',
                    'inquire_text' => 'Inquire for Bespoke'  
                ]
            ]
        ] // <--- End Category 3
    ] // End categories
                ];



// ########################################

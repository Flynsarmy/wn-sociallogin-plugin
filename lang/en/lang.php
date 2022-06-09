<?php return [
    'plugin' => [
        'name' => 'Social Login',
        'desc' => 'Allows visitors to register/sign in with their social media accounts',
    ],
    'settings' => [
        'menu_label' => 'Social Login',
        'menu_description' => 'Manage Social Login providers.',
        'enabled_on_frontend' => 'Enabled on frontend?',
        'enabled_on_backend' => 'Enabled on backend?',
        'comment_enabled_front_google' => 'Can frontend users log in with Google?',
        'comment_enabled_back_google' => 'Can administrators log into the backend with Google?',
        'comment_enabled_front_twitter' => 'Can frontend users log in with Twitter?',
        'comment_enabled_front_facebook' => 'Can frontend users log in with Facebook?',
        'comment_enabled_back_facebook' => 'Can administrators log into the backend with Facebook?',
        'application_name' => 'Application Name',
        'comment_application_name' => 'This appears on the Google login screen. Usually your site name.',
        'how_retrieve_credentials' => 'How to retrieve your credentials',
    ],
    'component' => [
        'name' => 'Social Login',
        'desc' => 'Adds social_login_link(\$provider, \$success_url, \$error_url) method.',
    ],
    'user' => [
        'social_providers' => 'Social Providers',
        'has_not_logged' => "This user hasn't logged in with any social providers yet.",
    ],
];

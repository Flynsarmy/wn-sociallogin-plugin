<?php return [
    'plugin' => [
        'name' => 'Social Login',
        'desc' => 'Дозволяє відвідувачам реєструватися/входити в систему за допомогою своїх облікових записів у соціальних мережах',
    ],
    'settings' => [
        'menu_label' => 'Social Login',
        'menu_description' => 'Управління провайдерами авторизації через соцмережі.',
        'enabled_on_frontend' => 'Увімкнено на фронтенді?',
        'enabled_on_backend' => 'Увімкнено у бекенді?',
        'comment_enabled_front_google' => 'Чи можуть фронтенд користувачі логінитись через Google?',
        'comment_enabled_back_google' => 'Чи можуть адміністратори логінитись у бекенді через Google?',
        'comment_enabled_front_twitter' => 'Чи можуть фронтенд користувачі логінитись через Twitter?',
        'comment_enabled_front_facebook' => 'Чи можуть фронтенд користувачі логінитись через Facebook?',
        'comment_enabled_back_facebook' => 'Чи можуть адміністратори логінитись у бекенді через Facebook?',
        'application_name' => "Ім'я додатку",
        'comment_application_name' => 'Це відображається у вікні входу Google. Зазвичай назва вашого сайту.',
        'how_retrieve_credentials' => 'Як отримати облікові дані',
    ],
    'component' => [
        "name" => "Social Login",
        "desc" => "Додає метод social_login_link(\$provider, \$success_url, \$error_url)",
    ],
    'user' => [
        'social_providers' => 'Соціальні провайдери',
        'has_not_logged' => 'Цей користувач ще не увійшов з жодної соціальної мережі.',
    ],
];

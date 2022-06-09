<?php return [
    'plugin' => [
        'name' => 'Social Login',
        'desc' => 'Позволяет посетителям регистрироваться/входить в систему с помощью своих учетных записей в социальных сетях.',
    ],
    'settings' => [
        'menu_label' => 'Social Login',
        'menu_description' => 'Управление провайдерами авторизации через соцсети.',
        'enabled_on_frontend' => 'Включено на фронтенде?',
        'enabled_on_backend' => 'Включено в бэкенде?',
        'comment_enabled_front_google' => 'Могут ли фронтенд пользователи логиниться через Google?',
        'comment_enabled_back_google' => 'Могут ли администраторы логиниться в бэкенде через Google?',
        'comment_enabled_front_twitter' => 'Могут ли фронтенд пользователи логиниться через Twitter?',
        'comment_enabled_front_facebook' => 'Могут ли фронтенд пользователи логиниться через Facebook?',
        'comment_enabled_back_facebook' => 'Могут ли администраторы логиниться в бэкенде через Facebook?',
        'application_name' => 'Имя приложения',
        'comment_application_name' => 'Это отображается в окне входа в Google. Обычно название вашего сайта.',
        'how_retrieve_credentials' => 'Как получить учётные данные',
    ],
    'component' => [
        "name" => "Social Login",
        "desc" => "Добавляет метод social_login_link(\$provider, \$success_url, \$error_url)",
    ],
    'user' => [
        'social_providers' => 'Социальные провайдеры',
        'has_not_logged' => 'Этот пользователь ещё не вошел ни с одной из социальных сетей.',
    ],
];

<?php return array(
    'root' => array(
        'name' => 'vatu/demo',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '00a20c7639e495cce63e3c38b90e52720b2c6c2b',
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'captainhook/captainhook' => array(
            'pretty_version' => '5.23.6',
            'version' => '5.23.6.0',
            'reference' => '6c9a60f5771581f3788f98d7b4aa9a61156cfebb',
            'type' => 'library',
            'install_path' => __DIR__ . '/../captainhook/captainhook',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'captainhook/hook-installer' => array(
            'pretty_version' => '1.0.3',
            'version' => '1.0.3.0',
            'reference' => '3308a9152727af4e3d1c7b63ca219d6938b702b8',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../captainhook/hook-installer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'captainhook/secrets' => array(
            'pretty_version' => '0.9.5',
            'version' => '0.9.5.0',
            'reference' => '8aa90d5b9b7892abd11b9da2fc172a7b32b90cbe',
            'type' => 'library',
            'install_path' => __DIR__ . '/../captainhook/secrets',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'composer/installers' => array(
            'pretty_version' => 'v2.3.0',
            'version' => '2.3.0.0',
            'reference' => '12fb2dfe5e16183de69e784a7b84046c43d97e8e',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'cweagans/composer-patches' => array(
            'pretty_version' => '1.7.3',
            'version' => '1.7.3.0',
            'reference' => 'e190d4466fe2b103a55467dfa83fc2fecfcaf2db',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../cweagans/composer-patches',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => array(
            'pretty_version' => 'v1.1.3',
            'version' => '1.1.3.0',
            'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
            'type' => 'library',
            'install_path' => __DIR__ . '/../graham-campbell/result-type',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'johnpbloch/wordpress-core-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'oscarotero/env' => array(
            'pretty_version' => 'v2.1.0',
            'version' => '2.1.0.0',
            'reference' => '0da22cadc6924155fa9bbea2cdda2e84ab7cbdd3',
            'type' => 'library',
            'install_path' => __DIR__ . '/../oscarotero/env',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'phpoption/phpoption' => array(
            'pretty_version' => '1.9.3',
            'version' => '1.9.3.0',
            'reference' => 'e3fac8b24f56113f7cb96af14958c0dd16330f54',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpoption/phpoption',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/container' => array(
            'pretty_version' => '1.1.2',
            'version' => '1.1.2.0',
            'reference' => '513e0666f7216c7459170d56df27dfcefe1689ea',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/container',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0|2.0|3.0',
            ),
        ),
        'roots/bedrock-autoloader' => array(
            'pretty_version' => '1.0.4',
            'version' => '1.0.4.0',
            'reference' => 'f508348a3365ab5ce7e045f5fd4ee9f0a30dd70f',
            'type' => 'library',
            'install_path' => __DIR__ . '/../roots/bedrock-autoloader',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roots/wordpress' => array(
            'pretty_version' => '6.6.2',
            'version' => '6.6.2.0',
            'reference' => '1bdabdb9171ac5323edbf4792ce353d475467d27',
            'type' => 'metapackage',
            'install_path' => null,
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roots/wordpress-core-installer' => array(
            'pretty_version' => '1.100.0',
            'version' => '1.100.0.0',
            'reference' => '73f8488e5178c5d54234b919f823a9095e2b1847',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../roots/wordpress-core-installer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roots/wordpress-no-content' => array(
            'pretty_version' => '6.6.2',
            'version' => '6.6.2.0',
            'reference' => '6.6.2',
            'type' => 'wordpress-core',
            'install_path' => __DIR__ . '/../../public/wp',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roots/wp-config' => array(
            'pretty_version' => '1.0.0',
            'version' => '1.0.0.0',
            'reference' => '37c38230796119fb487fa03346ab0706ce6d4962',
            'type' => 'library',
            'install_path' => __DIR__ . '/../roots/wp-config',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roots/wp-password-bcrypt' => array(
            'pretty_version' => '1.2.0',
            'version' => '1.2.0.0',
            'reference' => 'bd26ab98aa646d88ce98c76e365d16259c5227a2',
            'type' => 'library',
            'install_path' => __DIR__ . '/../roots/wp-password-bcrypt',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'sebastianfeldmann/camino' => array(
            'pretty_version' => '0.9.5',
            'version' => '0.9.5.0',
            'reference' => 'bf2e4c8b2a029e9eade43666132b61331e3e8184',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastianfeldmann/camino',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'sebastianfeldmann/captainhook' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'sebastianfeldmann/cli' => array(
            'pretty_version' => '3.4.1',
            'version' => '3.4.1.0',
            'reference' => '8a932e99e9455981fb32fa6c085492462fe8f8cf',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastianfeldmann/cli',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'sebastianfeldmann/git' => array(
            'pretty_version' => '3.11.0',
            'version' => '3.11.0.0',
            'reference' => '5cb1ea94f65c7420419abe8f12c45cc7eb094790',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastianfeldmann/git',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/console' => array(
            'pretty_version' => 'v7.1.6',
            'version' => '7.1.6.0',
            'reference' => 'bb5192af6edc797cbab5c8e8ecfea2fe5f421e57',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/console',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => array(
            'pretty_version' => 'v3.5.0',
            'version' => '3.5.0.0',
            'reference' => '0e0d29ce1f20deffb4ab1b016a7257c4f1e789a1',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/deprecation-contracts',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/filesystem' => array(
            'pretty_version' => 'v7.1.6',
            'version' => '7.1.6.0',
            'reference' => 'c835867b3c62bb05c7fe3d637c871c7ae52024d4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/filesystem',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => array(
            'pretty_version' => 'v1.31.0',
            'version' => '1.31.0.0',
            'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-ctype',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => array(
            'pretty_version' => 'v1.31.0',
            'version' => '1.31.0.0',
            'reference' => 'b9123926e3b7bc2f98c02ad54f6a4b02b91a8abe',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-grapheme',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => array(
            'pretty_version' => 'v1.31.0',
            'version' => '1.31.0.0',
            'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-normalizer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => array(
            'pretty_version' => 'v1.31.0',
            'version' => '1.31.0.0',
            'reference' => '85181ba99b2345b0ef10ce42ecac37612d9fd341',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-mbstring',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => array(
            'pretty_version' => 'v1.31.0',
            'version' => '1.31.0.0',
            'reference' => '60328e362d4c2c802a54fcbf04f9d3fb892b4cf8',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php80',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/process' => array(
            'pretty_version' => 'v7.1.7',
            'version' => '7.1.7.0',
            'reference' => '9b8a40b7289767aa7117e957573c2a535efe6585',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/process',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/service-contracts' => array(
            'pretty_version' => 'v2.5.3',
            'version' => '2.5.3.0',
            'reference' => 'a2329596ddc8fd568900e3fc76cba42489ecc7f3',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/service-contracts',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/string' => array(
            'pretty_version' => 'v7.1.6',
            'version' => '7.1.6.0',
            'reference' => '61b72d66bf96c360a727ae6232df5ac83c71f626',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/string',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'vatu/demo' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '00a20c7639e495cce63e3c38b90e52720b2c6c2b',
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => array(
            'pretty_version' => 'v5.6.1',
            'version' => '5.6.1.0',
            'reference' => 'a59a13791077fe3d44f90e7133eb68e7d22eaff2',
            'type' => 'library',
            'install_path' => __DIR__ . '/../vlucas/phpdotenv',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wordpress/core-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '6.6.2',
            ),
        ),
        'wpackagist-plugin/aryo-activity-log' => array(
            'pretty_version' => '2.11.1',
            'version' => '2.11.1.0',
            'reference' => 'tags/2.11.1',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../public/app/plugins/aryo-activity-log',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wpackagist-plugin/better-passwords' => array(
            'pretty_version' => '1.8',
            'version' => '1.8.0.0',
            'reference' => 'tags/1.8',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../public/app/plugins/better-passwords',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wpackagist-plugin/disable-emojis' => array(
            'pretty_version' => '1.7.6',
            'version' => '1.7.6.0',
            'reference' => 'tags/1.7.6',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../public/app/plugins/disable-emojis',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wpackagist-plugin/limit-login-attempts-reloaded' => array(
            'pretty_version' => '2.26.16',
            'version' => '2.26.16.0',
            'reference' => 'tags/2.26.16',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../public/app/plugins/limit-login-attempts-reloaded',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wpackagist-plugin/mailgun' => array(
            'pretty_version' => '2.1.1',
            'version' => '2.1.1.0',
            'reference' => 'tags/2.1.1',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../public/app/plugins/mailgun',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wpackagist-plugin/redirection' => array(
            'pretty_version' => '5.5.0',
            'version' => '5.5.0.0',
            'reference' => 'tags/5.5.0',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../public/app/plugins/redirection',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wpackagist-plugin/spinupwp' => array(
            'pretty_version' => '1.7.1',
            'version' => '1.7.1.0',
            'reference' => 'tags/1.7.1',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../public/app/plugins/spinupwp',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wpackagist-plugin/wordpress-seo' => array(
            'pretty_version' => '23.8',
            'version' => '23.8.0.0',
            'reference' => 'tags/23.8',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../public/app/plugins/wordpress-seo',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wpackagist-plugin/wp-robots-txt' => array(
            'pretty_version' => '1.3.3',
            'version' => '1.3.3.0',
            'reference' => 'tags/1.3.3',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../public/app/plugins/wp-robots-txt',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);

<?php return array(
    'root' => array(
        'name' => 'vatu/demo',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '9de2da5047dae8300cab95b2330193ef60e99e69',
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'captainhook/captainhook' => array(
            'pretty_version' => '5.23.3',
            'version' => '5.23.3.0',
            'reference' => 'c9deaefc098dde7f7093b44482b099195442e70d',
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
            'pretty_version' => 'v1.1.2',
            'version' => '1.1.2.0',
            'reference' => 'fbd48bce38f73f8a4ec8583362e732e4095e5862',
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
            'pretty_version' => '1.9.2',
            'version' => '1.9.2.0',
            'reference' => '80735db690fe4fc5c76dfa7f9b770634285fa820',
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
            'pretty_version' => '6.6',
            'version' => '6.6.0.0',
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
            'pretty_version' => '6.6',
            'version' => '6.6.0.0',
            'reference' => '6.6',
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
            'pretty_version' => '1.1.0',
            'version' => '1.1.0.0',
            'reference' => '15f0d8919fb3731f79a0cf2fb47e1baecb86cb26',
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
            'pretty_version' => 'v7.1.2',
            'version' => '7.1.2.0',
            'reference' => '0aa29ca177f432ab68533432db0de059f39c92ae',
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
            'pretty_version' => 'v7.1.2',
            'version' => '7.1.2.0',
            'reference' => '92a91985250c251de9b947a14bb2c9390b1a562c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/filesystem',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => array(
            'pretty_version' => 'v1.30.0',
            'version' => '1.30.0.0',
            'reference' => '0424dff1c58f028c451efff2045f5d92410bd540',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-ctype',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => array(
            'pretty_version' => 'v1.30.0',
            'version' => '1.30.0.0',
            'reference' => '64647a7c30b2283f5d49b874d84a18fc22054b7a',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-grapheme',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => array(
            'pretty_version' => 'v1.30.0',
            'version' => '1.30.0.0',
            'reference' => 'a95281b0be0d9ab48050ebd988b967875cdb9fdb',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-normalizer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => array(
            'pretty_version' => 'v1.30.0',
            'version' => '1.30.0.0',
            'reference' => 'fd22ab50000ef01661e2a31d850ebaa297f8e03c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-mbstring',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => array(
            'pretty_version' => 'v1.30.0',
            'version' => '1.30.0.0',
            'reference' => '77fa7995ac1b21ab60769b7323d600a991a90433',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php80',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/process' => array(
            'pretty_version' => 'v7.1.1',
            'version' => '7.1.1.0',
            'reference' => 'febf90124323a093c7ee06fdb30e765ca3c20028',
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
            'pretty_version' => 'v7.1.2',
            'version' => '7.1.2.0',
            'reference' => '14221089ac66cf82e3cf3d1c1da65de305587ff8',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/string',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'vatu/demo' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '9de2da5047dae8300cab95b2330193ef60e99e69',
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => array(
            'pretty_version' => 'v5.6.0',
            'version' => '5.6.0.0',
            'reference' => '2cf9fb6054c2bb1d59d1f3817706ecdb9d2934c4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../vlucas/phpdotenv',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wordpress/core-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '6.6',
            ),
        ),
        'wpackagist-plugin/aryo-activity-log' => array(
            'pretty_version' => '2.10.1',
            'version' => '2.10.1.0',
            'reference' => 'tags/2.10.1',
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
            'pretty_version' => '2.26.11',
            'version' => '2.26.11.0',
            'reference' => 'tags/2.26.11',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../public/app/plugins/limit-login-attempts-reloaded',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wpackagist-plugin/mailgun' => array(
            'pretty_version' => '2.0.1',
            'version' => '2.0.1.0',
            'reference' => 'tags/2.0.1',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../public/app/plugins/mailgun',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wpackagist-plugin/redirection' => array(
            'pretty_version' => '5.4.2',
            'version' => '5.4.2.0',
            'reference' => 'tags/5.4.2',
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
            'pretty_version' => '23.0',
            'version' => '23.0.0.0',
            'reference' => 'tags/23.0',
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

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7fd016f83e0c3b6fead5983747d21ce9
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        'd24932181e8483081b47b64b5b06065a' => __DIR__ . '/..' . '/oscarotero/env/src/env_function.php',
        '841f98c5d948ce534a6f87abe5b50614' => __DIR__ . '/..' . '/roots/wp-password-bcrypt/wp-password-bcrypt.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'R' => 
        array (
            'Roots\\WPConfig\\' => 15,
            'Roots\\Composer\\' => 15,
            'Roots\\Bedrock\\' => 14,
        ),
        'P' => 
        array (
            'PhpOption\\' => 10,
        ),
        'G' => 
        array (
            'GrahamCampbell\\ResultType\\' => 26,
        ),
        'E' => 
        array (
            'Env\\' => 4,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Roots\\WPConfig\\' => 
        array (
            0 => __DIR__ . '/..' . '/roots/wp-config/src',
        ),
        'Roots\\Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/roots/wordpress-core-installer/src',
        ),
        'Roots\\Bedrock\\' => 
        array (
            0 => __DIR__ . '/..' . '/roots/bedrock-autoloader/src',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'GrahamCampbell\\ResultType\\' => 
        array (
            0 => __DIR__ . '/..' . '/graham-campbell/result-type/src',
        ),
        'Env\\' => 
        array (
            0 => __DIR__ . '/..' . '/oscarotero/env/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Composer\\Installers\\AglInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AglInstaller.php',
        'Composer\\Installers\\AkauntingInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AkauntingInstaller.php',
        'Composer\\Installers\\AnnotateCmsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AnnotateCmsInstaller.php',
        'Composer\\Installers\\AsgardInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AsgardInstaller.php',
        'Composer\\Installers\\AttogramInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AttogramInstaller.php',
        'Composer\\Installers\\BaseInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BaseInstaller.php',
        'Composer\\Installers\\BitrixInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BitrixInstaller.php',
        'Composer\\Installers\\BonefishInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BonefishInstaller.php',
        'Composer\\Installers\\CakePHPInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CakePHPInstaller.php',
        'Composer\\Installers\\ChefInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ChefInstaller.php',
        'Composer\\Installers\\CiviCrmInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CiviCrmInstaller.php',
        'Composer\\Installers\\ClanCatsFrameworkInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ClanCatsFrameworkInstaller.php',
        'Composer\\Installers\\CockpitInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CockpitInstaller.php',
        'Composer\\Installers\\CodeIgniterInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CodeIgniterInstaller.php',
        'Composer\\Installers\\Concrete5Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Concrete5Installer.php',
        'Composer\\Installers\\CroogoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CroogoInstaller.php',
        'Composer\\Installers\\DecibelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DecibelInstaller.php',
        'Composer\\Installers\\DframeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DframeInstaller.php',
        'Composer\\Installers\\DokuWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DokuWikiInstaller.php',
        'Composer\\Installers\\DolibarrInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DolibarrInstaller.php',
        'Composer\\Installers\\DrupalInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DrupalInstaller.php',
        'Composer\\Installers\\ElggInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ElggInstaller.php',
        'Composer\\Installers\\EliasisInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/EliasisInstaller.php',
        'Composer\\Installers\\ExpressionEngineInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ExpressionEngineInstaller.php',
        'Composer\\Installers\\EzPlatformInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/EzPlatformInstaller.php',
        'Composer\\Installers\\FuelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/FuelInstaller.php',
        'Composer\\Installers\\FuelphpInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/FuelphpInstaller.php',
        'Composer\\Installers\\GravInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/GravInstaller.php',
        'Composer\\Installers\\HuradInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/HuradInstaller.php',
        'Composer\\Installers\\ImageCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ImageCMSInstaller.php',
        'Composer\\Installers\\Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Installer.php',
        'Composer\\Installers\\ItopInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ItopInstaller.php',
        'Composer\\Installers\\KanboardInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KanboardInstaller.php',
        'Composer\\Installers\\KnownInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KnownInstaller.php',
        'Composer\\Installers\\KodiCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KodiCMSInstaller.php',
        'Composer\\Installers\\KohanaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KohanaInstaller.php',
        'Composer\\Installers\\LanManagementSystemInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LanManagementSystemInstaller.php',
        'Composer\\Installers\\LaravelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LaravelInstaller.php',
        'Composer\\Installers\\LavaLiteInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LavaLiteInstaller.php',
        'Composer\\Installers\\LithiumInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LithiumInstaller.php',
        'Composer\\Installers\\MODULEWorkInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MODULEWorkInstaller.php',
        'Composer\\Installers\\MODXEvoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MODXEvoInstaller.php',
        'Composer\\Installers\\MagentoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MagentoInstaller.php',
        'Composer\\Installers\\MajimaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MajimaInstaller.php',
        'Composer\\Installers\\MakoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MakoInstaller.php',
        'Composer\\Installers\\MantisBTInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MantisBTInstaller.php',
        'Composer\\Installers\\MatomoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MatomoInstaller.php',
        'Composer\\Installers\\MauticInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MauticInstaller.php',
        'Composer\\Installers\\MayaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MayaInstaller.php',
        'Composer\\Installers\\MediaWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MediaWikiInstaller.php',
        'Composer\\Installers\\MiaoxingInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MiaoxingInstaller.php',
        'Composer\\Installers\\MicroweberInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MicroweberInstaller.php',
        'Composer\\Installers\\ModxInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ModxInstaller.php',
        'Composer\\Installers\\MoodleInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MoodleInstaller.php',
        'Composer\\Installers\\OctoberInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OctoberInstaller.php',
        'Composer\\Installers\\OntoWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OntoWikiInstaller.php',
        'Composer\\Installers\\OsclassInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OsclassInstaller.php',
        'Composer\\Installers\\OxidInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OxidInstaller.php',
        'Composer\\Installers\\PPIInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PPIInstaller.php',
        'Composer\\Installers\\PantheonInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PantheonInstaller.php',
        'Composer\\Installers\\PhiftyInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PhiftyInstaller.php',
        'Composer\\Installers\\PhpBBInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PhpBBInstaller.php',
        'Composer\\Installers\\PiwikInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PiwikInstaller.php',
        'Composer\\Installers\\PlentymarketsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PlentymarketsInstaller.php',
        'Composer\\Installers\\Plugin' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Plugin.php',
        'Composer\\Installers\\PortoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PortoInstaller.php',
        'Composer\\Installers\\PrestashopInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PrestashopInstaller.php',
        'Composer\\Installers\\ProcessWireInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ProcessWireInstaller.php',
        'Composer\\Installers\\PuppetInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PuppetInstaller.php',
        'Composer\\Installers\\PxcmsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PxcmsInstaller.php',
        'Composer\\Installers\\RadPHPInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/RadPHPInstaller.php',
        'Composer\\Installers\\ReIndexInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ReIndexInstaller.php',
        'Composer\\Installers\\Redaxo5Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Redaxo5Installer.php',
        'Composer\\Installers\\RedaxoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/RedaxoInstaller.php',
        'Composer\\Installers\\RoundcubeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/RoundcubeInstaller.php',
        'Composer\\Installers\\SMFInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SMFInstaller.php',
        'Composer\\Installers\\ShopwareInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ShopwareInstaller.php',
        'Composer\\Installers\\SilverStripeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SilverStripeInstaller.php',
        'Composer\\Installers\\SiteDirectInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SiteDirectInstaller.php',
        'Composer\\Installers\\StarbugInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/StarbugInstaller.php',
        'Composer\\Installers\\SyDESInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SyDESInstaller.php',
        'Composer\\Installers\\SyliusInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SyliusInstaller.php',
        'Composer\\Installers\\TaoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TaoInstaller.php',
        'Composer\\Installers\\TastyIgniterInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TastyIgniterInstaller.php',
        'Composer\\Installers\\TheliaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TheliaInstaller.php',
        'Composer\\Installers\\TuskInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TuskInstaller.php',
        'Composer\\Installers\\UserFrostingInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/UserFrostingInstaller.php',
        'Composer\\Installers\\VanillaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/VanillaInstaller.php',
        'Composer\\Installers\\VgmcpInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/VgmcpInstaller.php',
        'Composer\\Installers\\WHMCSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WHMCSInstaller.php',
        'Composer\\Installers\\WinterInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WinterInstaller.php',
        'Composer\\Installers\\WolfCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WolfCMSInstaller.php',
        'Composer\\Installers\\WordPressInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WordPressInstaller.php',
        'Composer\\Installers\\YawikInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/YawikInstaller.php',
        'Composer\\Installers\\ZendInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ZendInstaller.php',
        'Composer\\Installers\\ZikulaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ZikulaInstaller.php',
        'Dotenv\\Dotenv' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Dotenv.php',
        'Dotenv\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
        'Dotenv\\Exception\\InvalidEncodingException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidEncodingException.php',
        'Dotenv\\Exception\\InvalidFileException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
        'Dotenv\\Exception\\InvalidPathException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
        'Dotenv\\Exception\\ValidationException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
        'Dotenv\\Loader\\Loader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Loader.php',
        'Dotenv\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/LoaderInterface.php',
        'Dotenv\\Loader\\Resolver' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Resolver.php',
        'Dotenv\\Parser\\Entry' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Entry.php',
        'Dotenv\\Parser\\EntryParser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/EntryParser.php',
        'Dotenv\\Parser\\Lexer' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Lexer.php',
        'Dotenv\\Parser\\Lines' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Lines.php',
        'Dotenv\\Parser\\Parser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Parser.php',
        'Dotenv\\Parser\\ParserInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/ParserInterface.php',
        'Dotenv\\Parser\\Value' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Value.php',
        'Dotenv\\Repository\\AdapterRepository' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/AdapterRepository.php',
        'Dotenv\\Repository\\Adapter\\AdapterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/AdapterInterface.php',
        'Dotenv\\Repository\\Adapter\\ApacheAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ApacheAdapter.php',
        'Dotenv\\Repository\\Adapter\\ArrayAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php',
        'Dotenv\\Repository\\Adapter\\EnvConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\GuardedWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/GuardedWriter.php',
        'Dotenv\\Repository\\Adapter\\ImmutableWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ImmutableWriter.php',
        'Dotenv\\Repository\\Adapter\\MultiReader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/MultiReader.php',
        'Dotenv\\Repository\\Adapter\\MultiWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/MultiWriter.php',
        'Dotenv\\Repository\\Adapter\\PutenvAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php',
        'Dotenv\\Repository\\Adapter\\ReaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php',
        'Dotenv\\Repository\\Adapter\\ReplacingWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReplacingWriter.php',
        'Dotenv\\Repository\\Adapter\\ServerConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\WriterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php',
        'Dotenv\\Repository\\RepositoryBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php',
        'Dotenv\\Repository\\RepositoryInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryInterface.php',
        'Dotenv\\Store\\FileStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/FileStore.php',
        'Dotenv\\Store\\File\\Paths' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Paths.php',
        'Dotenv\\Store\\File\\Reader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Reader.php',
        'Dotenv\\Store\\StoreBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreBuilder.php',
        'Dotenv\\Store\\StoreInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreInterface.php',
        'Dotenv\\Store\\StringStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StringStore.php',
        'Dotenv\\Util\\Regex' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Util/Regex.php',
        'Dotenv\\Util\\Str' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Util/Str.php',
        'Dotenv\\Validator' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Validator.php',
        'Env\\Env' => __DIR__ . '/..' . '/oscarotero/env/src/Env.php',
        'GrahamCampbell\\ResultType\\Error' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Error.php',
        'GrahamCampbell\\ResultType\\Result' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Result.php',
        'GrahamCampbell\\ResultType\\Success' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Success.php',
        'PhpOption\\LazyOption' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/LazyOption.php',
        'PhpOption\\None' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/None.php',
        'PhpOption\\Option' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Option.php',
        'PhpOption\\Some' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Some.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Roots\\Bedrock\\Autoloader' => __DIR__ . '/..' . '/roots/bedrock-autoloader/src/Autoloader.php',
        'Roots\\Composer\\WordPressCoreInstaller' => __DIR__ . '/..' . '/roots/wordpress-core-installer/src/WordPressCoreInstaller.php',
        'Roots\\Composer\\WordPressCorePlugin' => __DIR__ . '/..' . '/roots/wordpress-core-installer/src/WordPressCorePlugin.php',
        'Roots\\WPConfig\\Config' => __DIR__ . '/..' . '/roots/wp-config/src/Config.php',
        'Roots\\WPConfig\\Exceptions\\ConstantAlreadyDefinedException' => __DIR__ . '/..' . '/roots/wp-config/src/Exceptions/ConstantAlreadyDefinedException.php',
        'Roots\\WPConfig\\Exceptions\\UndefinedConfigKeyException' => __DIR__ . '/..' . '/roots/wp-config/src/Exceptions/UndefinedConfigKeyException.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'Symfony\\Polyfill\\Php80\\PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/PhpToken.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7fd016f83e0c3b6fead5983747d21ce9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7fd016f83e0c3b6fead5983747d21ce9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7fd016f83e0c3b6fead5983747d21ce9::$classMap;

        }, null, ClassLoader::class);
    }
}

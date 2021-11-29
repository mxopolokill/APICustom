<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.2.0@6d970a11479275300b5144e9373ce5feacfa9b91',
  'doctrine/dbal' => '3.1.4@821b4f01a36ce63ed36c090ea74767b72db367e9',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.5.0@4a75cead0bb01cadc57c81cfa7c905e3151ed119',
  'doctrine/doctrine-migrations-bundle' => '3.2.1@c1b10bc1466e08bba82640e49c7bbcce0c9853c2',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.3.2@b6e43bb5815f4dbb88c79a0fef1c669dfba52d58',
  'doctrine/orm' => '2.10.2@81d472f6f96b8b571cafefe8d2fef89ed9446a62',
  'doctrine/persistence' => '2.2.3@5e7bdbbfe9811c06e1f745d1c166647d5c47d6ee',
  'doctrine/sql-formatter' => '1.1.2@20c39c2de286a9d3262cc8ed282a4ae60e265894',
  'easycorp/easyadmin-bundle' => 'v3.5.14@ff6321a3410707f3f8d0b8f01517f2e3a59aa0b4',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'laminas/laminas-code' => '4.4.3@bb324850d09dd437b6acb142c13e64fdc725b0e1',
  'nelmio/cors-bundle' => '2.1.1@0b964b665016dfb61dd0fd2bb8c24afb1ae45a93',
  'nikic/php-parser' => 'v4.13.1@63a79e8daa781cac14e5195e63ed8ae231dd10fd',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '2.0.0@ef29f6d262798707a9edd554e2b82517ef3a9376',
  'sensio/framework-extra-bundle' => 'v6.2.1@7fd1d54c1b27f094a68ae15a99b7fc815857255f',
  'symfony/asset' => 'v5.3.11@547d3d91c759bae8e302630e68f6c4d415715bc3',
  'symfony/cache' => 'v5.3.11@862a05a5eea77c5b5a992fbacc849f492a728d9b',
  'symfony/cache-contracts' => 'v2.5.0@ac2e168102a2e06a2624f0379bde94cd5854ced2',
  'symfony/config' => 'v5.3.11@f080af00c441f1df40cf5c269707fdebe5740557',
  'symfony/console' => 'v5.3.11@3e7ab8f5905058984899b05a4648096f558bfeba',
  'symfony/dependency-injection' => 'v5.3.11@3793617321eb39b2e8e708f6fd61f875ec5f0ed6',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/doctrine-bridge' => 'v5.3.11@9b220ebc6fb4d5f15a8b74887c059b4d57ba85f8',
  'symfony/dotenv' => 'v5.3.10@97ffd3846f8a782086e82c1b5fdefb3f3ad078db',
  'symfony/error-handler' => 'v5.3.11@eec73dd7218713f48a7996583a741b3bae58c8d3',
  'symfony/event-dispatcher' => 'v5.3.11@661a7a6e085394f8513945669e31f7c1338a7e69',
  'symfony/event-dispatcher-contracts' => 'v2.5.0@66bea3b09be61613cd3b4043a65a8ec48cfa6d2a',
  'symfony/filesystem' => 'v5.3.4@343f4fe324383ca46792cae728a3b6e2f708fb32',
  'symfony/finder' => 'v5.3.7@a10000ada1e600d109a6c7632e9ac42e8bf2fb93',
  'symfony/flex' => 'v1.17.5@3f0dc66dcddff035a2ab98ed7e666dfd478b2712',
  'symfony/form' => 'v5.3.11@a5dbc8238db2b56057b293920c4b67879b50566b',
  'symfony/framework-bundle' => 'v5.3.11@f463eb8252f675a51330b1a28c982739cb9005f2',
  'symfony/http-client-contracts' => 'v2.5.0@ec82e57b5b714dbb69300d348bd840b345e24166',
  'symfony/http-foundation' => 'v5.3.11@d1e7059ebeb0b8f9fe5eb5b26eacd2e3c1f371cc',
  'symfony/http-kernel' => 'v5.3.11@cdccfda41510821c08983542e83c4b3d97357c77',
  'symfony/intl' => 'v5.3.11@6025b5307045b2fdcd844c1dfa2b02873b1d856c',
  'symfony/options-resolver' => 'v5.3.7@4b78e55b179003a42523a362cc0e8327f7a69b5e',
  'symfony/password-hasher' => 'v5.3.8@4bdaa0cca1fb3521bc1825160f3b5490c130bbda',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/polyfill-uuid' => 'v1.23.0@9165effa2eb8a31bb3fa608df9d529920d21ddd9',
  'symfony/property-access' => 'v5.3.8@2fbab5f95ddb6b8e85f38a6a8a04a17c0acc4d66',
  'symfony/property-info' => 'v5.3.8@39de5bed8c036f76ec0457ec52908e45d5497947',
  'symfony/proxy-manager-bridge' => 'v5.3.11@c774a6a852fd702154414e76f8dcd4e96086c2a8',
  'symfony/routing' => 'v5.3.11@fcbc2b81d55984f04bb704c2269755fa5aaf5cca',
  'symfony/runtime' => 'v5.3.11@0345ba5dbfc06a878bc48a7ec18ebc144cc60800',
  'symfony/security-bundle' => 'v5.3.12@be52715f4a7fd490937e4f881dc00ff5c0dcfeb3',
  'symfony/security-core' => 'v5.3.11@48c8ed9f4789439427917f0023f86895d64b73a7',
  'symfony/security-csrf' => 'v5.3.4@94b533195cf7fb21f3fae8ce349861c6401d969e',
  'symfony/security-guard' => 'v5.3.7@25f8d2a206505514a0ff14b16c4fb4e17a10cf18',
  'symfony/security-http' => 'v5.3.11@c25090783bd4209a42f9c43a235280fd23315a62',
  'symfony/serializer' => 'v5.3.12@bf570839e289e0bdde69c9fa867d3a42f5e8fde1',
  'symfony/service-contracts' => 'v2.5.0@1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc',
  'symfony/stopwatch' => 'v5.3.4@b24c6a92c6db316fee69e38c80591e080e41536c',
  'symfony/string' => 'v5.3.10@d70c35bb20bbca71fc4ab7921e3c6bda1a82a60c',
  'symfony/translation' => 'v5.3.11@17a965c8f3b1b348cf15d903ac53942984561f8a',
  'symfony/translation-contracts' => 'v2.5.0@d28150f0f44ce854e942b671fc2620a98aae1b1e',
  'symfony/twig-bridge' => 'v5.3.11@90e2f25b2a5b1a6d626c26cafcb00da9583fcd66',
  'symfony/twig-bundle' => 'v5.3.10@70157db4357eadf33f38e4e7efa5da4b294e17de',
  'symfony/uid' => 'v5.3.10@183336998e6b28c37ebf04ee18e6359dfb22084d',
  'symfony/validator' => 'v5.3.12@379ca8939ebcab78d835e188673396a9f8d6eee8',
  'symfony/var-dumper' => 'v5.3.11@a029b3a11b757f9cc8693040339153b4745a913f',
  'symfony/var-exporter' => 'v5.3.11@b16fcf355b810bcbccc2c6eac1d016725dbf9002',
  'symfony/yaml' => 'v5.3.11@226638aa877bc4104e619a15f27d8141cd6b4e4a',
  'twig/twig' => 'v3.3.3@a27fa056df8a6384316288ca8b0fa3a35fdeb569',
  'doctrine/data-fixtures' => '1.5.1@f18adf13f6c81c67a88360dca359ad474523f8e3',
  'doctrine/doctrine-fixtures-bundle' => '3.4.1@31ba202bebce0b66fe830f49f96228dcdc1503e7',
  'fzaninotto/faker' => 'v1.5.0@d0190b156bcca848d401fb80f31f504f37141c8d',
  'symfony/maker-bundle' => 'v1.36.3@0f40c826c0725208c254ddcd3481690e6c7e5047',
  'symfony/polyfill-ctype' => '*@dfeef8b611263887b6368e0552880c64da3b0758',
  'symfony/polyfill-iconv' => '*@dfeef8b611263887b6368e0552880c64da3b0758',
  'symfony/polyfill-php72' => '*@dfeef8b611263887b6368e0552880c64da3b0758',
  '__root__' => 'dev-master@dfeef8b611263887b6368e0552880c64da3b0758',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}

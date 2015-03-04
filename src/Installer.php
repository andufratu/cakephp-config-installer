<?php
namespace AnduFratu\CakePhpConfigInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller {

    public function supports($packageType) {
        return 'cakephp-config' === $packageType;
    }

    public function getPackageBasePath(PackageInterface $package) {
        return 'Config';
    }

}

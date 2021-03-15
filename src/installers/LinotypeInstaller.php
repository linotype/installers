<?php

namespace Linotype\Composer\Installers;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class LinotypeInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        // $prefix = substr($package->getPrettyName(), 0, 23);
        // if ('linotype/template-' !== $prefix) {
        //     throw new \InvalidArgumentException(
        //         'Unable to install template, linotype templates '
        //         .'should always start their package name with '
        //         .'"linotype/template-"'
        //     );
        // }
        //.substr($package->getPrettyName(), 23)
        return 'linotype/';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'linotype' === $packageType;
    }
}
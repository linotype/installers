<?php

namespace Linotype\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Linotype\Composer\Installers\LinotypeInstaller;

class LinotypeInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new LinotypeInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
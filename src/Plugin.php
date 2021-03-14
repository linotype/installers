<?php

namespace Linotype\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Linotype\Composer\Installer\LinotypeInstaller;

class LinotypeInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new LinotypeInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
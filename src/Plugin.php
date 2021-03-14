<?php

namespace Linotype\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class LinotypeInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new LinotypeInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
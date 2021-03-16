<?php

declare(strict_types = 1);

namespace Linotype\ComposerInstallersExtender\Installers;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;
use Composer\Installers\Installer as InstallerBase;

class Installer extends InstallerBase
{
    /**
     * A list of installer types.
     *
     * @var array
     */
    protected $installerTypes;

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package): string
    {
        return 'linotype/';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType): bool
    {
        return in_array($packageType, $this->getInstallerTypes());
    }

    /**
     * Get a list of custom installer types.
     *
     * @return array
     */
    public function getInstallerTypes(): array
    {
        return [
            'linotype',
            'linotype-block',
            'linotype-field',
            'linofield',
            'linotype-helper',
            'linotype-module',
            'linotype-template',
            'linotype-theme',
        ];
    }
}

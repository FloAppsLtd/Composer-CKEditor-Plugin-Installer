<?php

namespace FloApps\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class CKEditorInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new CKEditorInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}

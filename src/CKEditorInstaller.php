<?php

namespace FloApps\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class CKEditorInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $prefix = substr($package->getPrettyName(), 0, 17);
        if ('floapps/ckeditor-' !== $prefix) {
            throw new \InvalidArgumentException(
                'Unable to install CKEditor plugin, plugins '
                .'should always start their package name with '
                .'"floapps/ckeditor-",'
                .'given package prefix was ' . $prefix
            );
        }

        return 'vendor/ckeditor/ckeditor/plugins/'.substr($package->getPrettyName(), 17);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'ckeditor-plugin' === $packageType;
    }
}

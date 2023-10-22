<?php

namespace Lab\Specification\Module\Contracts;

interface Installer
{
    function installFile($filepath);

    function uninstallFile($filepath);

    function makeDir($directory);

    function dirExists($directory);

    function delDir($directory);
}
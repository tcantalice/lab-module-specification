<?php

namespace Lab\Specification\Module\Contracts;

/**
 * @version 1.0
 * @author Tarcisio Cantalice <tarcisiocantalice@gmail.com>
 */
interface Installer
{
    /**
     * Registra a instalação de um módulo a partir de seus metadados.
     *
     * @param Metadata $metadata
     */
    function install(Metadata $metadata): void;

    /**
     * Limpa o registro da instalação de um módulo a partir de seus metadados.
     *
     * @param Metadata $metadata
     */
    function uninstall(Metadata $metadata): void;

    /**
     * Verifica se um módulo está instalado.
     *
     * @param Metadata $metadata
     *
     * @return bool
     */
    function installed(Metadata $metadata): bool;


    /**
     * Instala todas as configurações para o módulo
     *
     * @param String $path
     */
    function installConfig(String $path): void;

    /**
     * Desinstala as configurações do módulo
     *
     * @param String $path
     */
    function uninstallConfig(String $path): void;
}
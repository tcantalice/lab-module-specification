<?php

namespace Lab\Specification\Module\Contracts;

use Lab\Specification\Module\Metadata;

interface Module
{
    /**
     * @return Metadata
     */
    function metadata();

    /**
     * Registra o módulo e o torna disponível para a aplicação durante a execução
     *
     * @param Register $register
     * @return void
     */
    function register(Register $register);

    /**
     * Inicializa o módulo após todo o registro ter sido realizado
     *
     * @param Register $register
     *
     * @return void
     */
    function initialize(Register $register);

    /**
     * @return boolean
     */
    function initialized();

    /**
     * @return void
     */
    function install(Installer $installer);

    /**
     * @return boolean
     */
    function installed();

    /**
     * Desinstala todos os artefatos do
     *
     * @param Installer $installer
     *
     * @return void
     */
    function uninstall(Installer $installer);

    /**
     * Fornece a lista de serviços disponibilizados pelo módulo
     *
     * @return mixed
     */
    function getServices();
}
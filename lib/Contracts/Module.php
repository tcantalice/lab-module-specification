<?php

namespace Lab\Specification\Module\Contracts;

interface Module
{
    /**
     * @return Metadata
     */
    function getMetadata(): Metadata;

    /**
     * Registra o módulo e o torna disponível para a aplicação durante a execução
     *
     * @param Register $register
     * @return void
     */
    function register(Register $register): void;

    /**
     * Inicializa o módulo após todo o registro ter sido realizado
     *
     * @param Register $register
     *
     * @return void
     */
    function initialize(Register $register): void;

    /**
     * @return void
     */
    function install(Installer $installer);

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
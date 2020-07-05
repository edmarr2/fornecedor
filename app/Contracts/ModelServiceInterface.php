<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;

interface ModelServiceInterface
{
    /**
     * Todos as instancias de model
     *
     * @return mixed
     */
    public function all();

    /**
     * Busca o model
     *
     * @param mixed $id identificador do modelo
     * @return mixed instancia do modelo
     */
    public function find($id);

    /**
     * Busca o model. Aborta ao não encontrar
     *
     * @param int $id identificador do modelo
     * @return mixed instancia do modelo
     */
    public function findOrFail($id);

    /**
     * Indica se modelo existe
     *
     * @param mixed $idOuAtributosComValores se for um array de atributos,
     *                  deve ser composto por chave e valor, chave será o nome do atributo
     * @return boolean
     */
     public function exists($idOuAtributosComValores);

     /**
      * Indica se modelo não existe
      *
      * @param mixed $idOuAtributosComValores se for um array de atributos,
      *                  deve ser composto por chave e valor, chave será o nome do atributo
      * @return boolean
      */
      public function notExists($idOuAtributosComValores);

    /**
     * Cria o model
     *
     * @param  array $dados
     * @return mixed instancia do modelo
     */
    public function create(Array $dados);

    /**
     * Atualiza o model
     *
     * @param  Model $model
     * @param  array $dados
     */
    public function update(Model $model, Array $dados);

    /**
     * Deleta o model
     *
     * @param  mixed $model
     * @return void
     */
    public function destroy(Model $model);

    /**
     * Filtra todas as instancias de model
     *
     * @param integer $limite integer qtde de itens por pagina
     * @return Illuminate\Support\Collection
     */
    public function autocomplete($limite = 5);

    /**
     * Gera queryBuilder para o tabela
     *
     * @param array $filtros
     * @return \Illuminate\Database\Query\Builder
     */
    public function getTableQueryBuilder(array $filtros = []);
}

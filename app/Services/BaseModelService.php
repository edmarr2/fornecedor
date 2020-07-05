<?php

namespace App\Services;

use App\Contracts\Models\UserServiceInterface;
use Illuminate\Database\Eloquent\Model;
use App\Exceptions\ModelServiceException;
use App\Contracts\ModelServiceInterface;
abstract class BaseModelService implements ModelServiceInterface
{
    /**
     * Model
     *
     * @var Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * Retorna o model
     *
     * @return Illuminate\Database\Eloquent\Model
     */
    abstract function model();

    /**
     * Cria a instância de Service
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = $this->makeModel();
    }

    /**
     * Resolve a dependência de model
     *
     * @return void
     * @throws App\Exceptions\ServiceException
     */
    protected function makeModel()
    {
        $model = resolve($this->model());

        if ( ! $model instanceof Model) {
            return new ModelServiceException("A classe {$model} não é uma instancia de Illuminate\Database\Eloquent\Model");
        }

        return $model;
    }

    public function all()
    {
        return $this->model->get();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    public function exists($idOuAtributosComValores)
    {
        if (is_array($idOuAtributosComValores)) {
            $atributos = $idOuAtributosComValores;

            $query = $this->model;

            foreach($atributos as $atributo => $valor) {
                $query->where($atributo, $valor);
            }

            return $query->exists();
        }

        return $this->model->whereId($id)
            ->exists();
    }

    public function notExists($idOuAtributosComValores)
    {
        return !$this->exists($idOuAtributosComValores);
    }

    public function create(Array $dados)
    {
        $model = $this->makeModel();
        $model->fill($dados);
        $model->save();

        return $model;
    }

    public function update(Model $model, Array $dados)
    {
        $model = $model->fill($dados);
        $model->save();

        return $model;
    }

    public function destroy(Model $model)
    {
        $model->delete();
        return $model;
    }

    public function autocomplete($limite = 10)
    {
        $q = request()->input('q');

        $query = $this->model()::query();

        if ($q && $this->makeModel() instanceof \App\Contracts\ScopeFiltrarParaAutocompleteInterface) {
            $query->filtrarParaAutocomplete($q);
        }

        $query->limit($limite);

        return $query->get();
    }

    public function getTableQueryBuilder(array $filtros = [])
    {
        $query = $this->model()::query();

        if ($filtros && $this->makeModel() instanceof \App\Contracts\ScopeFiltrarParaTabelaInterface) {
            $query->filtrarParaTabela($filtros);
        }

        return $query;
    }
}

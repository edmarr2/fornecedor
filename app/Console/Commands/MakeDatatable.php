<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Str;

class MakeDatatable extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:datatable {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria um arquivo do tipo DataTable';

    /**
     * Replace the class name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceClass($stub, $name)
    {
        $stub = parent::replaceClass($stub, $name);
        $name = Str::of($this->argument('name'))->afterLast('/');
        return str_replace('DummyNameClass', $name, $stub);
    }

    /**
     * Get the desired class name from the input.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    public function  getNameInput()
    {
        return  '../Services/Tables/' . $this->argument('name') . "TableService";
    }

    /**
     * Replace the namespace for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceNamespace(&$stub, $name)
    {
        $name = $this->argument('name');

        if (Str::contains($name, '/')) {
            $namespace = Str::of($name)->beforeLast('/');
            $namespace =  str_replace('/', "\\", $namespace);
            $stub = str_replace('DummyNameSpace', $namespace, $stub);
        } else {
            $stub = str_replace('\DummyNameSpace', '', $stub);
        }

        // editar DummyNameRoutes
        $route = Str::of($name)
            ->explode('/')
            ->map(function ($string) {
                return Str::kebab($string, '_');
            })
            ->implode('.');

        $stub = str_replace('DummyNameRoutes', $route, $stub);

        return parent::replaceNamespace($stub, $name);
    }

    /**
	 * Get the stub file for the generator.
	 *
	 * @return string
	 */
	protected function getStub()
	{
		return  app_path() . '/Console/Commands/Stubs/make-datatable.stub';
	}

    /**
	 * Get the default namespace for the class.
	 *
	 * @param  string  $rootNamespace
	 * @return string
	 */
	protected function getDefaultNamespace($rootNamespace)
	{
		return $rootNamespace . '\DataTables';
	}

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'O nome da Table.'],
        ];
    }
}

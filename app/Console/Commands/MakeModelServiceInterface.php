<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Str;

class MakeModelServiceInterface extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:model-service-interface {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria um arquivo do tipo ModelServiceInterface';

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
        return $this->argument('name') . 'ServiceInterface';
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

        return parent::replaceNamespace($stub, $name);
    }

    /**
	 * Get the stub file for the generator.
	 *
	 * @return string
	 */
	protected function getStub()
	{
		return  app_path() . '/Console/Commands/Stubs/make-model-service-interface.stub';
	}

    /**
	 * Get the default namespace for the class.
	 *
	 * @param  string  $rootNamespace
	 * @return string
	 */
	protected function getDefaultNamespace($rootNamespace)
	{
		return $rootNamespace . '\Contracts\Models';
	}

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'O nome da ServiceInterface.'],
        ];
    }
}

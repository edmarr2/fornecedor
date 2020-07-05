<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class MakeView extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view-index {name} {type?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria um arquivo(s) do tipo view';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $tipos = ['index', 'show', 'edit', 'create', 'form'];

        if ($this->argument('type')) {
            if (!in_array($this->argument('type'), $tipos)) {
                throw new \Exception('Tipo inválido. Deve ser: ' . implode(', ', $tipos));
            }
            return parent::handle();
        }

        foreach($tipos as $tipo) {
            $this->call('make:view', [
                'name' => $this->argument('name'),
                'type' => $tipo,
            ]);
        }
    }

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

        // Name class
        $name = Str::of($this->argument('name'))->afterLast('/');
        $stub = str_replace('DummyName', Str::of($name)->ucfirst(), $stub);

        // Rotas
        $name = $this->argument('name');
        $route = Str::of($name)
            ->explode('/')
            ->map(function ($string) {
                return Str::kebab($string);
            })
            ->implode('.');

        $stub = str_replace('DummyRoute', $route, $stub);

        return $stub;
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
        return  '../resources/views/' . $this->argument('name') . "/{$this->argument('type')}.blade";
    }

    /**
	 * Get the stub file for the generator.
	 *
	 * @return string
	 */
	protected function getStub()
	{
		return  app_path() . "/Console/Commands/Stubs/make-view-{$this->argument('type')}.stub";
	}
}

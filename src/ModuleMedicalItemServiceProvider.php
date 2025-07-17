<?php

namespace Hanafalah\ModuleMedicalItem;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

class ModuleMedicalItemServiceProvider extends BaseServiceProvider
{
    protected $__config_module_medical_item = [];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerMainClass(ModuleMedicalItem::class)
            ->registerCommandService(Providers\CommandServiceProvider::class);
            // ->registers(['*']);
    }

    public function boot(){
        $this->registers([
            '*',
            'Config' => function() {
                $this->__config_module_medical_item = config('module-medical-item');
            },
            'Provider' => function(){
                $this->registerOverideConfig('module-medical-item',__DIR__.'/../'.$this->__config_module_medical_item['libs']['config']);
            },
            'Model', 'Database'
        ]);
    }

    protected function dir(): string
    {
        return __DIR__ . '/';
    }

    // protected function migrationPath(string $path = ''): string
    // {
    //     return database_path($path);
    // }
}

<?php

namespace Gii\ModuleMedicalItem;

use Zahzah\LaravelSupport\Providers\BaseServiceProvider;

class ModuleMedicalItemServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerMainClass(ModuleMedicalItem::class)
             ->registerCommandService(Providers\CommandServiceProvider::class)
             ->registers([
                '*',
                'Services'  => function(){
                    $this->binds([
                        Contracts\ModuleMedicalItem::class   => ModuleMedicalItem::class,
                        Contracts\MedicalItem::class         => Schemas\MedicalItem::class,
                        Contracts\Medicine::class            => Schemas\Medicine::class,
                        Contracts\MedicTool::class           => Schemas\MedicTool::class                        
                    ]);
                },
             ]);
    }

    protected function dir(): string{
        return __DIR__.'/';
    }

    protected function migrationPath(string $path = ''): string{
        return database_path($path);
    }
}

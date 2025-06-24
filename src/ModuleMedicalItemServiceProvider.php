<?php

namespace Hanafalah\ModuleMedicalItem;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

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
            ->registers(['*']);
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

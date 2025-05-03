<?php

namespace Hanafalah\ModuleMedicalItem\Commands;

class InstallMakeCommand extends EnvironmentCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module-medical-item:install';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command ini digunakan untuk installing awal medical item module';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $provider = 'Hanafalah\ModuleMedicalItem\ModuleMedicalItemServiceProvider';

        $this->callSilent('vendor:publish', [
            '--provider' => $provider,
            '--tag'      => 'migrations'
        ]);
        $this->info('✔️  Created migrations');

        $this->comment('hanafalah/module-medical-item installed successfully.');
    }
}

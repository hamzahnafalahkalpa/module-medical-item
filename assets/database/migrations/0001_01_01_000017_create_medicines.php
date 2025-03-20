<?php

use Hanafalah\ModuleMedicalItem\Models\Medicine;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Hanafalah\ModuleItem\Models\{
      ItemStuff
};

return new class extends Migration
{
      use Hanafalah\LaravelSupport\Concerns\NowYouSeeMe;

      private $__table;

      public function __construct()
      {
            $this->__table = app(config('database.models.Medicine', Medicine::class));
      }

      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up(): void
      {
            $table_name = $this->__table->getTable();
            if (!$this->isTableExists()) {
                  Schema::create($table_name, function (Blueprint $table) {
                        $itemStuff = app(config('database.models.ItemStuff', ItemStuff::class));

                        $table->id();
                        $table->string('name');
                        $table->string('status')->nullable();
                        $table->string('acronym')->nullable();
                        $table->boolean('is_lasa')->default(false)->nullable(false);
                        $table->boolean('is_antibiotic')->default(false)->nullable(false);
                        $table->boolean('is_high_alert')->default(false)->nullable(false);
                        $table->boolean('is_narcotic')->default(false)->nullable(false);

                        $table->foreignIdFor($itemStuff::class, 'usage_location_id')
                              ->nullable()->index()->constrained($itemStuff->getTable(), $itemStuff->getKeyName())
                              ->cascadeOnUpdate()->nullOnDelete();

                        $table->foreignIdFor($itemStuff::class, 'usage_route_id')
                              ->nullable()->index()->constrained($itemStuff->getTable(), $itemStuff->getKeyName())
                              ->cascadeOnUpdate()->nullOnDelete();

                        $table->foreignIdFor($itemStuff::class, 'therapeutic_class_id')
                              ->nullable()->index()->constrained($itemStuff->getTable(), $itemStuff->getKeyName())
                              ->cascadeOnUpdate()->nullOnDelete();

                        $table->foreignIdFor($itemStuff::class, 'dosage_form_id')
                              ->nullable()->index()->constrained($itemStuff->getTable(), $itemStuff->getKeyName())
                              ->cascadeOnUpdate()->nullOnDelete();

                        $table->foreignIdFor($itemStuff::class, 'package_category_id')
                              ->nullable()->index()->constrained($itemStuff->getTable(), $itemStuff->getKeyName())
                              ->cascadeOnUpdate()->nullOnDelete();

                        $table->foreignIdFor($itemStuff::class, 'selling_category_id')
                              ->nullable()->index()->constrained($itemStuff->getTable(), $itemStuff->getKeyName())
                              ->cascadeOnUpdate()->nullOnDelete();

                        $table->json('props')->nullable();
                        $table->timestamps();
                        $table->softDeletes();
                  });
            }
      }

      /**
       * Reverse the migrations.
       */
      public function down(): void
      {
            Schema::dropIfExists($this->__table->getTable());
      }
};

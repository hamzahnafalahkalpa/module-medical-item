<?php

namespace Gii\ModuleMedicalItem\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Zahzah\LaravelSupport\Contracts\DataManagement;

interface MedicalItem extends DataManagement {
    public function commonMedicalItem(array $morphs,mixed $conditionals = null): Builder;
    public function getMedicalItem(): mixed;
    public function storeMedicalItem(): array;
    public function prepareShowMedicalItem(? Model $model = null): Model;
    public function showMedicalItem(? Model $model = null): array;     
    public function prepareViewMedicalItemPaginate(mixed $cache_reference_type,? array $morphs = null, int $perPage = 50, array $columns = ['*'], string $pageName = 'page',? int $page = null,? int $total = null): LengthAwarePaginator;
    public function viewMedicalItemPaginate(mixed $reference_type, ? array $morphs = null, int $perPage = 50, array $columns = ['*'], string $pageName = 'page',? int $page = null,? int $total = null): array;
    public function prepareViewMedicalItemList(mixed $cache_reference_type,? array $morphs = null): Collection;
    public function viewMedicalItemList(mixed $cache_reference_type, ? array $morphs = null): array;
    public function get(mixed $conditionals = null) : Collection;
    public function refind(mixed $id = null) :  Model|null;
    public function medicalItem(mixed $conditionals=null): Builder;
}

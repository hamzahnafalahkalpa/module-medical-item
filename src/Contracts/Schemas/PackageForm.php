<?php

namespace Hanafalah\ModuleMedicalItem\Contracts\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\PackageFormData;
//use Hanafalah\ModuleMedicalItem\Contracts\Data\PackageFormUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Hanafalah\ModuleItem\Contracts\Schemas\ItemStuff;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMedicalItem\Schemas\PackageForm
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updatePackageForm(?PackageFormData $package_form_dto = null)
 * @method Model prepareUpdatePackageForm(PackageFormData $package_form_dto)
 * @method bool deletePackageForm()
 * @method bool prepareDeletePackageForm(? array $attributes = null)
 * @method mixed getPackageForm()
 * @method ?Model prepareShowPackageForm(?Model $model = null, ?array $attributes = null)
 * @method array showPackageForm(?Model $model = null)
 * @method Collection prepareViewPackageFormList()
 * @method array viewPackageFormList()
 * @method LengthAwarePaginator prepareViewPackageFormPaginate(PaginateData $paginate_dto)
 * @method array viewPackageFormPaginate(?PaginateData $paginate_dto = null)
 * @method Model prepareStorePackageForm(PackageFormData $package_form_dto)
 * @method array storePackageForm(?PackageFormData $package_form_dto = null)
 * @method Collection prepareStoreMultiplePackageForm(array $datas)
 * @method array storeMultiplePackageForm(array $datas)
 */

interface PackageForm extends ItemStuff{}
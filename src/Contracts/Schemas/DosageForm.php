<?php

namespace Hanafalah\ModuleMedicalItem\Contracts\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\DosageFormData;
//use Hanafalah\ModuleMedicalItem\Contracts\Data\DosageFormUpdateData;
use Hanafalah\ModuleItem\Contracts\Schemas\ItemStuff;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMedicalItem\Schemas\DosageForm
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateDosageForm(?DosageFormData $dosage_form_dto = null)
 * @method Model prepareUpdateDosageForm(DosageFormData $dosage_form_dto)
 * @method bool deleteDosageForm()
 * @method bool prepareDeleteDosageForm(? array $attributes = null)
 * @method mixed getDosageForm()
 * @method ?Model prepareShowDosageForm(?Model $model = null, ?array $attributes = null)
 * @method array showDosageForm(?Model $model = null)
 * @method Collection prepareViewDosageFormList()
 * @method array viewDosageFormList()
 * @method LengthAwarePaginator prepareViewDosageFormPaginate(PaginateData $paginate_dto)
 * @method array viewDosageFormPaginate(?PaginateData $paginate_dto = null)
 * @method Model prepareStoreDosageForm(DosageFormData $dosage_form_dto)
 * @method array storeDosageForm(?DosageFormData $dosage_form_dto = null)
 * @method Collection prepareStoreMultipleDosageForm(array $datas)
 * @method array storeMultipleDosageForm(array $datas)
 */

interface DosageForm extends ItemStuff{}
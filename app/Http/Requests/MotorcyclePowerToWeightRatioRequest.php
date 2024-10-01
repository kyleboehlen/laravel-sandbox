<?php

namespace App\Http\Requests;

use App\Models\MotorcycleModel;
use Illuminate\Foundation\Http\FormRequest;

class MotorcyclePowerToWeightRatioRequest extends FormRequest
{
    public MotorcycleModel $model;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Returns 404 on invalid ID
        logger($this->route('model_id'));
        $this->model = MotorcycleModel::findOrFail($this->route('model_id'));
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}

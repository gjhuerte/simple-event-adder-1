<?php

namespace App\Http\Requests\EventRequests;

use App\Http\Enums\DaysEnum;
use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $days = implode(',', DaysEnum::getDays());

        return [
            'name' => 'required|between:1,100|string',
            'from_date' => 'required|date',
            'to_date' => 'required|date|after:from_date',
            'days' => 'required|array',
            'days.*' => "bail|in:$days",
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'from_date' => 'Starting Date',
            'to_date' => 'Ending Date',
        ];
    }
}

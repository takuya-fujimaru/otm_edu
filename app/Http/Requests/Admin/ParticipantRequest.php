<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use App\User;

class ParticipantRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::user()->type == User::TYPE_ADMIN;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'training_id' => 'required|integer|exists:trainings,id',
            'company_id' => 'required|integer|exists:companies,id',
            'user_id' => 'required|integer|exists:users,id',
            'date_from' => 'required|date|min:10|max:10',
            'date_to' => 'required|date|min:10|max:10',
        ];
    }
}

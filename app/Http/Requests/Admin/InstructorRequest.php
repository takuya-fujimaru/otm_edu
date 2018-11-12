<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use App\User;

class InstructorRequest extends Request
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
            'name' => 'required|string|max:30',
            'icon' => 'required|image'
        ];
    }
}

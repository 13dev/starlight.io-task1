<?php


namespace App\Http\Requests;

use App\Commercial;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use Pearl\RequestValidate\RequestAbstract;

class CommercialRequest extends RequestAbstract
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'order' => ['in:desc,asc'],
            'sortBy' => ['in:created_at,price']
//            Commercial::DESCRIPTION => ['required', 'max:1000', 'min:3',],
//            Commercial::TITLE => ['required', 'max:200', 'min:3',],
        ];
    }


    public function messages(): array
    {
        return [
            'order.in' => trans('api.commercial.order_in'),
            'sortBy.in' => trans('api.commercial.sortby_in'),
        ];
    }

}

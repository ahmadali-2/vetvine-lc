<?php

namespace App\Http\Requests\Admin\Coupons;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "coupon_code"   => ["required"],
            "coupon_type"   => ["required",],
            "amount"        => ['required','numeric','min:0'],
            "start_at"      => ['required','date','after:today'],
            "expired_at"    => ['required','date','after:start_at'],
        ];
    }
    public function messages()
    {
        return [
            // 'coupon_code.required' => 'Coupon Code Is Required',
            // 'coupon_code.unique'   => 'Coupon Code Is Already Taken',
            // 'coupon_code.max'      => 'Coupon Code Must Be At Least 32 Characters',
            'coupon_type.required' => 'Coupon Type Is Required',
            'amount.required'      => 'Amount Is Required',
            'amount.min'           => 'Amount Can Not Be Negative',
            'start_at.required'    => 'Start Date Is Required',
            'start_at.after'       => 'Start Date Must Be After Tomorrow',
            'expired_at.required'  => 'Expired Date Is Required',
            'expired_at.after'     => 'Expired Date Must Be After Start Date',
        ];
    }
}

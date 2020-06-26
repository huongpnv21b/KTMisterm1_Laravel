<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
        return [
            'inputName' => 'required',
            'inputTyperoom' => 'required',
            'inputNumber' => 'required',
            'inputArea' => 'required',
            'inputPrice' => 'required|numeric',
            'inputFile' => 'required|image'
        ];
    }

    public function messages()
    {
        return
        [
            'inputName.required' => 'Name không được bỏ trống',
			'inputTyperoom.required' => 'Type room khong duoc de trong',
			'inputNumber.required' => 'Number  không được bỏ trống',
            'inputArea.required' => 'Area không được bỏ trống',
            'inputPrice.numeric' => 'Vui long nhap so',
            'inputPrice.required' => 'Khoong duoc de trong',
            'inputFile.required' => 'Vui lòng chọn hình ảnh cho bài viết',
			'inputFile.image' => 'Hình ảnh không đúng định dạng'
        ];
    }
}

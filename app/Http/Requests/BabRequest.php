<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BabRequest extends FormRequest
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
            'subs_id' => 'required|integer|exists:subs,id',
            'name'=>'max:255',
            'judul_sub_bab_1'=>'max:255',
            'image_1'=>'image|max:1000',
            'video_1'=>'max:255',
            'judul_sub_bab_2'=>'max:255',
            'image_2'=>'image|max:1000',
            'video_2'=>'max:255',
            'judul_sub_bab_3'=>'max:255',
            'image_3'=>'image|max:1000',
            'video_3'=>'max:255',
            'judul_sub_bab_4'=>'max:255',
            'image_4'=>'image|max:1000',
            'video_4'=>'max:255',
        ];
    }
}

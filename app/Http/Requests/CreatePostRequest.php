<?php
//檔案：app/http/requests/CreatePostRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'title'=>'required'
        ];
    }
}

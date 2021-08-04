<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Article;

class ArticleRequest extends FormRequest
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
        $article= Article::find($this->article);

        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'title'     => 'min:10|required|unique:articles',
                    'text'      => 'min:10|required',
                    'thumbnail' => 'required|image'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'title'    => 'min:10|required|unique:articles,title,'.$article->id,
                    'text'     => 'min:10|required',
                    'thumbnail'=> 'required|image'
                ];
            }
            default:break;

        }
    }
}

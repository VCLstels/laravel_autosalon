<?php

namespace App\Http\Requests;

use App\Models\Article;
use Illuminate\Foundation\Http\FormRequest;

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

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Article::createSlug($this->title),
            'published_at'=>  $this->published_at ? now()->toDateTime() : null
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */


    public function rules()
    {
        return [
            'title'=> 'required|between:5, 100',
            'description' => 'required|max:255',
            'body'=> 'required|string',
            'slug' => 'required|unique:articles,slug',
            'published_at' => 'nullable'
        ];
    }
}

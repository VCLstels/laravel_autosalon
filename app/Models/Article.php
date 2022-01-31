<?php

namespace App\Models;

use App\Http\Requests\ArticleRequest;
use Faker\Factory;
use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use function Symfony\Component\String\Slugger\slug;


class Article extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'title',
            'body',
            'description',
            'slug',
            'published_at'
        ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

//    protected static function boot()
//    {
//        parent::boot();
//
//        static::created(function ($product) {
//
//            $product->slug = $product->createSlug($product->title);
//
//            $product->save();
//        });
//    }

    public static  function createSlug($name)
    {
        if (static::whereSlug($slug = Str::slug($name))->exists()) {
            $id = static::latest('id')->limit(1)->value('id');
            $slug =  Str::slug($name . '-' . $id+1);
            return $slug;
        }
        return $slug;
    }
}

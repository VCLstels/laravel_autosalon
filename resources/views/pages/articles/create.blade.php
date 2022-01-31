<?php
$ok =1;
?>
@extends('layouts.app')

@section('title', 'Создание новости')

@section('content')
<main class="flex-1 container mx-auto bg-white">
    <div class="p-4">
        <h1 class="text-black text-3xl font-bold mb-4">Создать новость</h1>

        <x-panels.articles.form.message :message="session('message')"/>

        <form action="{{ route('article.store') }}" method="post">
            @csrf
            <div class="mt-8 max-w-md">
                <div class="grid grid-cols-1 gap-6">
                    <div class="block">
                        <x-panels.articles.form.group for="field1" class="font-bold" :name="'Название новости'" :error="$errors->first('title')" >
                            <x-panels.articles.form.text  id="field1"  name="title" placeholder="Название" value="{{ old('title') }}"  />
                        </x-panels.articles.form.group>
                    </div>
                    <div class="block">
                        <x-panels.articles.form.group for="field2" class="font-bold" :name="'Краткое описание'" :error="$errors->first('description')" >
                            <x-panels.articles.form.text id="field2" placeholder="Краткое описание" name="description" value="{{ old('description') }}"  />
                        </x-panels.articles.form.group>
                    </div>
                    <div class="block">
                        <x-panels.articles.form.group for="field3" :name="'Полное описание'" :error="$errors->first('body')" >
                            <x-panels.articles.form.textarea id="field3" name="body" value="{{ old('body') }}"     />
                        </x-panels.articles.form.group>
                    </div>
                    <div class="block">
                        <div class="mt-2">
                            <div>
                                <x-panels.articles.form.checkbox :name="'Опубликовать'"/>
                            </div>
                        </div>
                    </div>

                    <div class="block">
                        <x-panels.articles.form.button class="bg-orange" :name="'Сохранить'"/>
                        <x-panels.articles.form.button class="bg-gray-400" :name="'Отменить'"/>
                    </div>
                </div>
            </div>
        </form>
    </div>

</main>
@endsection

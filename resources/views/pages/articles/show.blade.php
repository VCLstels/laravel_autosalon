@extends('layouts.app')

@section('title'){{ $article->title }}@stop

@section('content')
    <nav class="container mx-auto bg-gray-100 py-1 px-4 text-sm flex items-center space-x-2">
        <a class="hover:text-orange" href="{{ route('index') }}">Главная</a>
        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-3 w-3 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" />
        </svg>
        <a class="hover:text-orange" href="{{ route('article.index') }}">Новости</a>
        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-3 w-3 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" />
        </svg>
        <span>{{ $article->title }}</span>
    </nav>
    <main class="flex-1 container mx-auto bg-white flex">

        <div class="flex-1 grid grid-cols-4 lg:grid-cols-5 border-b">
            <aside class="hidden sm:block col-span-1 border-r p-4">
                <nav>
                    <ul class="text-sm">
                        <li>
                            <p class="text-xl text-black font-bold mb-4">Информация</p>
                            <ul class="space-y-2">
                                <x-panels.left_menu/>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </aside>
            <div class="col-span-4 sm:col-span-3 lg:col-span-4 p-4">
                <h1 class="text-black text-3xl font-bold mb-4">{{ $article->title }}</h1>

                <div class="space-y-4">

                    <img src="/assets/pictures/car_new_stinger.png" alt="" title="">

                    <div>
                        <span class="text-sm text-white italic rounded bg-orange px-2">Это</span>
                        <span class="text-sm text-white italic rounded bg-orange px-2">Теги</span>
                    </div>

                    <p>{{ $article->description }}</p>
                    <div>{!! $article->body !!}</div>
                </div>

                <div class="mt-4">
                    <a class="inline-flex items-center text-orange hover:opacity-75" href="{{ route('article.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        К списку новостей
                    </a>
                </div>
            </div>
        </div>

    </main>
@endsection

<?php

namespace App\Providers;

use App\Models\Article;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.menu', function ($view) {
            $menu = [
                [
                    'title' => 'Легковые',
                    'path' => ' ',
                ],
                [
                    'title' => 'Внедорожники',
                    'path' => ' ',
                ],
                [
                    'title' => 'Ратитетные',
                    'path' => 'catalog.html',
                ],
                [
                    'title' => 'Распродажа',
                    'path' => 'catalog.html',
                ],
                ['title' => 'Новинки',
                    'path' => 'catalog.html',
                ]
            ];
            $inmenu =
                [
                    'Легковые' =>
                        [
                            [
                                'title' => 'Седаны',
                                'path' => 'catalog.html',
                            ],
                            [
                                'title' => 'Хетчбеки',
                                'path' => 'catalog.html',
                            ],
                            [
                                'title' => 'Универсалы',
                                'path' => 'catalog.html',
                            ],
                            [
                                'title' => 'Купе',
                                'path' => 'catalog.html',
                            ],
                            [
                                'title' => 'Родстеры',
                                'path' => 'catalog.html',
                            ],
                        ],
                    'Внедорожники' =>
                        [
                            [
                                'title' => 'Рамные',
                                'path' => 'catalog.html',
                            ],
                            [
                                'title' => 'Пикапы',
                                'path' => 'catalog.html',
                            ],
                            [
                                'title' => 'Кросоверы',
                                'path' => 'catalog.html',
                            ]
                        ]
                ];
            $view->with('menu', $menu);
            $view->with('inmenu', $inmenu);

        });
        View::composer('components.panels.left_menu', function ($view) {
            $leftMenu = [
                [
                    'title' => 'О компании',
                    'path' => 'about',
                ],
                [
                    'title' => 'Контактная информация',
                    'path' => 'contacts',
                ],
                [
                    'title' => 'Условия продаж',
                    'path' => 'conditions',
                ],
                [
                    'title' => 'Финансовый отдел',
                    'path' => 'finance',
                ],
                [
                    'title' => 'Для клиентов',
                    'path' => 'clients',
                ],
            ];
            $view->with('leftMenu', $leftMenu);
        });
        View::composer('layouts.footer', function ($view) {
            $salons = ['/assets/pictures/test_salon_1.jpg', '/assets/pictures/test_salon_2.jpg'];
            $view->with('salons', $salons);
        });
    }
}

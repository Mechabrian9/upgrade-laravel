<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Ecommerce\Models\ProductCategory;
use Botble\Menu\Database\Traits\HasMenuSeeder;
use Botble\Page\Models\Page;

class MenuSeeder extends BaseSeeder
{
    use HasMenuSeeder;

    public function run(): void
    {
        $data = [
            [
                'name' => 'Main menu',
                'slug' => 'main-menu',
                'location' => 'main-menu',
                'items' => [
                    [
                        'title' => 'Home',
                        'url' => '/',
                    ],
                    [
                        'title' => 'Products',
                        'url' => '/products',
                        'children' => [
                            [
                                'title' => 'Woman wallet',
                                'reference_id' => 1,
                                'reference_type' => ProductCategory::class,
                            ],
                            [
                                'title' => 'Office bags',
                                'reference_id' => 2,
                                'reference_type' => ProductCategory::class,
                            ],
                            [
                                'title' => 'Hand bag',
                                'reference_id' => 3,
                                'reference_type' => ProductCategory::class,
                            ],
                            [
                                'title' => 'Backpack',
                                'reference_id' => 4,
                                'reference_type' => ProductCategory::class,
                            ],
                        ],
                    ],
                    [
                        'title' => 'Blog',
                        'reference_id' => 2,
                        'reference_type' => Page::class,
                    ],
                    [
                        'title' => 'FAQ',
                        'reference_id' => 5,
                        'reference_type' => Page::class,
                    ],
                    [
                        'title' => 'Contact',
                        'reference_id' => 3,
                        'reference_type' => Page::class,
                    ],
                ],
            ],
            [
                'name' => 'Customer services',
                'slug' => 'customer-services',
                'items' => [
                    [
                        'title' => 'Login',
                        'url' => '/login',
                    ],
                    [
                        'title' => 'Register',
                        'url' => '/register',
                    ],
                    [
                        'title' => 'Blog',
                        'reference_id' => 2,
                        'reference_type' => Page::class,
                    ],
                    [
                        'title' => 'Contact',
                        'reference_id' => 3,
                        'reference_type' => Page::class,
                    ],
                ],
            ],
        ];

        $this->createMenus($data);
    }
}

<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Page\Database\Traits\HasPageSeeder;
use Botble\Theme\Database\Traits\HasThemeOptionSeeder;
use Botble\Theme\Supports\ThemeSupport;

class ThemeOptionSeeder extends BaseSeeder
{
    use HasPageSeeder;
    use HasThemeOptionSeeder;

    public function run(): void
    {
        $this->uploadFiles('general');

        $this->createThemeOptions([
            'site_title' => 'HASA',
            'seo_title' => 'HASA - Multipurpose Laravel Fashion Shop',
            'seo_description' => 'HASA is made specifically for a Fashion store, but also well suited for an electronics store, furniture store, etc. It’s clean and minimal. Every page is fully responsive, making your creation look good on any device.',
            'copyright' => '© %Y Botble Technologies. All Rights Reserved.',
            'favicon' => 'general/favicon.png',
            'logo' => 'general/logo.png',
            'seo_og_image' => 'general/open-graph-image.png',
            'address' => 'North Link Building, 10 Admiralty Street, 757695 Singapore',
            'hotline' => '18006268',
            'email' => 'sales@botble.com',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'youtube' => 'https://youtube.com',
            'linkedin' => 'https://linkedin.com',
            'pinterest' => 'https://pinterest.com',
            'instagram' => 'https://instagram.com',
            'homepage_id' => '1',
            'blog_page_id' => '2',
            'cookie_consent_message' => 'Your experience on this site will be improved by allowing cookies ',
            'cookie_consent_learn_more_url' => url('cookie-policy'),
            'cookie_consent_learn_more_text' => 'Cookie Policy',
            'enabled_sticky_header' => 'yes',
            'product_page_banner_title' => 'Enjoy Shopping with us',
            'social_links' => ThemeSupport::getDefaultSocialLinksData(),
            'social_sharing' => ThemeSupport::getDefaultSocialSharingData(),
        ]);
    }
}

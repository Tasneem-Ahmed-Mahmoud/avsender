<?php

namespace App\Traits;

use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;

trait Seo
{
    public function metadata($key)
    {
        $seo = get_option($key, true);

        if ($key == 'seo_home') {
            JsonLdMulti::setTitle($seo->site_name ?? env('APP_NAME'));
            JsonLdMulti::setDescription($seo->matadescription ?? null);
            JsonLdMulti::addImage(asset($seo->preview ?? null));

            SEOMeta::setTitle($seo->site_name ?? env('APP_NAME'));
            SEOMeta::setDescription($seo->matadescription ?? null);
            SEOMeta::addKeyword($seo->matatag ?? null);

            SEOTools::setTitle($seo->site_name ?? env('APP_NAME'));
            SEOTools::setDescription($seo->matadescription ?? null);
            SEOTools::opengraph()->addProperty('keywords', $seo->matatag ?? null);
            SEOTools::opengraph()->addProperty('image', asset($seo->preview ?? null));
            SEOTools::twitter()->setTitle($seo->site_name ?? env('APP_NAME'));
            SEOTools::twitter()->setSite($seo->twitter_site_title ?? null);
            SEOTools::jsonLd()->addImage(asset($seo->preview ?? null));
        } else {
            JsonLdMulti::setTitle($seo->site_name ?? env('APP_NAME'));
            JsonLdMulti::setDescription($seo->matadescription ?? null);
            JsonLdMulti::addImage(asset($seo->preview ?? null));

            SEOMeta::setTitle($seo->site_name ?? env('APP_NAME'));
            SEOMeta::setDescription($seo->matadescription ?? null);
            SEOMeta::addKeyword($seo->matatag ?? null);

            SEOTools::setTitle($seo->site_name ?? env('APP_NAME'));
            SEOTools::setDescription($seo->matadescription ?? null);
            SEOTools::opengraph()->addProperty('keywords', $seo->matatag ?? null);
            SEOTools::opengraph()->addProperty('image', asset($seo->preview ?? null));
            SEOTools::twitter()->setTitle($seo->site_name ?? env('APP_NAME'));
            SEOTools::jsonLd()->addImage(asset($seo->preview ?? null));
        }
    }

    public function pageMetaData($data)
    {
        JsonLdMulti::setTitle($data['title'] ?? env('APP_NAME'));
        JsonLdMulti::setDescription($data['description'] ?? null);
        JsonLdMulti::addImage($data['preview'] ?? null);

        SEOMeta::setTitle($data['title'] ?? env('APP_NAME'));
        SEOMeta::setDescription($data['description'] ?? null);
        SEOTools::setTitle($data['title'] ?? env('APP_NAME'));
        SEOTools::setDescription($data['description'] ?? null);
        SEOMeta::addKeyword($data['tags'] ?? null);

        SEOTools::opengraph()->addProperty('keywords', $data['tags'] ?? null);
        SEOTools::opengraph()->addProperty('image', $data['preview'] ?? null);
        SEOTools::twitter()->setTitle($data['title'] ?? env('APP_NAME'));
        SEOTools::jsonLd()->addImage($data['preview'] ?? null);
    }

    public function pageMeta($meta)
    {
        JsonLdMulti::setTitle($meta->title?? env('APP_NAME'));
        JsonLdMulti::setDescription($meta->description ?? null);
        JsonLdMulti::addImage($meta->image ?? null);

        SEOMeta::setTitle($meta->title ?? env('APP_NAME'));
        SEOMeta::setDescription($meta->description ?? null);
        SEOTools::setTitle($meta->title ?? env('APP_NAME'));
        SEOTools::setDescription($meta->description ?? null);
        SEOMeta::addKeyword($meta->keywords ?? null);

        SEOTools::opengraph()->addProperty('keywords', $meta->keywords ?? null);
        SEOTools::opengraph()->addProperty('image', $meta->image ?? null);
        SEOTools::twitter()->setTitle($meta->title ?? env('APP_NAME'));
        SEOTools::jsonLd()->addImage($meta->image ?? null);
}
}
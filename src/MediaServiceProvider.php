<?php

namespace Jblv\Admin\Media;

use Illuminate\Support\ServiceProvider;

class MediaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'daimakuai-ext-media');

        MediaManager::boot();
    }
}
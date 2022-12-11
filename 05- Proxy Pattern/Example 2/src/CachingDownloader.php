<?php

namespace Amir\Proxy2;

class CachingDownloader implements Downloader
{

    private $downloader;
    private $cache = [];

    public function __construct(SimpleDownloader $downloader)
    {
        $this->downloader = $downloader;

    }

    public function download(string $url)
    {
        if (!isset($this->cache[$url])) {
            echo "CacheProxy MISS. ";
            $result = $this->downloader->download($url);
            $this->cache[$url] = $result;
        } else {
            echo "CacheProxy HIT. Retrieving result from cache.\n";
        }
        return $this->cache[$url];
    }
}
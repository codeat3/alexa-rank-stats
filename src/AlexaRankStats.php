<?php

namespace Codeat3\AlexaRankStats;

use Codeat3\AlexaRankStats\Exceptions\WrongMethodCallException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;

class AlexaRankStats
{
    private const ALEXA_DATA_URL = 'http://data.alexa.com/data?cli=10&url=';

    public string $domain;
    public Crawler $crawler;

    private function getAttributeValue($attribute, $tagPath)
    {
        $node = $this->crawler->filter('ALEXA > SD > '.$tagPath);
        if ($node->count() === 0) {
            return null;
        }

        return $node->first()->attr($attribute);
    }

    public function __construct($domain)
    {
        $this->domain = $domain;
        $this->crawler = new Crawler(Http::get(self::ALEXA_DATA_URL. $this->domain));
    }

    public function __call($function, $args)
    {
        preg_match_all('/get([A-Z]{1}[a-z]+)([A-Z]{1}[a-z]+)/', $function, $matches);
        if (
            isset($matches[1]) && count($matches[1]) === 1
            && isset($matches[2]) && count($matches[2]) === 1
        ) {
            dump('matche');

            return $this->getAttributeValue(Str::upper($matches[2][0]), Str::upper($matches[1][0]));
        }

        throw new WrongMethodCallException();
    }
}

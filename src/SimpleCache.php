<?php

namespace Grzojda\SimpleCache;

class SimpleCache
{

    private array $json;
    private string $filePath;

    function __construct(string $fileName)
    {
        $this->filePath = __DIR__ . '/Cached/' . $fileName;
        $this->loadFile();
    }

    public function checkKey($key) {
        if (array_key_exists($key, $this->json)) {
            return $this->json[$key];
        }

        return false;
    }

    public function saveValue($key, $value): void
    {
        $this->json[$key] = $value;
        $this->saveFile();
    }

    private function loadFile(): void
    {
        $string = file_get_contents($this->filePath);

        $this->json = json_decode($string, true);
    }

    private function saveFile(): void
    {
        file_put_contents($this->filePath, json_encode($this->json));
    }
}
<?php

namespace App\Helpers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Exception;

class JsonFileService
{
    public function createJsonFile(Collection $collection, string $filename, string $folder = 'json'): bool
    {
        
        $jsonData = json_encode($collection->toArray(), JSON_PRETTY_PRINT);
        

        if ($jsonData === false) {
            throw new Exception('JSON encoding error: ' . json_last_error_msg());
        }
        

        if (!Storage::exists($folder)) {
            Storage::makeDirectory($folder);
        }
        

        $fullPath = $folder . '/' . $filename . '.json';
        

        if (Storage::put($fullPath, $jsonData) === false) {
            throw new Exception("Error writing file: $fullPath");
        }

        return true;
    }

    
    public function getJsonFileAsBase64(string $filename): string
    {
        // Define the folder and file path.
        $folder   = 'json';
        $filePath = $folder . '/' . $filename;
    
        if (!Storage::exists($filePath)) 
        {
            throw new Exception("File not found: {$filePath}");
        }
    
        $jsonContent = Storage::get($filePath);
    
        return base64_encode($jsonContent);
    }
}

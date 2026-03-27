<?php

namespace Database\Seeders\Concerns;

trait LoadsOptionalSeederData
{
    protected function loadOptionalSeederData(string $filename): array
    {
        $path = database_path("seeders/private/{$filename}");

        if (! file_exists($path)) {
            return [];
        }
        
        $data = require $path;

        return is_array($data) ? $data : [];
    }
}

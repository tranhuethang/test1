<?php

namespace App\Services;

use App\Services\Interfaces\ConfigServiceInterface;
use App\Models\Config;

class ConfigService implements ConfigServiceInterface
{
    public function updateConfig(array $data, Config $configs)
    {
        return \DB::transaction(function () use ($data, $configs)
        {
            $configs->update($data);

            return $data;
        }
        );
    }
}
<?php

declare(strict_types=1);

namespace App;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\Provider\SchemaProvider;

final class CustomSchemaProvider implements SchemaProvider
{
    public function createSchema(): Schema
    {
        return new Schema();
    }
}

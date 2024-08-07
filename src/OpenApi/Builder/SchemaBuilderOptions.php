<?php

namespace OpenSolid\OpenApiAssistant\OpenApi\Builder;

final readonly class SchemaBuilderOptions
{
    public function __construct(
        public bool $writeOnly = false,
        public bool $readOnly = false,
        public string $suffix = '',
    ) {
    }
}

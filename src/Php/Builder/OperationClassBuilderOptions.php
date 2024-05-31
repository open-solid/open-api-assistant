<?php

namespace OpenSolid\OpenApiAssistant\Php\Builder;

final readonly class OperationClassBuilderOptions
{
    public function __construct(
        public string $suffix = 'Action',
    ) {
    }
}

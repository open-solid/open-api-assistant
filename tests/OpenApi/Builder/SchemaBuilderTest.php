<?php

namespace OpenSolid\OpenApiAssistant\Tests\OpenApi\Builder;

use OpenApi\Annotations\OpenApi;
use OpenApi\Context;
use OpenSolid\OpenApiAssistant\OpenApi\Builder\SchemaBuilder;
use OpenSolid\OpenApiAssistant\Tests\AbstractBuilderTestCase;

class SchemaBuilderTest extends AbstractBuilderTestCase
{
    public function testBuild(): void
    {
        $openApi = new OpenApi(['_context' => new Context(['version' => '3.1.0'])]);
        $payload = $this->loadFileContent('open-api/builder/schema/user_payload.json');

        $schemaBuilder = new SchemaBuilder();
        $schemaBuilder->build('User', $payload, $openApi);

        $this->assertTrue($openApi->components->validate());
        $this->assertSameResult($openApi->components->toYaml(), 'open-api/builder/schema/user_spec.yaml');
    }
}

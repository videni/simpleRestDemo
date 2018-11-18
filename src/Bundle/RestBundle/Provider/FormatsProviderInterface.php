<?php

declare(strict_types=1);

namespace App\Bundle\RestBundle\Provider;

/**
 * Extracts formats for a given operation according to the retrieved Metadata.
 */
interface FormatsProviderInterface
{
    /**
     * Finds formats for an operation.
     */
    public function getFormatsFromAttributes(array $attributes): array;
}
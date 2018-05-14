<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\DataTransformer;

interface DataTransformerInterface
{
    /**
     * @param array $data
     * @return array
     */
    public function transform(array $data): array;
}
<?php

namespace TargetApi\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\ObjectNormalizer as BaseObjectNormalizer;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class ObjectNormalizer extends BaseObjectNormalizer
{
    public function normalize($object, $format = null, array $context = [])
    {
        $data = parent::normalize($object, $format, $context);

        return array_filter($data, function ($value) {
            return null !== $value;
        });
    }
}

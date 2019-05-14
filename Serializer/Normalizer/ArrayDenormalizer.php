<?php

namespace TargetApi\Serializer\Normalizer;

use Symfony\Component\Serializer\Exception\BadMethodCallException;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\NotNormalizableValueException;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class ArrayDenormalizer extends \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer
{
    /**
     * @var DenormalizerInterface|SerializerInterface
     */
    private $serializer;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (null === $this->serializer) {
            throw new BadMethodCallException('Please set a serializer before calling denormalize()!');
        }
        if (!\is_array($data)) {
            throw new InvalidArgumentException('Data expected to be an array, '.\gettype($data).' given.');
        }
        if ('[]' !== substr($class, -2)) {
            throw new InvalidArgumentException('Unsupported class: '.$class);
        }

        $serializer = $this->serializer;
        $class = substr($class, 0, -2);

        $builtinType = isset($context['key_type']) ? $context['key_type']->getBuiltinType() : null;
        //Финт ушами для таргета
        if (isset($data['items'])) {
            $data = $data['items'];
        }
        foreach ($data as $key => $value) {
            if (null !== $builtinType && !\call_user_func('is_'.$builtinType, $key)) {
                throw new NotNormalizableValueException(sprintf('The type of the key "%s" must be "%s" ("%s" given).', $key, $builtinType, \gettype($key)));
            }

            $data[$key] = $serializer->denormalize($value, $class, $format, $context);
        }

        return $data;
    }

    /**
     * {@inheritdoc}
     */
    public function setSerializer(SerializerInterface $serializer)
    {
        parent::setSerializer($serializer);

        if (!$serializer instanceof DenormalizerInterface) {
            throw new InvalidArgumentException('Expected a serializer that also implements DenormalizerInterface.');
        }

        $this->serializer = $serializer;
    }
}

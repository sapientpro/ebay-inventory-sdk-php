<?php

namespace SapientPro\EbayInventorySDK\Models\Concerns;

use SapientPro\EbayInventorySDK\Client\Serializer;
use SapientPro\EbayInventorySDK\Client\Validator;
use SapientPro\EbayInventorySDK\Models\EbayModelInterface;
use SapientPro\EbayInventorySDK\Models\Exceptions\NonExistentPropertyException;

trait FillsModel
{
    public static function fromArray(array $data): EbayModelInterface
    {
        Validator::validateArray($data, self::class);

        $model = new self();

        foreach ($data as $key => $value) {
            $model->$key = $value;
        }

        return $model;
    }

    public static function fromPlainArray(array $data): ?EbayModelInterface
    {
        $serializer = new Serializer();

        return $serializer->denormalize($data, self::class);
    }

    public static function fromJson(string $json): ?EbayModelInterface
    {
        $serializer = new Serializer();

        return $serializer->deserialize($json, self::class);
    }

    public function __set(string $name, mixed $value): void
    {
        throw new NonExistentPropertyException(
            "Cannot set property $name to " . __CLASS__ . ', as it is not declared in the model'
        );
    }
}

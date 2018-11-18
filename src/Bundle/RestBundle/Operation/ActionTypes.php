<?php

declare(strict_types=1);

namespace App\Bundle\RestBundle\Operation;

final class ActionTypes
{
    const UPDATE = 'update';
    const INDEX = 'index';
    const DELETE = 'delete';
    const CREATE = 'create';
    const VIEW = 'view';

    public static function getMethods($actionType)
    {
        switch ($actionType) {
            case self::CREATE:
                return ['POST'];
            case self::INDEX:
                return ['GET'];
            case self::DELETE:
                return ['DELETE'];
            case self::VIEW:
                return ['GET'];
            case self::UPDATE:
                return ['PUT'];
            default:
                return [];
        }
    }

    public static function isSingleItemAction($action)
    {
        return in_array($action, [self::UPDATE, self::DELETE, self::VIEW]);
    }

    public static function isSupport($action)
    {
        return in_array($action, [self::UPDATE, self::DELETE, self::VIEW, self::INDEX, self::CREATE]);
    }
}
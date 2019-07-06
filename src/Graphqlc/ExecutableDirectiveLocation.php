<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: graphqlc/descriptor.proto

namespace Graphqlc;

use UnexpectedValueException;

/**
 * Protobuf type <code>graphqlc.ExecutableDirectiveLocation</code>
 */
class ExecutableDirectiveLocation
{
    /**
     * Generated from protobuf enum <code>QUERY = 0;</code>
     */
    const QUERY = 0;
    /**
     * Generated from protobuf enum <code>MUTATION = 1;</code>
     */
    const MUTATION = 1;
    /**
     * Generated from protobuf enum <code>SUBSCRIPTION = 2;</code>
     */
    const SUBSCRIPTION = 2;
    /**
     * Generated from protobuf enum <code>FIELD = 3;</code>
     */
    const FIELD = 3;
    /**
     * Generated from protobuf enum <code>FRAGMENT_DEFINITION = 4;</code>
     */
    const FRAGMENT_DEFINITION = 4;
    /**
     * Generated from protobuf enum <code>FRAGMENT_SPREAD = 5;</code>
     */
    const FRAGMENT_SPREAD = 5;
    /**
     * Generated from protobuf enum <code>INLINE_FRAGMENT = 6;</code>
     */
    const INLINE_FRAGMENT = 6;

    private static $valueToName = [
        self::QUERY => 'QUERY',
        self::MUTATION => 'MUTATION',
        self::SUBSCRIPTION => 'SUBSCRIPTION',
        self::FIELD => 'FIELD',
        self::FRAGMENT_DEFINITION => 'FRAGMENT_DEFINITION',
        self::FRAGMENT_SPREAD => 'FRAGMENT_SPREAD',
        self::INLINE_FRAGMENT => 'INLINE_FRAGMENT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


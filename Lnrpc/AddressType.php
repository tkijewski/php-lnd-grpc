<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use UnexpectedValueException;

/**
 **
 *`AddressType` has to be one of:
 *- `p2wkh`: Pay to witness key hash (`WITNESS_PUBKEY_HASH` = 0)
 *- `np2wkh`: Pay to nested witness key hash (`NESTED_PUBKEY_HASH` = 1)
 *
 * Protobuf type <code>lnrpc.AddressType</code>
 */
class AddressType
{
    /**
     * Generated from protobuf enum <code>WITNESS_PUBKEY_HASH = 0;</code>
     */
    const WITNESS_PUBKEY_HASH = 0;
    /**
     * Generated from protobuf enum <code>NESTED_PUBKEY_HASH = 1;</code>
     */
    const NESTED_PUBKEY_HASH = 1;
    /**
     * Generated from protobuf enum <code>UNUSED_WITNESS_PUBKEY_HASH = 2;</code>
     */
    const UNUSED_WITNESS_PUBKEY_HASH = 2;
    /**
     * Generated from protobuf enum <code>UNUSED_NESTED_PUBKEY_HASH = 3;</code>
     */
    const UNUSED_NESTED_PUBKEY_HASH = 3;

    private static $valueToName = [
        self::WITNESS_PUBKEY_HASH => 'WITNESS_PUBKEY_HASH',
        self::NESTED_PUBKEY_HASH => 'NESTED_PUBKEY_HASH',
        self::UNUSED_WITNESS_PUBKEY_HASH => 'UNUSED_WITNESS_PUBKEY_HASH',
        self::UNUSED_NESTED_PUBKEY_HASH => 'UNUSED_NESTED_PUBKEY_HASH',
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


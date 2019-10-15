<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use UnexpectedValueException;

/**
 * Protobuf type <code>lnrpc.InvoiceHTLCState</code>
 */
class InvoiceHTLCState
{
    /**
     * Generated from protobuf enum <code>ACCEPTED = 0;</code>
     */
    const ACCEPTED = 0;
    /**
     * Generated from protobuf enum <code>SETTLED = 1;</code>
     */
    const SETTLED = 1;
    /**
     * Generated from protobuf enum <code>CANCELED = 2;</code>
     */
    const CANCELED = 2;

    private static $valueToName = [
        self::ACCEPTED => 'ACCEPTED',
        self::SETTLED => 'SETTLED',
        self::CANCELED => 'CANCELED',
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


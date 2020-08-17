<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signer.proto

namespace Signrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>signrpc.SignResp</code>
 */
class SignResp extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *A set of signatures realized in a fixed 64-byte format ordered in ascending
     *input order.
     *
     * Generated from protobuf field <code>repeated bytes raw_sigs = 1;</code>
     */
    private $raw_sigs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $raw_sigs
     *          *
     *          A set of signatures realized in a fixed 64-byte format ordered in ascending
     *          input order.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signer::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *A set of signatures realized in a fixed 64-byte format ordered in ascending
     *input order.
     *
     * Generated from protobuf field <code>repeated bytes raw_sigs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRawSigs()
    {
        return $this->raw_sigs;
    }

    /**
     **
     *A set of signatures realized in a fixed 64-byte format ordered in ascending
     *input order.
     *
     * Generated from protobuf field <code>repeated bytes raw_sigs = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRawSigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->raw_sigs = $arr;

        return $this;
    }

}


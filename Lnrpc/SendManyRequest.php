<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.SendManyRequest</code>
 */
class SendManyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The map from addresses to amounts
     *
     * Generated from protobuf field <code>map<string, int64> AddrToAmount = 1;</code>
     */
    private $AddrToAmount;
    /**
     *&#47; The target number of blocks that this transaction should be confirmed
     * / by.
     *
     * Generated from protobuf field <code>int32 target_conf = 3;</code>
     */
    private $target_conf = 0;
    /**
     *&#47; A manual fee rate set in sat/byte that should be used when crafting the
     * / transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_byte = 5;</code>
     */
    private $sat_per_byte = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $AddrToAmount
     *          &#47; The map from addresses to amounts
     *     @type int $target_conf
     *          &#47; The target number of blocks that this transaction should be confirmed
     *          / by.
     *     @type int|string $sat_per_byte
     *          &#47; A manual fee rate set in sat/byte that should be used when crafting the
     *          / transaction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The map from addresses to amounts
     *
     * Generated from protobuf field <code>map<string, int64> AddrToAmount = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAddrToAmount()
    {
        return $this->AddrToAmount;
    }

    /**
     *&#47; The map from addresses to amounts
     *
     * Generated from protobuf field <code>map<string, int64> AddrToAmount = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAddrToAmount($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT64);
        $this->AddrToAmount = $arr;

        return $this;
    }

    /**
     *&#47; The target number of blocks that this transaction should be confirmed
     * / by.
     *
     * Generated from protobuf field <code>int32 target_conf = 3;</code>
     * @return int
     */
    public function getTargetConf()
    {
        return $this->target_conf;
    }

    /**
     *&#47; The target number of blocks that this transaction should be confirmed
     * / by.
     *
     * Generated from protobuf field <code>int32 target_conf = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetConf($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_conf = $var;

        return $this;
    }

    /**
     *&#47; A manual fee rate set in sat/byte that should be used when crafting the
     * / transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_byte = 5;</code>
     * @return int|string
     */
    public function getSatPerByte()
    {
        return $this->sat_per_byte;
    }

    /**
     *&#47; A manual fee rate set in sat/byte that should be used when crafting the
     * / transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_byte = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSatPerByte($var)
    {
        GPBUtil::checkInt64($var);
        $this->sat_per_byte = $var;

        return $this;
    }

}


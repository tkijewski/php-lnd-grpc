<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.SendCoinsRequest</code>
 */
class SendCoinsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The address to send coins to
     *
     * Generated from protobuf field <code>string addr = 1;</code>
     */
    private $addr = '';
    /**
     * The amount in satoshis to send
     *
     * Generated from protobuf field <code>int64 amount = 2;</code>
     */
    private $amount = 0;
    /**
     * The target number of blocks that this transaction should be confirmed
     * by.
     *
     * Generated from protobuf field <code>int32 target_conf = 3;</code>
     */
    private $target_conf = 0;
    /**
     * A manual fee rate set in sat/byte that should be used when crafting the
     * transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_byte = 5;</code>
     */
    private $sat_per_byte = 0;
    /**
     *If set, then the amount field will be ignored, and lnd will attempt to
     *send all the coins under control of the internal wallet to the specified
     *address.
     *
     * Generated from protobuf field <code>bool send_all = 6;</code>
     */
    private $send_all = false;
    /**
     * An optional label for the transaction, limited to 500 characters.
     *
     * Generated from protobuf field <code>string label = 7;</code>
     */
    private $label = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $addr
     *           The address to send coins to
     *     @type int|string $amount
     *           The amount in satoshis to send
     *     @type int $target_conf
     *           The target number of blocks that this transaction should be confirmed
     *           by.
     *     @type int|string $sat_per_byte
     *           A manual fee rate set in sat/byte that should be used when crafting the
     *           transaction.
     *     @type bool $send_all
     *          If set, then the amount field will be ignored, and lnd will attempt to
     *          send all the coins under control of the internal wallet to the specified
     *          address.
     *     @type string $label
     *           An optional label for the transaction, limited to 500 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * The address to send coins to
     *
     * Generated from protobuf field <code>string addr = 1;</code>
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * The address to send coins to
     *
     * Generated from protobuf field <code>string addr = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->addr = $var;

        return $this;
    }

    /**
     * The amount in satoshis to send
     *
     * Generated from protobuf field <code>int64 amount = 2;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * The amount in satoshis to send
     *
     * Generated from protobuf field <code>int64 amount = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * The target number of blocks that this transaction should be confirmed
     * by.
     *
     * Generated from protobuf field <code>int32 target_conf = 3;</code>
     * @return int
     */
    public function getTargetConf()
    {
        return $this->target_conf;
    }

    /**
     * The target number of blocks that this transaction should be confirmed
     * by.
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
     * A manual fee rate set in sat/byte that should be used when crafting the
     * transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_byte = 5;</code>
     * @return int|string
     */
    public function getSatPerByte()
    {
        return $this->sat_per_byte;
    }

    /**
     * A manual fee rate set in sat/byte that should be used when crafting the
     * transaction.
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

    /**
     *If set, then the amount field will be ignored, and lnd will attempt to
     *send all the coins under control of the internal wallet to the specified
     *address.
     *
     * Generated from protobuf field <code>bool send_all = 6;</code>
     * @return bool
     */
    public function getSendAll()
    {
        return $this->send_all;
    }

    /**
     *If set, then the amount field will be ignored, and lnd will attempt to
     *send all the coins under control of the internal wallet to the specified
     *address.
     *
     * Generated from protobuf field <code>bool send_all = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setSendAll($var)
    {
        GPBUtil::checkBool($var);
        $this->send_all = $var;

        return $this;
    }

    /**
     * An optional label for the transaction, limited to 500 characters.
     *
     * Generated from protobuf field <code>string label = 7;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * An optional label for the transaction, limited to 500 characters.
     *
     * Generated from protobuf field <code>string label = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

}


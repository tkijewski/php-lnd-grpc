<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.EstimateFeeResponse</code>
 */
class EstimateFeeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The total fee in satoshis.
     *
     * Generated from protobuf field <code>int64 fee_sat = 1[json_name = "fee_sat"];</code>
     */
    private $fee_sat = 0;
    /**
     *&#47; The fee rate in satoshi/byte.
     *
     * Generated from protobuf field <code>int64 feerate_sat_per_byte = 2[json_name = "feerate_sat_per_byte"];</code>
     */
    private $feerate_sat_per_byte = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $fee_sat
     *          &#47; The total fee in satoshis.
     *     @type int|string $feerate_sat_per_byte
     *          &#47; The fee rate in satoshi/byte.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The total fee in satoshis.
     *
     * Generated from protobuf field <code>int64 fee_sat = 1[json_name = "fee_sat"];</code>
     * @return int|string
     */
    public function getFeeSat()
    {
        return $this->fee_sat;
    }

    /**
     *&#47; The total fee in satoshis.
     *
     * Generated from protobuf field <code>int64 fee_sat = 1[json_name = "fee_sat"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeeSat($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee_sat = $var;

        return $this;
    }

    /**
     *&#47; The fee rate in satoshi/byte.
     *
     * Generated from protobuf field <code>int64 feerate_sat_per_byte = 2[json_name = "feerate_sat_per_byte"];</code>
     * @return int|string
     */
    public function getFeerateSatPerByte()
    {
        return $this->feerate_sat_per_byte;
    }

    /**
     *&#47; The fee rate in satoshi/byte.
     *
     * Generated from protobuf field <code>int64 feerate_sat_per_byte = 2[json_name = "feerate_sat_per_byte"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeerateSatPerByte($var)
    {
        GPBUtil::checkInt64($var);
        $this->feerate_sat_per_byte = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.RouteHint</code>
 */
class RouteHint extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *A list of hop hints that when chained together can assist in reaching a
     *specific destination.
     *
     * Generated from protobuf field <code>repeated .lnrpc.HopHint hop_hints = 1;</code>
     */
    private $hop_hints;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\HopHint[]|\Google\Protobuf\Internal\RepeatedField $hop_hints
     *          *
     *          A list of hop hints that when chained together can assist in reaching a
     *          specific destination.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *A list of hop hints that when chained together can assist in reaching a
     *specific destination.
     *
     * Generated from protobuf field <code>repeated .lnrpc.HopHint hop_hints = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHopHints()
    {
        return $this->hop_hints;
    }

    /**
     **
     *A list of hop hints that when chained together can assist in reaching a
     *specific destination.
     *
     * Generated from protobuf field <code>repeated .lnrpc.HopHint hop_hints = 1;</code>
     * @param \Lnrpc\HopHint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHopHints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\HopHint::class);
        $this->hop_hints = $arr;

        return $this;
    }

}


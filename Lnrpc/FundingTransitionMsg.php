<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.FundingTransitionMsg</code>
 */
class FundingTransitionMsg extends \Google\Protobuf\Internal\Message
{
    protected $trigger;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\FundingShim $shim_register
     *          *
     *          The funding shim to regsiter. This should be used before any
     *          channel funding has began by the remote party, as it is intended as a
     *          prepatory step for the full channel funding.
     *     @type \Lnrpc\FundingShimCancel $shim_cancel
     *          &#47; Used to cancel an existing registered funding shim.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *The funding shim to regsiter. This should be used before any
     *channel funding has began by the remote party, as it is intended as a
     *prepatory step for the full channel funding.
     *
     * Generated from protobuf field <code>.lnrpc.FundingShim shim_register = 1;</code>
     * @return \Lnrpc\FundingShim
     */
    public function getShimRegister()
    {
        return $this->readOneof(1);
    }

    /**
     **
     *The funding shim to regsiter. This should be used before any
     *channel funding has began by the remote party, as it is intended as a
     *prepatory step for the full channel funding.
     *
     * Generated from protobuf field <code>.lnrpc.FundingShim shim_register = 1;</code>
     * @param \Lnrpc\FundingShim $var
     * @return $this
     */
    public function setShimRegister($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\FundingShim::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     *&#47; Used to cancel an existing registered funding shim.
     *
     * Generated from protobuf field <code>.lnrpc.FundingShimCancel shim_cancel = 2;</code>
     * @return \Lnrpc\FundingShimCancel
     */
    public function getShimCancel()
    {
        return $this->readOneof(2);
    }

    /**
     *&#47; Used to cancel an existing registered funding shim.
     *
     * Generated from protobuf field <code>.lnrpc.FundingShimCancel shim_cancel = 2;</code>
     * @param \Lnrpc\FundingShimCancel $var
     * @return $this
     */
    public function setShimCancel($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\FundingShimCancel::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTrigger()
    {
        return $this->whichOneof("trigger");
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Routerrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>routerrpc.SendToRouteResponse</code>
 */
class SendToRouteResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The preimage obtained by making the payment.
     *
     * Generated from protobuf field <code>bytes preimage = 1;</code>
     */
    private $preimage = '';
    /**
     *&#47; The failure message in case the payment failed.
     *
     * Generated from protobuf field <code>.lnrpc.Failure failure = 2;</code>
     */
    private $failure = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $preimage
     *          &#47; The preimage obtained by making the payment.
     *     @type \Lnrpc\Failure $failure
     *          &#47; The failure message in case the payment failed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Router::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The preimage obtained by making the payment.
     *
     * Generated from protobuf field <code>bytes preimage = 1;</code>
     * @return string
     */
    public function getPreimage()
    {
        return $this->preimage;
    }

    /**
     *&#47; The preimage obtained by making the payment.
     *
     * Generated from protobuf field <code>bytes preimage = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPreimage($var)
    {
        GPBUtil::checkString($var, False);
        $this->preimage = $var;

        return $this;
    }

    /**
     *&#47; The failure message in case the payment failed.
     *
     * Generated from protobuf field <code>.lnrpc.Failure failure = 2;</code>
     * @return \Lnrpc\Failure
     */
    public function getFailure()
    {
        return $this->failure;
    }

    /**
     *&#47; The failure message in case the payment failed.
     *
     * Generated from protobuf field <code>.lnrpc.Failure failure = 2;</code>
     * @param \Lnrpc\Failure $var
     * @return $this
     */
    public function setFailure($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\Failure::class);
        $this->failure = $var;

        return $this;
    }

}


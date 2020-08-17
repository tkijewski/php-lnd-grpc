<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Routerrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>routerrpc.SendToRouteRequest</code>
 */
class SendToRouteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The payment hash to use for the HTLC.
     *
     * Generated from protobuf field <code>bytes payment_hash = 1;</code>
     */
    private $payment_hash = '';
    /**
     *&#47; Route that should be used to attempt to complete the payment.
     *
     * Generated from protobuf field <code>.lnrpc.Route route = 2;</code>
     */
    private $route = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $payment_hash
     *          &#47; The payment hash to use for the HTLC.
     *     @type \Lnrpc\Route $route
     *          &#47; Route that should be used to attempt to complete the payment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Router::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The payment hash to use for the HTLC.
     *
     * Generated from protobuf field <code>bytes payment_hash = 1;</code>
     * @return string
     */
    public function getPaymentHash()
    {
        return $this->payment_hash;
    }

    /**
     *&#47; The payment hash to use for the HTLC.
     *
     * Generated from protobuf field <code>bytes payment_hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->payment_hash = $var;

        return $this;
    }

    /**
     *&#47; Route that should be used to attempt to complete the payment.
     *
     * Generated from protobuf field <code>.lnrpc.Route route = 2;</code>
     * @return \Lnrpc\Route
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     *&#47; Route that should be used to attempt to complete the payment.
     *
     * Generated from protobuf field <code>.lnrpc.Route route = 2;</code>
     * @param \Lnrpc\Route $var
     * @return $this
     */
    public function setRoute($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\Route::class);
        $this->route = $var;

        return $this;
    }

}


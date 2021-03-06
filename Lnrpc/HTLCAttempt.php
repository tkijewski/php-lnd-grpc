<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.HTLCAttempt</code>
 */
class HTLCAttempt extends \Google\Protobuf\Internal\Message
{
    /**
     * The status of the HTLC.
     *
     * Generated from protobuf field <code>.lnrpc.HTLCAttempt.HTLCStatus status = 1;</code>
     */
    private $status = 0;
    /**
     * The route taken by this HTLC.
     *
     * Generated from protobuf field <code>.lnrpc.Route route = 2;</code>
     */
    private $route = null;
    /**
     * The time in UNIX nanoseconds at which this HTLC was sent.
     *
     * Generated from protobuf field <code>int64 attempt_time_ns = 3;</code>
     */
    private $attempt_time_ns = 0;
    /**
     *The time in UNIX nanoseconds at which this HTLC was settled or failed.
     *This value will not be set if the HTLC is still IN_FLIGHT.
     *
     * Generated from protobuf field <code>int64 resolve_time_ns = 4;</code>
     */
    private $resolve_time_ns = 0;
    /**
     * Detailed htlc failure info.
     *
     * Generated from protobuf field <code>.lnrpc.Failure failure = 5;</code>
     */
    private $failure = null;
    /**
     * The preimage that was used to settle the HTLC.
     *
     * Generated from protobuf field <code>bytes preimage = 6;</code>
     */
    private $preimage = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *           The status of the HTLC.
     *     @type \Lnrpc\Route $route
     *           The route taken by this HTLC.
     *     @type int|string $attempt_time_ns
     *           The time in UNIX nanoseconds at which this HTLC was sent.
     *     @type int|string $resolve_time_ns
     *          The time in UNIX nanoseconds at which this HTLC was settled or failed.
     *          This value will not be set if the HTLC is still IN_FLIGHT.
     *     @type \Lnrpc\Failure $failure
     *           Detailed htlc failure info.
     *     @type string $preimage
     *           The preimage that was used to settle the HTLC.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * The status of the HTLC.
     *
     * Generated from protobuf field <code>.lnrpc.HTLCAttempt.HTLCStatus status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the HTLC.
     *
     * Generated from protobuf field <code>.lnrpc.HTLCAttempt.HTLCStatus status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\HTLCAttempt_HTLCStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The route taken by this HTLC.
     *
     * Generated from protobuf field <code>.lnrpc.Route route = 2;</code>
     * @return \Lnrpc\Route
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * The route taken by this HTLC.
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

    /**
     * The time in UNIX nanoseconds at which this HTLC was sent.
     *
     * Generated from protobuf field <code>int64 attempt_time_ns = 3;</code>
     * @return int|string
     */
    public function getAttemptTimeNs()
    {
        return $this->attempt_time_ns;
    }

    /**
     * The time in UNIX nanoseconds at which this HTLC was sent.
     *
     * Generated from protobuf field <code>int64 attempt_time_ns = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAttemptTimeNs($var)
    {
        GPBUtil::checkInt64($var);
        $this->attempt_time_ns = $var;

        return $this;
    }

    /**
     *The time in UNIX nanoseconds at which this HTLC was settled or failed.
     *This value will not be set if the HTLC is still IN_FLIGHT.
     *
     * Generated from protobuf field <code>int64 resolve_time_ns = 4;</code>
     * @return int|string
     */
    public function getResolveTimeNs()
    {
        return $this->resolve_time_ns;
    }

    /**
     *The time in UNIX nanoseconds at which this HTLC was settled or failed.
     *This value will not be set if the HTLC is still IN_FLIGHT.
     *
     * Generated from protobuf field <code>int64 resolve_time_ns = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setResolveTimeNs($var)
    {
        GPBUtil::checkInt64($var);
        $this->resolve_time_ns = $var;

        return $this;
    }

    /**
     * Detailed htlc failure info.
     *
     * Generated from protobuf field <code>.lnrpc.Failure failure = 5;</code>
     * @return \Lnrpc\Failure
     */
    public function getFailure()
    {
        return $this->failure;
    }

    /**
     * Detailed htlc failure info.
     *
     * Generated from protobuf field <code>.lnrpc.Failure failure = 5;</code>
     * @param \Lnrpc\Failure $var
     * @return $this
     */
    public function setFailure($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\Failure::class);
        $this->failure = $var;

        return $this;
    }

    /**
     * The preimage that was used to settle the HTLC.
     *
     * Generated from protobuf field <code>bytes preimage = 6;</code>
     * @return string
     */
    public function getPreimage()
    {
        return $this->preimage;
    }

    /**
     * The preimage that was used to settle the HTLC.
     *
     * Generated from protobuf field <code>bytes preimage = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPreimage($var)
    {
        GPBUtil::checkString($var, False);
        $this->preimage = $var;

        return $this;
    }

}


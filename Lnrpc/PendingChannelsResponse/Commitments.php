<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc\PendingChannelsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PendingChannelsResponse.Commitments</code>
 */
class Commitments extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; Hash of the local version of the commitment tx.
     *
     * Generated from protobuf field <code>string local_txid = 1;</code>
     */
    private $local_txid = '';
    /**
     *&#47; Hash of the remote version of the commitment tx.
     *
     * Generated from protobuf field <code>string remote_txid = 2;</code>
     */
    private $remote_txid = '';
    /**
     *&#47; Hash of the remote pending version of the commitment tx.
     *
     * Generated from protobuf field <code>string remote_pending_txid = 3;</code>
     */
    private $remote_pending_txid = '';
    /**
     *The amount in satoshis calculated to be paid in fees for the local
     *commitment.
     *
     * Generated from protobuf field <code>uint64 local_commit_fee_sat = 4;</code>
     */
    private $local_commit_fee_sat = 0;
    /**
     *The amount in satoshis calculated to be paid in fees for the remote
     *commitment.
     *
     * Generated from protobuf field <code>uint64 remote_commit_fee_sat = 5;</code>
     */
    private $remote_commit_fee_sat = 0;
    /**
     *The amount in satoshis calculated to be paid in fees for the remote
     *pending commitment.
     *
     * Generated from protobuf field <code>uint64 remote_pending_commit_fee_sat = 6;</code>
     */
    private $remote_pending_commit_fee_sat = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $local_txid
     *          &#47; Hash of the local version of the commitment tx.
     *     @type string $remote_txid
     *          &#47; Hash of the remote version of the commitment tx.
     *     @type string $remote_pending_txid
     *          &#47; Hash of the remote pending version of the commitment tx.
     *     @type int|string $local_commit_fee_sat
     *          The amount in satoshis calculated to be paid in fees for the local
     *          commitment.
     *     @type int|string $remote_commit_fee_sat
     *          The amount in satoshis calculated to be paid in fees for the remote
     *          commitment.
     *     @type int|string $remote_pending_commit_fee_sat
     *          The amount in satoshis calculated to be paid in fees for the remote
     *          pending commitment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; Hash of the local version of the commitment tx.
     *
     * Generated from protobuf field <code>string local_txid = 1;</code>
     * @return string
     */
    public function getLocalTxid()
    {
        return $this->local_txid;
    }

    /**
     *&#47; Hash of the local version of the commitment tx.
     *
     * Generated from protobuf field <code>string local_txid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocalTxid($var)
    {
        GPBUtil::checkString($var, True);
        $this->local_txid = $var;

        return $this;
    }

    /**
     *&#47; Hash of the remote version of the commitment tx.
     *
     * Generated from protobuf field <code>string remote_txid = 2;</code>
     * @return string
     */
    public function getRemoteTxid()
    {
        return $this->remote_txid;
    }

    /**
     *&#47; Hash of the remote version of the commitment tx.
     *
     * Generated from protobuf field <code>string remote_txid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRemoteTxid($var)
    {
        GPBUtil::checkString($var, True);
        $this->remote_txid = $var;

        return $this;
    }

    /**
     *&#47; Hash of the remote pending version of the commitment tx.
     *
     * Generated from protobuf field <code>string remote_pending_txid = 3;</code>
     * @return string
     */
    public function getRemotePendingTxid()
    {
        return $this->remote_pending_txid;
    }

    /**
     *&#47; Hash of the remote pending version of the commitment tx.
     *
     * Generated from protobuf field <code>string remote_pending_txid = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRemotePendingTxid($var)
    {
        GPBUtil::checkString($var, True);
        $this->remote_pending_txid = $var;

        return $this;
    }

    /**
     *The amount in satoshis calculated to be paid in fees for the local
     *commitment.
     *
     * Generated from protobuf field <code>uint64 local_commit_fee_sat = 4;</code>
     * @return int|string
     */
    public function getLocalCommitFeeSat()
    {
        return $this->local_commit_fee_sat;
    }

    /**
     *The amount in satoshis calculated to be paid in fees for the local
     *commitment.
     *
     * Generated from protobuf field <code>uint64 local_commit_fee_sat = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLocalCommitFeeSat($var)
    {
        GPBUtil::checkUint64($var);
        $this->local_commit_fee_sat = $var;

        return $this;
    }

    /**
     *The amount in satoshis calculated to be paid in fees for the remote
     *commitment.
     *
     * Generated from protobuf field <code>uint64 remote_commit_fee_sat = 5;</code>
     * @return int|string
     */
    public function getRemoteCommitFeeSat()
    {
        return $this->remote_commit_fee_sat;
    }

    /**
     *The amount in satoshis calculated to be paid in fees for the remote
     *commitment.
     *
     * Generated from protobuf field <code>uint64 remote_commit_fee_sat = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRemoteCommitFeeSat($var)
    {
        GPBUtil::checkUint64($var);
        $this->remote_commit_fee_sat = $var;

        return $this;
    }

    /**
     *The amount in satoshis calculated to be paid in fees for the remote
     *pending commitment.
     *
     * Generated from protobuf field <code>uint64 remote_pending_commit_fee_sat = 6;</code>
     * @return int|string
     */
    public function getRemotePendingCommitFeeSat()
    {
        return $this->remote_pending_commit_fee_sat;
    }

    /**
     *The amount in satoshis calculated to be paid in fees for the remote
     *pending commitment.
     *
     * Generated from protobuf field <code>uint64 remote_pending_commit_fee_sat = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRemotePendingCommitFeeSat($var)
    {
        GPBUtil::checkUint64($var);
        $this->remote_pending_commit_fee_sat = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Commitments::class, \Lnrpc\PendingChannelsResponse_Commitments::class);


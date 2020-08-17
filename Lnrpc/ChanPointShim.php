<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChanPointShim</code>
 */
class ChanPointShim extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *The size of the pre-crafted output to be used as the channel point for this
     *channel funding.
     *
     * Generated from protobuf field <code>int64 amt = 1;</code>
     */
    private $amt = 0;
    /**
     *&#47; The target channel point to refrence in created commitment transactions.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelPoint chan_point = 2;</code>
     */
    private $chan_point = null;
    /**
     *&#47; Our local key to use when creating the multi-sig output.
     *
     * Generated from protobuf field <code>.lnrpc.KeyDescriptor local_key = 3;</code>
     */
    private $local_key = null;
    /**
     *&#47; The key of the remote party to use when creating the multi-sig output.
     *
     * Generated from protobuf field <code>bytes remote_key = 4;</code>
     */
    private $remote_key = '';
    /**
     **
     *If non-zero, then this will be used as the pending channel ID on the wire
     *protocol to initate the funding request. This is an optional field, and
     *should only be set if the responder is already expecting a specific pending
     *channel ID.
     *
     * Generated from protobuf field <code>bytes pending_chan_id = 5;</code>
     */
    private $pending_chan_id = '';
    /**
     **
     *This uint32 indicates if this channel is to be considered 'frozen'. A
     *frozen channel does not allow a cooperative channel close by the
     *initiator. The thaw_height is the height that this restriction stops
     *applying to the channel.
     *
     * Generated from protobuf field <code>uint32 thaw_height = 6;</code>
     */
    private $thaw_height = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $amt
     *          *
     *          The size of the pre-crafted output to be used as the channel point for this
     *          channel funding.
     *     @type \Lnrpc\ChannelPoint $chan_point
     *          &#47; The target channel point to refrence in created commitment transactions.
     *     @type \Lnrpc\KeyDescriptor $local_key
     *          &#47; Our local key to use when creating the multi-sig output.
     *     @type string $remote_key
     *          &#47; The key of the remote party to use when creating the multi-sig output.
     *     @type string $pending_chan_id
     *          *
     *          If non-zero, then this will be used as the pending channel ID on the wire
     *          protocol to initate the funding request. This is an optional field, and
     *          should only be set if the responder is already expecting a specific pending
     *          channel ID.
     *     @type int $thaw_height
     *          *
     *          This uint32 indicates if this channel is to be considered 'frozen'. A
     *          frozen channel does not allow a cooperative channel close by the
     *          initiator. The thaw_height is the height that this restriction stops
     *          applying to the channel.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *The size of the pre-crafted output to be used as the channel point for this
     *channel funding.
     *
     * Generated from protobuf field <code>int64 amt = 1;</code>
     * @return int|string
     */
    public function getAmt()
    {
        return $this->amt;
    }

    /**
     **
     *The size of the pre-crafted output to be used as the channel point for this
     *channel funding.
     *
     * Generated from protobuf field <code>int64 amt = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmt($var)
    {
        GPBUtil::checkInt64($var);
        $this->amt = $var;

        return $this;
    }

    /**
     *&#47; The target channel point to refrence in created commitment transactions.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelPoint chan_point = 2;</code>
     * @return \Lnrpc\ChannelPoint
     */
    public function getChanPoint()
    {
        return $this->chan_point;
    }

    /**
     *&#47; The target channel point to refrence in created commitment transactions.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelPoint chan_point = 2;</code>
     * @param \Lnrpc\ChannelPoint $var
     * @return $this
     */
    public function setChanPoint($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ChannelPoint::class);
        $this->chan_point = $var;

        return $this;
    }

    /**
     *&#47; Our local key to use when creating the multi-sig output.
     *
     * Generated from protobuf field <code>.lnrpc.KeyDescriptor local_key = 3;</code>
     * @return \Lnrpc\KeyDescriptor
     */
    public function getLocalKey()
    {
        return $this->local_key;
    }

    /**
     *&#47; Our local key to use when creating the multi-sig output.
     *
     * Generated from protobuf field <code>.lnrpc.KeyDescriptor local_key = 3;</code>
     * @param \Lnrpc\KeyDescriptor $var
     * @return $this
     */
    public function setLocalKey($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\KeyDescriptor::class);
        $this->local_key = $var;

        return $this;
    }

    /**
     *&#47; The key of the remote party to use when creating the multi-sig output.
     *
     * Generated from protobuf field <code>bytes remote_key = 4;</code>
     * @return string
     */
    public function getRemoteKey()
    {
        return $this->remote_key;
    }

    /**
     *&#47; The key of the remote party to use when creating the multi-sig output.
     *
     * Generated from protobuf field <code>bytes remote_key = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRemoteKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->remote_key = $var;

        return $this;
    }

    /**
     **
     *If non-zero, then this will be used as the pending channel ID on the wire
     *protocol to initate the funding request. This is an optional field, and
     *should only be set if the responder is already expecting a specific pending
     *channel ID.
     *
     * Generated from protobuf field <code>bytes pending_chan_id = 5;</code>
     * @return string
     */
    public function getPendingChanId()
    {
        return $this->pending_chan_id;
    }

    /**
     **
     *If non-zero, then this will be used as the pending channel ID on the wire
     *protocol to initate the funding request. This is an optional field, and
     *should only be set if the responder is already expecting a specific pending
     *channel ID.
     *
     * Generated from protobuf field <code>bytes pending_chan_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPendingChanId($var)
    {
        GPBUtil::checkString($var, False);
        $this->pending_chan_id = $var;

        return $this;
    }

    /**
     **
     *This uint32 indicates if this channel is to be considered 'frozen'. A
     *frozen channel does not allow a cooperative channel close by the
     *initiator. The thaw_height is the height that this restriction stops
     *applying to the channel.
     *
     * Generated from protobuf field <code>uint32 thaw_height = 6;</code>
     * @return int
     */
    public function getThawHeight()
    {
        return $this->thaw_height;
    }

    /**
     **
     *This uint32 indicates if this channel is to be considered 'frozen'. A
     *frozen channel does not allow a cooperative channel close by the
     *initiator. The thaw_height is the height that this restriction stops
     *applying to the channel.
     *
     * Generated from protobuf field <code>uint32 thaw_height = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setThawHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->thaw_height = $var;

        return $this;
    }

}


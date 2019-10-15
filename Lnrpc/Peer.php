<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.Peer</code>
 */
class Peer extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The identity pubkey of the peer
     *
     * Generated from protobuf field <code>string pub_key = 1[json_name = "pub_key"];</code>
     */
    private $pub_key = '';
    /**
     *&#47; Network address of the peer; eg `127.0.0.1:10011`
     *
     * Generated from protobuf field <code>string address = 3[json_name = "address"];</code>
     */
    private $address = '';
    /**
     *&#47; Bytes of data transmitted to this peer
     *
     * Generated from protobuf field <code>uint64 bytes_sent = 4[json_name = "bytes_sent"];</code>
     */
    private $bytes_sent = 0;
    /**
     *&#47; Bytes of data transmitted from this peer
     *
     * Generated from protobuf field <code>uint64 bytes_recv = 5[json_name = "bytes_recv"];</code>
     */
    private $bytes_recv = 0;
    /**
     *&#47; Satoshis sent to this peer
     *
     * Generated from protobuf field <code>int64 sat_sent = 6[json_name = "sat_sent"];</code>
     */
    private $sat_sent = 0;
    /**
     *&#47; Satoshis received from this peer
     *
     * Generated from protobuf field <code>int64 sat_recv = 7[json_name = "sat_recv"];</code>
     */
    private $sat_recv = 0;
    /**
     *&#47; A channel is inbound if the counterparty initiated the channel
     *
     * Generated from protobuf field <code>bool inbound = 8[json_name = "inbound"];</code>
     */
    private $inbound = false;
    /**
     *&#47; Ping time to this peer
     *
     * Generated from protobuf field <code>int64 ping_time = 9[json_name = "ping_time"];</code>
     */
    private $ping_time = 0;
    /**
     * The type of sync we are currently performing with this peer.
     *
     * Generated from protobuf field <code>.lnrpc.Peer.SyncType sync_type = 10[json_name = "sync_type"];</code>
     */
    private $sync_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pub_key
     *          &#47; The identity pubkey of the peer
     *     @type string $address
     *          &#47; Network address of the peer; eg `127.0.0.1:10011`
     *     @type int|string $bytes_sent
     *          &#47; Bytes of data transmitted to this peer
     *     @type int|string $bytes_recv
     *          &#47; Bytes of data transmitted from this peer
     *     @type int|string $sat_sent
     *          &#47; Satoshis sent to this peer
     *     @type int|string $sat_recv
     *          &#47; Satoshis received from this peer
     *     @type bool $inbound
     *          &#47; A channel is inbound if the counterparty initiated the channel
     *     @type int|string $ping_time
     *          &#47; Ping time to this peer
     *     @type int $sync_type
     *           The type of sync we are currently performing with this peer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The identity pubkey of the peer
     *
     * Generated from protobuf field <code>string pub_key = 1[json_name = "pub_key"];</code>
     * @return string
     */
    public function getPubKey()
    {
        return $this->pub_key;
    }

    /**
     *&#47; The identity pubkey of the peer
     *
     * Generated from protobuf field <code>string pub_key = 1[json_name = "pub_key"];</code>
     * @param string $var
     * @return $this
     */
    public function setPubKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->pub_key = $var;

        return $this;
    }

    /**
     *&#47; Network address of the peer; eg `127.0.0.1:10011`
     *
     * Generated from protobuf field <code>string address = 3[json_name = "address"];</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     *&#47; Network address of the peer; eg `127.0.0.1:10011`
     *
     * Generated from protobuf field <code>string address = 3[json_name = "address"];</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     *&#47; Bytes of data transmitted to this peer
     *
     * Generated from protobuf field <code>uint64 bytes_sent = 4[json_name = "bytes_sent"];</code>
     * @return int|string
     */
    public function getBytesSent()
    {
        return $this->bytes_sent;
    }

    /**
     *&#47; Bytes of data transmitted to this peer
     *
     * Generated from protobuf field <code>uint64 bytes_sent = 4[json_name = "bytes_sent"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBytesSent($var)
    {
        GPBUtil::checkUint64($var);
        $this->bytes_sent = $var;

        return $this;
    }

    /**
     *&#47; Bytes of data transmitted from this peer
     *
     * Generated from protobuf field <code>uint64 bytes_recv = 5[json_name = "bytes_recv"];</code>
     * @return int|string
     */
    public function getBytesRecv()
    {
        return $this->bytes_recv;
    }

    /**
     *&#47; Bytes of data transmitted from this peer
     *
     * Generated from protobuf field <code>uint64 bytes_recv = 5[json_name = "bytes_recv"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBytesRecv($var)
    {
        GPBUtil::checkUint64($var);
        $this->bytes_recv = $var;

        return $this;
    }

    /**
     *&#47; Satoshis sent to this peer
     *
     * Generated from protobuf field <code>int64 sat_sent = 6[json_name = "sat_sent"];</code>
     * @return int|string
     */
    public function getSatSent()
    {
        return $this->sat_sent;
    }

    /**
     *&#47; Satoshis sent to this peer
     *
     * Generated from protobuf field <code>int64 sat_sent = 6[json_name = "sat_sent"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSatSent($var)
    {
        GPBUtil::checkInt64($var);
        $this->sat_sent = $var;

        return $this;
    }

    /**
     *&#47; Satoshis received from this peer
     *
     * Generated from protobuf field <code>int64 sat_recv = 7[json_name = "sat_recv"];</code>
     * @return int|string
     */
    public function getSatRecv()
    {
        return $this->sat_recv;
    }

    /**
     *&#47; Satoshis received from this peer
     *
     * Generated from protobuf field <code>int64 sat_recv = 7[json_name = "sat_recv"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSatRecv($var)
    {
        GPBUtil::checkInt64($var);
        $this->sat_recv = $var;

        return $this;
    }

    /**
     *&#47; A channel is inbound if the counterparty initiated the channel
     *
     * Generated from protobuf field <code>bool inbound = 8[json_name = "inbound"];</code>
     * @return bool
     */
    public function getInbound()
    {
        return $this->inbound;
    }

    /**
     *&#47; A channel is inbound if the counterparty initiated the channel
     *
     * Generated from protobuf field <code>bool inbound = 8[json_name = "inbound"];</code>
     * @param bool $var
     * @return $this
     */
    public function setInbound($var)
    {
        GPBUtil::checkBool($var);
        $this->inbound = $var;

        return $this;
    }

    /**
     *&#47; Ping time to this peer
     *
     * Generated from protobuf field <code>int64 ping_time = 9[json_name = "ping_time"];</code>
     * @return int|string
     */
    public function getPingTime()
    {
        return $this->ping_time;
    }

    /**
     *&#47; Ping time to this peer
     *
     * Generated from protobuf field <code>int64 ping_time = 9[json_name = "ping_time"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setPingTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->ping_time = $var;

        return $this;
    }

    /**
     * The type of sync we are currently performing with this peer.
     *
     * Generated from protobuf field <code>.lnrpc.Peer.SyncType sync_type = 10[json_name = "sync_type"];</code>
     * @return int
     */
    public function getSyncType()
    {
        return $this->sync_type;
    }

    /**
     * The type of sync we are currently performing with this peer.
     *
     * Generated from protobuf field <code>.lnrpc.Peer.SyncType sync_type = 10[json_name = "sync_type"];</code>
     * @param int $var
     * @return $this
     */
    public function setSyncType($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\Peer_SyncType::class);
        $this->sync_type = $var;

        return $this;
    }

}


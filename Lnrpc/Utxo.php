<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.Utxo</code>
 */
class Utxo extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The type of address
     *
     * Generated from protobuf field <code>.lnrpc.AddressType type = 1[json_name = "address_type"];</code>
     */
    private $type = 0;
    /**
     *&#47; The address
     *
     * Generated from protobuf field <code>string address = 2[json_name = "address"];</code>
     */
    private $address = '';
    /**
     *&#47; The value of the unspent coin in satoshis
     *
     * Generated from protobuf field <code>int64 amount_sat = 3[json_name = "amount_sat"];</code>
     */
    private $amount_sat = 0;
    /**
     *&#47; The pkscript in hex
     *
     * Generated from protobuf field <code>string pk_script = 4[json_name = "pk_script"];</code>
     */
    private $pk_script = '';
    /**
     *&#47; The outpoint in format txid:n
     *
     * Generated from protobuf field <code>.lnrpc.OutPoint outpoint = 5[json_name = "outpoint"];</code>
     */
    private $outpoint = null;
    /**
     *&#47; The number of confirmations for the Utxo
     *
     * Generated from protobuf field <code>int64 confirmations = 6[json_name = "confirmations"];</code>
     */
    private $confirmations = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *          &#47; The type of address
     *     @type string $address
     *          &#47; The address
     *     @type int|string $amount_sat
     *          &#47; The value of the unspent coin in satoshis
     *     @type string $pk_script
     *          &#47; The pkscript in hex
     *     @type \Lnrpc\OutPoint $outpoint
     *          &#47; The outpoint in format txid:n
     *     @type int|string $confirmations
     *          &#47; The number of confirmations for the Utxo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The type of address
     *
     * Generated from protobuf field <code>.lnrpc.AddressType type = 1[json_name = "address_type"];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *&#47; The type of address
     *
     * Generated from protobuf field <code>.lnrpc.AddressType type = 1[json_name = "address_type"];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\AddressType::class);
        $this->type = $var;

        return $this;
    }

    /**
     *&#47; The address
     *
     * Generated from protobuf field <code>string address = 2[json_name = "address"];</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     *&#47; The address
     *
     * Generated from protobuf field <code>string address = 2[json_name = "address"];</code>
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
     *&#47; The value of the unspent coin in satoshis
     *
     * Generated from protobuf field <code>int64 amount_sat = 3[json_name = "amount_sat"];</code>
     * @return int|string
     */
    public function getAmountSat()
    {
        return $this->amount_sat;
    }

    /**
     *&#47; The value of the unspent coin in satoshis
     *
     * Generated from protobuf field <code>int64 amount_sat = 3[json_name = "amount_sat"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmountSat($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount_sat = $var;

        return $this;
    }

    /**
     *&#47; The pkscript in hex
     *
     * Generated from protobuf field <code>string pk_script = 4[json_name = "pk_script"];</code>
     * @return string
     */
    public function getPkScript()
    {
        return $this->pk_script;
    }

    /**
     *&#47; The pkscript in hex
     *
     * Generated from protobuf field <code>string pk_script = 4[json_name = "pk_script"];</code>
     * @param string $var
     * @return $this
     */
    public function setPkScript($var)
    {
        GPBUtil::checkString($var, True);
        $this->pk_script = $var;

        return $this;
    }

    /**
     *&#47; The outpoint in format txid:n
     *
     * Generated from protobuf field <code>.lnrpc.OutPoint outpoint = 5[json_name = "outpoint"];</code>
     * @return \Lnrpc\OutPoint
     */
    public function getOutpoint()
    {
        return $this->outpoint;
    }

    /**
     *&#47; The outpoint in format txid:n
     *
     * Generated from protobuf field <code>.lnrpc.OutPoint outpoint = 5[json_name = "outpoint"];</code>
     * @param \Lnrpc\OutPoint $var
     * @return $this
     */
    public function setOutpoint($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\OutPoint::class);
        $this->outpoint = $var;

        return $this;
    }

    /**
     *&#47; The number of confirmations for the Utxo
     *
     * Generated from protobuf field <code>int64 confirmations = 6[json_name = "confirmations"];</code>
     * @return int|string
     */
    public function getConfirmations()
    {
        return $this->confirmations;
    }

    /**
     *&#47; The number of confirmations for the Utxo
     *
     * Generated from protobuf field <code>int64 confirmations = 6[json_name = "confirmations"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setConfirmations($var)
    {
        GPBUtil::checkInt64($var);
        $this->confirmations = $var;

        return $this;
    }

}


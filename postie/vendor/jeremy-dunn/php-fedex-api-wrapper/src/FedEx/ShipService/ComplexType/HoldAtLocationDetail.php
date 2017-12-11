<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data required for a FedEx shipment that is to be held at the destination FedEx location for pickup by the recipient.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $PhoneNumber
 * @property ContactAndAddress $LocationContactAndAddress
 * @property \FedEx\ShipService\SimpleType\FedExLocationType|string $LocationType

 */
class HoldAtLocationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'HoldAtLocationDetail';

    /**
     * Contact phone number for recipient of shipment.
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->values['PhoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Contact and address of FedEx facility at which shipment is to be held.
     *
     * @param ContactAndAddress $locationContactAndAddress
     * @return $this
     */
    public function setLocationContactAndAddress(ContactAndAddress $locationContactAndAddress)
    {
        $this->values['LocationContactAndAddress'] = $locationContactAndAddress;
        return $this;
    }

    /**
     * Type of facility at which package/shipment is to be held.
     *
     * @param \FedEx\ShipService\SimpleType\FedExLocationType|string $locationType
     * @return $this
     */
    public function setLocationType($locationType)
    {
        $this->values['LocationType'] = $locationType;
        return $this;
    }

    
}

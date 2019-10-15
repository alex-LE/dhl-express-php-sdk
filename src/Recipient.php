<?php
namespace alexLE\DHLExpress;


class Recipient extends DataClass {

    /**
     * @var Contact
     */
    protected $contact;

    /**
     * @var Address;
     */
    protected $address;

    /**
     * @return Contact
     */
    public function getContact() {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     * @return Recipient
     */
    public function setContact(Contact $contact) {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return Recipient
     */
    public function setAddress(Address $address) {
        $this->address = $address;
        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        return [
            'Contact' => $this->contact->buildData(),
            'Address' => $this->address->buildData(),
        ];
    }
}
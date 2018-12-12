<?php

namespace StefanDoorn\SyliusAddressHouseNumberBundle\Entity;

use StefanDoorn\SyliusAddressHouseNumberBundle\Entity\Interfaces\AddressInterface;
use StefanDoorn\SyliusAddressHouseNumberPlugin\Entity\Traits\HouseNumber;
use Sylius\Component\Core\Model\Address as BaseAddress;

class Address extends BaseAddress implements AddressInterface
{
    use HouseNumber;
}
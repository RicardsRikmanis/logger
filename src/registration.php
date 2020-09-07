<?php
/**
 * ScandiPWA_Logger
 *
 * @category    ScandiPWA
 * @package     ScandiPWA_Logger
 * @author      Ilja Lapkovskis <ilja@scandiweb.com | info@scandiweb.com>
 * @author      Ricards Rikmanis <ricards@scandiweb.com | info@scandiweb.com>
 * @copyright   Copyright (c) 2020 Scandiweb, Ltd (https://scandiweb.com)
 * @license     OSL-3.0
 */

use \Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'ScandiPWA_Logger',
    __DIR__
);

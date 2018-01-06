<?php

namespace App\Models;
use GuzzleHttp\Client as Guzzle;

trait PagSeguroTrait
{
    public function getConfigs()
    {
        return [
            'email' => config('pagseguro.email'),
            'token' => config('pagseguro.token'),
        ];
    }
    
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
    
    public function getItems()
    {
        $items = [];
        $itemsCart = $this->cart->getItems();
        
        $posistion = 1;
        foreach ($itemsCart as $item) {
            $items["itemId{$posistion}"]            = $item['item']->id;
            $items["itemDescription{$posistion}"]   = $item['item']->description;
            $items["itemAmount{$posistion}"]        = number_format($item['item']->price, 2, '.', '');
            $items["itemQuantity{$posistion}"]      = $item['qtd'];
            
            $posistion++;
        }
        
        return $items;
        /*
        return [
            'itemId1' => '0001',
            'itemDescription1' => 'Produto PagSeguroI',
            'itemAmount1' => '99999.99',
            'itemQuantity1' => '1',
            'itemWeight1' => '1000',
            'itemId2' => '0002',
            'itemDescription2' => 'Produto PagSeguroII',
            'itemAmount2' => '99999.98',
            'itemQuantity2' => '2',
            'itemWeight2' => '750',
        ];
         */
    }
    
    
    public function getSender()
    {
        return [
            'senderName' => 'Jose Comprador',
            'senderAreaCode' => '99',
            'senderPhone' => '99999999',
            'senderEmail' => 'c12889565093924203530@sandbox.pagseguro.com.br',
            'senderCPF' => '88648424380',
        ];
    }
    
    public function getShipping()
    {
        return [
            'shippingType' => '1',
            'shippingAddressStreet' => 'Av. PagSeguro',
            'shippingAddressNumber' => '9999',
            'shippingAddressComplement' => '99o andar',
            'shippingAddressDistrict' => 'Jardim Internet',
            'shippingAddressPostalCode' => '99999999',
            'shippingAddressCity' => 'Cidade Exemplo',
            'shippingAddressState' => 'SP',
            'shippingAddressCountry' => 'ATA',
        ];
    }
}
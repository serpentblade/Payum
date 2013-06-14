<?php
namespace Payum\Payex\Tests\Model;

use Payum\Payex\Model\PaymentDetails;

class PaymentDetailsTest extends \PHPUnit_Framework_TestCase
{
    public static function provideFields()
    {
        return array(
            array('purchaseOperation', 'getPurchaseOperation', 'setPurchaseOperation'),
            array('price', 'getPrice', 'setPrice'),
            array('priceArgList', 'getPriceArgList', 'setPriceArgList'),
            array('currency', 'getCurrency', 'setCurrency'),
            array('vat', 'getVat', 'setVat'),
            array('orderID', 'getOrderID', 'setOrderID'),
            array('productNumber', 'getProductNumber', 'setProductNumber'),
            array('description', 'getDescription', 'setDescription'),
            array('clientIPAddress', 'getClientIPAddress', 'setClientIPAddress'),
            array('clientIdentifier', 'getClientIdentifier', 'setClientIdentifier'),
            array('additionalValues', 'getAdditionalValues', 'setAdditionalValues'),
            array('returnUrl', 'getReturnUrl', 'setReturnUrl'),
            array('view', 'getView', 'setView'),
            array('agreementRef', 'getAgreementRef', 'setAgreementRef'),
            array('cancelUrl', 'getCancelUrl', 'setCancelUrl'),
            array('clientLanguage', 'getClientLanguage', 'setClientLanguage'),
            array('errorCode', 'getErrorCode', 'setErrorCode'),
            array('errorDescription', 'getErrorDescription', 'setErrorDescription'),
            array('thirdPartyError', 'getThirdPartyError', 'setThirdPartyError'),
            array('orderRef', 'getOrderRef', 'setOrderRef'),
            array('redirectUrl', 'getRedirectUrl', 'setRedirectUrl'),
            array('transactionStatus', 'getTransactionStatus', 'setTransactionStatus'),
            array('transactionNumber', 'getTransactionNumber', 'setTransactionNumber'),
            array('productId', 'getProductId', 'setProductId'),
            array('paymentMethod', 'getPaymentMethod', 'setPaymentMethod'),
            array('amount', 'getAmount', 'setAmount'),
            array('alreadyCompleted', 'getAlreadyCompleted', 'setAlreadyCompleted'),
            array('stopDate', 'getStopDate', 'setStopDate'),
            array('clientGsmNumber', 'getClientGsmNumber', 'setClientGsmNumber'),
            array('orderStatus', 'getOrderStatus', 'setOrderStatus'),
            array('paymentMethodExpireDate', 'getPaymentMethodExpireDate', 'setPaymentMethodExpireDate'),
            array('BankHash', 'getBankHash', 'setBankHash'),
            array('maskedNumber', 'getMaskedNumber', 'setMaskedNumber'),
            array('AuthenticatedStatus', 'getAuthenticatedStatus', 'setAuthenticatedStatus'),
            array('AuthenticatedWith', 'getAuthenticatedWith', 'setAuthenticatedWith'),
            array('fraudData', 'getFraudData', 'setFraudData'),
            array('pending', 'getPending', 'setPending'),
            array('transactionErrorCode', 'getTransactionErrorCode', 'setTransactionErrorCode'),
            array('transactionErrorDescription', 'getTransactionErrorDescription', 'setTransactionErrorDescription'),
            array('transactionThirdPartyError', 'getTransactionThirdPartyError', 'setTransactionThirdPartyError'),
            array('stan', 'getStan', 'setStan'),
            array('terminalId', 'getTerminalId', 'setTerminalId'),
            array('TransactionTime', 'getTransactionTime', 'setTransactionTime'),
        );
    }
    
    /**
     * @test
     */
    public function shouldImplementArrayAccessInterface()
    {
        $rc = new \ReflectionClass('Payum\Payex\Model\PaymentDetails');

        $this->assertTrue($rc->implementsInterface('ArrayAccess'));
    }

    /**
     * @test
     */
    public function shouldImplementIteratorAggregateInterface()
    {
        $rc = new \ReflectionClass('Payum\Payex\Model\PaymentDetails');

        $this->assertTrue($rc->implementsInterface('IteratorAggregate'));
    }

    /**
     * @test
     */
    public function couldBeConstructedWithoutAnyArguments()
    {
        new PaymentDetails;
    }

    /**
     * @test
     * 
     * @dataProvider provideFields
     */
    public function shouldAllowSetField($fieldName, $getter, $setter)
    {
        $details = new PaymentDetails;

        $details->$setter('aValue');
    }

    /**
     * @test
     *
     * @dataProvider provideFields
     */
    public function shouldAllowGetPreviouslySetField($fieldName, $getter, $setter)
    {
        $details = new PaymentDetails;

        $details->$setter('theValue');
        
        $this->assertEquals('theValue', $details->$getter());
    }

    /**
     * @test
     *
     * @dataProvider provideFields
     */
    public function shouldAllowAccessAsArrayPreviouslySetField($fieldName, $getter, $setter)
    {
        $details = new PaymentDetails;

        $details->$setter('theValue');

        $this->assertEquals('theValue', $details[$fieldName]);
    }

    /**
     * @test
     *
     * @dataProvider provideFields
     */
    public function shouldAllowSetAsArrayField($fieldName, $getter, $setter)
    {
        $details = new PaymentDetails;

        $details[$fieldName] = 'theValue';

        $this->assertEquals('theValue', $details[$fieldName]);
    }

    /**
     * @test
     */
    public function shouldAllowIterateOverSetFields()
    {
        $details = new PaymentDetails;

        $details['orderID'] = 'foo';
        $details->setPrice('baz');

        $this->assertEquals(
            array('orderID' => 'foo', 'price' => 'baz'), 
            iterator_to_array($details)
        );
    }
}
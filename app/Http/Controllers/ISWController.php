<?php
/**
 * Description of PaymentGateway
 *
 * @author Abiola.Adebanjo
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use InterswitchAPI\Interswitch;

class ISWController extends Controller {
    const CLIENT_ID = "IKIA1F46486E514F5C3709BA2C294635F08039C8E2E6";
    const CLIENT_SECRET = "O/2i011g+qiZTBugRG4m949SgQi330KCja2VNhsNKbI=";
    const PURCHASE_RESOURCE_URL = "api/v2/purchases";
    const HTTP_CODE = "HTTP_CODE";
    const RESPONSE_BODY = "RESPONSE_BODY";
    const CERTIFICATE_FILE_PATH = "../paymentgateway.crt";

    public function index(){
        return view("interswitch.apiJam");
    }
    function doPurchase($authData, $amount, $interswitchAPI) {
        $httpMethod = "POST";
        $transactionRef = generateRef();
        $customerId = "api-jam@interswitchgroup.com";
        $currency = "NGN";
        $data = array(
            "customerId" => $customerId,
            "amount" => $amount,
            "transactionRef" => $transactionRef,
            "currency" => $currency,
            "authData" => $authData
        );
        $request = json_encode($data);
        return $interswitchAPI->send(PURCHASE_RESOURCE_URL, $httpMethod, $request);
    }
    function doTransactionQuery($amount, $transactionRef, $interswitchAPI) {
        $httpMethod = "GET";
        $headers = array(
            'amount: ' . $amount,
            'transactionRef: ' . $transactionRef
        );
        return $interswitchAPI->send(PURCHASE_RESOURCE_URL, $httpMethod, null, $headers);
    }
    function generateRef() {
        $transRef = "ISW|API|JAM|" . mt_rand(0, 65535);
        return $transRef;
    }
    public function test() {
        $interswitchAPI = new Interswitch(CLIENT_ID, CLIENT_SECRET);
        $authData = $interswitchAPI->getAuthData(CERTIFICATE_FILE_PATH, '1', '6280511000000095', '5004', '111', '1111');
        $doPurchase = doPurchase($authData, '1000', $interswitchAPI);
        echo "=============================================Purchase=================================================================";
        echo "<br>";
        print_r($doPurchase);
        echo "<br>";
        $doTransactionQuery = doTransactionQuery('1000', 'ISW|API|JAM|62741', $interswitchAPI);
        echo "=============================================Transaction Query=================================================================";
        echo "<br>";
        print_r($doTransactionQuery);
    }
    // test();
} 
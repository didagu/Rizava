<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pay</title>
    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('isw/interswitch.sdk.js') }}"></script>
    
    <style media="screen">
      html,body{
        margin:0;
        padding:0;
        overflow:hidden;
        height:100vh;
        background-color:#f6f6f6;
      }
      div.wrap{
        width:100%;
        height:100vh;
        display:flex;
      }
      section{
        width:30%;
        height:60%;
        border:3px solid lightgrey;
        border-radius:10px;
        margin:auto;
        background-color:white;
        display:flex;
        flex-flow:column wrap;
        padding:25px 0px 40px 0px;
      }
      div.main{
        /*height:23%;*/
      }
      div.main .pan-area{
        width:100%;
      }
      div.mn{
        width:100%;
        display:flex;
        flex-direction:row;
        justify-content:space-between;
      }
      div.cvv-area{
        flex-basis:25%;
      }
      div.main>.pin-area{
        width:100%;
      }
      div.mn>.exp-area{
        flex-basis:50%;
      }
      div.pin-area .mn{
        position:relative;
      }
      div.mn>.pin{
        flex-basis:30%;
      }
      div.mn>.pay{
        position:absolute;
        right:0;
        bottom:0;
      }
      td{
        padding:1px;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
    	<div class="alert alert-success" sytle="margin-top:500px">
    		<h1>Payment Successful</h1>
    	</div>
      <div class="row">
        <div class="wrap">
          <section>
	          <input type="hidden" name="custId" value="08068940543">
	          <input type="hidden" name="amount" value="1000">
            <div class="main pan-area">
              <div class="col-sm-push-2 col-sm-8">
                <label for="pan">PAN No.</label>
                <input type="text" min="10" max="10" name="pan" class="form-control">
              </div>
            </div>

            <div class="main">
              <div class="col-sm-push-2 col-sm-8">
                <div class="mn">
                  <div class="cvv-area">
                    <div class="form-group">
                      <label for="cvv">CVV</label>
                      <input type="text" name="cvv" maxlength='3' class="form-control">
                    </div>
                  </div>

                  <div class="exp-area">
                    <div class="form-group">
                      <label for="exp">EXPIRY DATE</label>
                      <input type="text" name="exp" class="form-control" placeholder="dd/mm/yyyy">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="main pin-area">
              <div class="col-sm-push-2 col-sm-8">
                <div class="mn">
                  <div class="pin">
                    <label for="pin">PIN</label>
                    <input type="password" name="pin" disabled="disabled" maxlength="4" class="form-control">
                  </div>
                  <div class="pay">
                    <button type="submit" class='btn btn-info' id="pay">PAY</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="main">
              <div class="col-sm-push-2 col-sm-8">
                <table>
                  <tbody>
                    <tr>
                      <td>
                        <button type="button">1</button>
                      </td>
                      <td>
                        <button type="button">2</button>
                      </td>
                      <td>
                        <button type="button">3</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <button type="button">4</button>
                      </td>
                      <td>
                        <button type="button">5</button>
                      </td>
                      <td>
                        <button type="button">6</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <button type="button">7</button>
                      </td>
                      <td>
                        <button type="button">8</button>
                      </td>
                      <td>
                        <button type="button">9</button>
                      </td>
                    </tr>
                    <tr>
                      <td colspan='3' style="text-align:center">
                        <button type="button">0</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <button></button>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $(document).ready(function(){
      	// function button(){
	      // 	var table = (document.getElementsByTagName("td").innerHTML);
	      // 	alert(table)
      	// }


      	$( "#pay" ).on( "click" ,function(){
      		var CARD_PAN = $("[name='pan']").val(), EXPIRY_DATE = $("[name='exp']").val(), CVV = $("[name='cvv']").val(), PIN = $("[name='pin']").val(),CUSTOMER_ID_OR_MOBILE = "api-jam@interswitchgroup.com", AMOUNT = "1000";

	      	var isw = new Interswitch('IKIA9614B82064D632E9B6418DF358A6A4AEA84D7218','XCTiBtLy1G9chAnyg0z3BcaFK4cVpwDg/GTw2EmjTZ8=',"SANDBOX");

	      	var authData=isw.getAuthData(CARD_PAN,EXPIRY_DATE,CVV,PIN);



      		var PurchaseData = {
                "customerId":CUSTOMER_ID_OR_MOBILE,
                "amount": AMOUNT,
                "transactionRef": "ESBDEV"+(Math.floor(Math.random() * 1000)),
                "currency": "NGN",
                "authData": authData,
                //"merchantCode": "MX186", //MERCHANT
               // "payableId": "2324" //ITEM
    		};

	      	try{
	        	var callback=isw.send("api/v2/purchases","POST", PurchaseData, {}, null);
		    	callback.then(function(response){
		    		console.log("response from " + JSON.stringify(response));
		        if (response.data.responseCode === "T0") {
		                    //this.state = this.scenario.OTP;
		                    //OTP PHASE
		            var OTPData = {
		            //"authData": this.authData, NO COMPULSORY
		            "paymentId": response.data.paymentId,
		            "otp": "645001"
		            };

		            var callback=isw.send("api/v2/purchases/otps/auths","POST", OTPData, {

		            }, null);
			        }
			    })
			    .catch( function(error){
			        console.log(error);
			    });
		    }
		    catch(e){
		        console.log(e);
		    }
      	});

        $( "td>button" ).click(function(){
          var btn = $( this ).html();
          if(!($( "[name='pin']" ).val().length > 3)){
            $( "[name='pin']" ).val( $("[name='pin']").val() + btn );
          }
        });
      });
    </script>
  </body>
</html>

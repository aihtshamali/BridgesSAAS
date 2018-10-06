<!DOCTYPE html>
<html>
<head>
	<title>voucher</title>
	<style type="text/css">
		body{margin:0px;padding:7px;height: 100%;}
        p, div, span, td, a, h1, h2, h3, h4, h5, h6, ul, ol, li, dd, dt, th, tr{font-family: Roboto !important;}
        .clear{clear: both;}
		.headerSection{}
        .headerSection img{width: 3.5%;float: left;}
		.headerSection center p{text-transform: uppercase;margin:0px !important;font-size: 17px;font-weight: 900;line-height: 16px;padding-top: 15px;}
        .small{text-transform: uppercase;font-size: 13px;font-weight: 900;}
        .smallHeading{text-transform: capitalize;font-size: 13px;font-weight: 900;}
        .formBodySection{padding-top: 20px;}
		.formBodySection form table tr td{}
        .borderBottom{border-bottom: 1px solid #000;min-width: 50px;}
        .typeText{border:none;}
        .left{float: left;}
        .right{float: right;}
        table{width: 99%;}
        .titleWidth{width: 5% !important;}
        .titleWidthBig{width: 10% !important;}
        .paddingTop{padding-top: 10px;}
        .marginTop{margin-top: 10px;}
        .discription{width: 70%;}
        .amount{width: 29%;}
        .smallLineHeight{line-height: 14px;}
        /*.smallLineHeight {border-bottom:1px solid #000;}*/
        .bigLineHeight{line-height: 25px;}
        .bigLineHeight td{border-bottom:1px solid #000;border-right: 1px solid #000}
        .border{border:1px solid #000;}
        .fullWidth{width: 100%;}
        .amount{border-right: none !important;}
        input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button {-webkit-appearance: none;-moz-appearance: none;appearance: none;margin: 0;}
        .recieptSection{}
        .recieptSection table tr td{margin-left: 100px;margin-right: 100px;margin-top: 50px;width: 19%}
		.recieptSection table tr td center{border-top:1px solid #000;padding-top: 5px !important;}
		.footerSection center p{ font-size: 12px; }
        .bigFontSize{font-size: 14px;}
        .smallFontSize{font-size: 12px;}
        @media print
            {

                .titleWidth{width: 10% !important;}
                .titleWidthBig{width: 20% !important;}
                .smallHeading{margin-left: 5px;}
                .headerSection img{width: 7%;float: left;}
                .hideOnPrint{display: none !important;}
            }   
	</style>
</head>
<body>
	<div class="headerSection clear">
		<img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/images/final_logo.jpg">
		<center>
			<p>Bridges<br/><span class="small">Development Consortium</span><br/><b class="smallHeading clear">Payment Voucher</b></p>
		</center>
	</div>
    <?php if(!isset($voucher)){ ?>
	<div class="formBodySection clear">
		<form action="<?php echo base_url() ?>Hr/insertPaymentvoucher" method="POST">
            <table>
                <tr class="left">
                    <td class="titleWidth">No:</td>
                    <td class="borderBottom">
                        <input type="text" name="number" class="typeText" />
                    </td>
                </tr>
                <tr class="right">
                    <td class="titleWidth"><b>Date:</b></td>
                    <td class="borderBottom">
                        <input type="Date" name="date" value="<?php echo date('Y-m-d'); ?>" class="typeText" />
                    </td>
                </tr>
            </table>
            <table class="clear paddingTop">
                <tr class="">
                    <td class="titleWidth">Paid To:</td>
                    <td class="borderBottom">
                        <input type="text" name="paidTo" class="typeText fullWidth" />
                    </td>
                </tr>
            </table>
            <table class="marginTop clear">
                <tr class="smallLineHeight">
                    <td class="discription" style="border-right: 1px solid #000;width: 69.8%;">Description</td>
                    <td class="amount">Amount</td>
                </tr>
            </table>
            <table class="clear border" style="margin-top: -1px;border-right:none;"> 
                <tr class="bigLineHeight">
                    <td class="discription">
                        <input type="text" name="description1" class="typeText fullWidth">
                    </td>
                    <td class="amount">
                        <input type="number" name="amount1" id="amount1" class="typeText fullWidth">
                    </td>
                </tr>
                <tr class="bigLineHeight">
                    <td class="discription">
                        <input type="text" name="description2" class="typeText fullWidth">
                    </td>
                    <td class="amount">
                        <input type="number" name="amount2" id="amount2" class="typeText fullWidth">
                    </td>
                </tr>
                <tr class="bigLineHeight">
                    <td class="discription" style="border-bottom: none !important;">
                        <input type="text" name="description3" class="typeText fullWidth">
                    </td>
                    <td class="amount" style="border-bottom: none !important;">
                        <input type="number" name="amount3" id="amount3"  class="typeText fullWidth">
                    </td>
                </tr>
            </table> 
            <table class="clear">            
                <td class="discription">
                    <b class="right">Total:</b>
                </td>
                <td class="amount" style="border-bottom: 1px solid #000 !important;">
                    <input type="number" name="total_amount" id="total_amount" class="typeText fullWidth">
                </td>
                </tr>               
            </table>
            <div style="padding:10px">
                    <span class="hideOnPrint" style="float:right"><input type="submit"></span>
            </div>    
        </form>
        <table>
            <tr class="bigLineHeight">
                <td class="titleWidthBig" style="border: none !important;">Amount in words</td>
                <td class="borderBottom " style="border-right: none !important;"><input type="text" id="amount_in_words" class="typeText fullWidth" name="amountInWords" class="typeText" /></td>
            </tr>
        </table>
        <p class="borderBottom paddingTop" style="width: 99%;"></p>
	</div>
	<div class="recieptSection clear paddingTop">
        <table>
            <tr>
                <td><center>Prepared By</center></td>
                <td></td>
                <td><center>Received By</center></td>
                <td></td>
                <td><center>Approved By</center></td>
            </tr>
        </table>		
	</div>
	<div class="footerSection clear">
		<center>
            <p>
               Bridges Development Consortium<br/>152 - Abu Bakar Block- Garden Town - Lahore.<br/> Ph/Fax: 92-42-5843094 - info@bridgesconsortium.org 
            </p>      
        </center>
	</div>
    <img src="http://icons.iconarchive.com/icons/icons8/ios7/128/Editing-Cut-Filled-icon.png" width="10px" style="position: absolute;width:15px;margin-top: -6.5px;" />
    <div class="clear" style="border-top:1.5px dotted #000;"></div>


        <!-- For Updation -->
    <?php } else{ ?>
        <div class="formBodySection clear">
        <form action="<?php echo base_url() ?>Hr/insertPaymentvoucher/<?=$voucher->id?>" method="POST">
            <table>
                <tr class="left">
                    <td class="titleWidth">No:</td>
                    <td class="borderBottom">
                        <input type="text" name="number" class="typeText" />
                    </td>
                </tr>
                <tr class="right">
                    <td class="titleWidth"><b>Date:</b></td>
                    <td class="borderBottom">
                        <input type="Date" name="date" value="<?php echo date('Y-m-d',strtotime($voucher->created_at)); ?>" class="typeText" />
                    </td>
                </tr>
            </table>
            <table class="clear paddingTop">
                <tr class="">
                    <td class="titleWidth">Paid To:</td>
                    <td class="borderBottom">
                        <input type="text" name="paidTo" value="<?= $voucher->paid_to;?>" class="typeText fullWidth" />
                    </td>
                </tr>
            </table>
            <table class="marginTop clear">
                <tr class="smallLineHeight">
                    <td class="discription" style="border-right: 1px solid #000;width: 69.8%;">Description</td>
                    <td class="amount">Amount</td>
                </tr>
            </table>
            <table class="clear border" style="margin-top: -1px;border-right:none;"> 
                
                <tr class="bigLineHeight">
                    <td class="discription">
                        <input type="text" name="description1" value="<?= $voucher->description1 ?>" class="typeText fullWidth">
                    </td>
                    <td class="amount">
                        <input type="number" name="amount1" id="amount1" value="<?= $voucher->amount1 ?>" class="typeText fullWidth">
                    </td>
                </tr>
                <tr class="bigLineHeight">
                    <td class="discription">
                        <input type="text" name="description2" value="<?= $voucher->description2 ?>" class="typeText fullWidth">
                    </td>
                    <td class="amount">
                        <input type="number" name="amount2" id="amount2" value="<?= $voucher->amount2 ?>" class="typeText fullWidth">
                    </td>
                </tr>
                <tr class="bigLineHeight">
                    <td class="discription" style="border-bottom: none !important;">
                        <input type="text" name="description3" value="<?= $voucher->description3 ?>" class="typeText fullWidth">
                    </td>
                    <td class="amount" style="border-bottom: none !important;">
                        <input type="number" name="amount3" id="amount3" value="<?= $voucher->amount3 ?>"  class="typeText fullWidth">
                    </td>
                </tr>
            </table> 
            <table class="clear">            
                <td class="discription">
                    <b class="right">Total:</b>
                </td>
                <td class="amount" style="border-bottom: 1px solid #000 !important;">
                    <input type="number" name="total_amount" value="<?= $voucher->total_amount ?>" id="total_amount" class="typeText fullWidth">
                </td>
                </tr>               
            </table>
            <div style="padding:10px">
                    <span style="float:right"><input type="submit"></span>
            </div>    
        </form>
        <table>
            <tr class="bigLineHeight">
                <td class="titleWidthBig" style="border: none !important;">Amount in words</td>
                <td class="borderBottom " style="border-right: none !important;"><input type="text" id="amount_in_words" class="typeText fullWidth" name="amountInWords" class="typeText" /></td>
            </tr>
        </table>
        <p class="borderBottom paddingTop" style="width: 99%;"></p>
    </div>
    <div class="recieptSection clear paddingTop">
        <table>
            <tr>
                <td><center>Prepared By</center></td>
                <td></td>
                <td><center>Received By</center></td>
                <td></td>
                <td><center>Approved By</center></td>
            </tr>
        </table>        
    </div>
    <div class="footerSection clear">
        <center>
            <p>
               Bridges Development Consortium<br/>152 - Abu Bakar Block- Garden Town - Lahore.<br/> Ph/Fax: 92-42-5843094 - info@bridgesconsortium.org 
            </p>      
        </center>
    </div>
    <?php } ?>
</body>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $("#amount_in_words").val(convertNumberToWords($("#total_amount").val()));

    $('#amount1, #amount2, #amount3').change(function(){ 
        var amount=0;var amount2=0;var amount3=0;
        if($("#amount1").val()){
            amount+=parseInt($("#amount1").val());
        }
        if($("#amount2").val()){
            amount+=parseInt($("#amount2").val());
        }
        if($("#amount3").val()){
            amount+=parseInt($("#amount3").val());
        }
        $("#total_amount").val(amount);
        $("#amount_in_words").val(convertNumberToWords(amount));
    });
});
function convertNumberToWords(amount) {
    var words = new Array();
    words[0] = '';
    words[1] = 'One';
    words[2] = 'Two';
    words[3] = 'Three';
    words[4] = 'Four';
    words[5] = 'Five';
    words[6] = 'Six';
    words[7] = 'Seven';
    words[8] = 'Eight';
    words[9] = 'Nine';
    words[10] = 'Ten';
    words[11] = 'Eleven';
    words[12] = 'Twelve';
    words[13] = 'Thirteen';
    words[14] = 'Fourteen';
    words[15] = 'Fifteen';
    words[16] = 'Sixteen';
    words[17] = 'Seventeen';
    words[18] = 'Eighteen';
    words[19] = 'Nineteen';
    words[20] = 'Twenty';
    words[30] = 'Thirty';
    words[40] = 'Forty';
    words[50] = 'Fifty';
    words[60] = 'Sixty';
    words[70] = 'Seventy';
    words[80] = 'Eighty';
    words[90] = 'Ninety';
    amount = amount.toString();
    var atemp = amount.split(".");
    var number = atemp[0].split(",").join("");
    var n_length = number.length;
    var words_string = "";
    if (n_length <= 9) {
        var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        var received_n_array = new Array();
        for (var i = 0; i < n_length; i++) {
            received_n_array[i] = number.substr(i, 1);
        }
        for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
            n_array[i] = received_n_array[j];
        }
        for (var i = 0, j = 1; i < 9; i++, j++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                if (n_array[i] == 1) {
                    n_array[j] = 10 + parseInt(n_array[j]);
                    n_array[i] = 0;
                }
            }
        }
        value = "";
        for (var i = 0; i < 9; i++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                value = n_array[i] * 10;
            } else {
                value = n_array[i];
            }
            if (value != 0) {
                words_string += words[value] + " ";
            }
            if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Crores ";
            }
            if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Lakhs ";
            }
            if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Thousand ";
            }
            if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                words_string += "Hundred and ";
            } else if (i == 6 && value != 0) {
                words_string += "Hundred ";
            }
        }
        words_string = words_string.split("  ").join(" ");
    }
    return words_string;
}
</script>
</html>
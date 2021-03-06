<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script> -->

    <script>
      function printContent(el){
      var restorepage = $('body').html();
      var printcontent = $('#' + el).clone();
      $('body').empty().html(printcontent);
      window.print();
      $('body').html(restorepage);
      }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?=base_url('assets/css/w3.css');?>">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style media="screen">
      body{font-family: San Francisco,Roboto,Segoe UI Bold,Arial,sans-serif !important;font-size: 14px !important;color: #212529a8 !important;}
      @media (min-width:1200px){.container{max-width:1250px}}
      @media (min-width: 768px){
      .col-md-1 {-ms-flex: 0 0 5.333333% !important;flex: 0 0 5.333333% !important;max-width: 5.333333% !important;}}
      .col-md-1 b{color: #ab2727 !important;}
      .pointer{cursor: pointer;}
      .bgred{background: #ab2727 !important;}
      .white{color: #fff;}
      .h1, h1 {font-size: 4rem !important;}
      .clearfix{clear: both !important;}
      .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6{margin-bottom: 0% !important;line-height: 1;padding: 0% 0.5%;width: fit-content;font-weight: 900 !important;}
      p,b,td,h1,h2,h3,h4,h5,h6,span,div{text-transform: capitalize;}
      button{border-radius: 3px;background: #77777738;border: none;font-size: 11px !important;color: #fff;width:50% !important;}
      .fileContainer button{width: 100% !important;}
	  .p_bg{margin: -1px !important;padding: 0px !important;width:fit-content;}
	  .dropdown{background:#77777740 !important;border-radius:3px;}
      i{font-size: 14px !important;}
      .col-md-2 b,td b{text-transform: none !important;}
      .onhoverborder:hover{border: 1px solid #ab2727 !important;background: #8080805e;border-radius: 5px;box-shadow: 3px 2px 7px #777;-webkit-transition: all 600ms ease;transition: all 600ms ease;cursor: pointer;}
      .notcapitalize{text-transform: uppercase !important;}
      .border_botred{border-bottom: 2px solid #840a0a;}
      .border{border: 1px solid #840a0a;}
      .left{float: left !important;}
      .right{float: right !important;}
      .pad1per{padding: 1% 1% 0% 1%;}
      .redclr{color: #ab2727 !important;}
      .mainheading{color: #ab2727 !important;padding: .5% 0% 0% 5.3% !important;margin:0;font-weight: 700;font-style: italic !important;letter-spacing: -1px;}
      .flow_root{display: flow-root !important}
      .capitalize{text-transform: capitalize;}
      .uppercase{text-transform: uppercase;}
      .mar_outerdiv{margin: 1% 0% !important;}
      table{width:100%; border-color: #80808021 !important;}
      /* td{padding-left: 5% !important;} */
      .textcenter{text-align: center !important;}
      .nopad_nomar{padding: 0px !important;margin: 0px important;}
      .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto
      {padding-right:0px !important;padding-left:0px !important;}
      .fullDiv{background-color: #8080805e;margin-top: -1% !important;}
      /* .objftmain{height: 100px;} */
      .objftimg{object-fit: contain;;width: 100%; height: 100%;}
      .left{float: left !important;}
      .right{float: right !important;}
      .fileContainer {
            overflow: hidden;
            position: relative;
            cursor: pointer;
        }

        .fileContainer [type=file] {
            cursor: inherit;
            display: block;
            font-size: 999px;
            filter: alpha(opacity=0);
            min-height: 100%;
            min-width: 100%;
            opacity: 0;
            position: absolute;
            right: 0;
            text-align: right;
            top: 0;
        }
        td{item-align:center !important;width: 22%;line-height:14px;vertical-align:top;}
		td b, td,th{font-style:italic;}
        th{line-height:14px;}
        /* th{width:200px !important;} */
        textarea{width: 100%;text-align: left;padding-top:0px !important;border-radius:3px !important;background:#ab27271c;font-style:italic;border:none;height: 14px;font-size: 12px;}
        label {display: inline-block;margin-bottom: -8px !important;}
		.lightred{color: #840a0a42}
    .lt_gr{color: #77777796 !important;}
    .pt_12{padding-left: 12%;}
    .pt_9{padding-left: 9%;}
    .nodisplay{display: none;}
	button:hover{cursor:pointer;-webkit-transition: all 600ms ease;transition: all 600ms ease;background:#fff;color:#ab2727c7;border: 1px solid #ab2727c7;padding:0px !important;}
	.upload{font-size: 12px !important;}
	.marginTop{margin-top:4%;}
	label{width:118px !important;}
	.triplenine{color: #999999 !important;}
	.padleftwo{padding-left:2% !important;}
	::-webkit-resizer {
		  border: 1px solid #e1e1e1;
		  background: #e1e1e1;
		  box-shadow: 0 0 5px 5px #e1e1e1;
		  outline: 2px solid #e1e1e1;
		  border-radius: 10px !important;
		}
	.bg_pink{background:#f6e7e7;}
  .rightbtnform{margin: 0% 0.5% !important;float: right;}
  /*input {outline: none !important;}*/

    </style>
  }

  </head>
  <body>
    <div class="container pad1per ">
      <div class="flow_root">
        <h1 class="bgred white left">1</h1>
        <p class="border_botred mainheading"><span class="uppercase">offer & hiring<span><span class="right capitalize">Report 1, Report 2, Report 3, Report 4</span></p>
        <p class="mainheading capitalize">Select Employee Info, Offer, Hiring<span class="right lightred capitalize">CAAN – Admin Module </span></p>
      </div>
      <div class="row mar_outerdiv">
        <div class="col-md-1 ">
          <b>1.1</b>
        </div>
        <div class="col-md-11">
          <table>
            <tr>
              <th class="redclr">Selected Employee Base Info</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <td>
                <table>
                  <tr class="redclr">
                    <th>1.1.a</th>
                    <th>contact info</th>
                    <th>   </th>
                  </tr>
                </table>
              </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td>
                <table>
                  <tr class="redclr">
                    <td width="30%"> </td>
                    <td width="30%">1.1.a.1</td>
                    <td width="40%">Name</td>
                  </tr>
                </table>
              </td>
              <td><span class="lt_gr">Last:</span> <textarea id="lnameEntry" name="lname" onblur="writeUserData(this);"><?= $emp->lname;?></textarea> </td>
              <td><span class="lt_gr">Mid:</span> <textarea name="mid_name" onblur="writeUserData(this);"><?= $emp->mid_name;?></textarea> </td>
              <td><span class="lt_gr">First:</span> <textarea name="fname" onblur="writeUserData(this);"><?= $emp->fname;?></textarea> </td></td>
              <td><textarea style="width: 100%;" name="notes" onblur="writeUserData(this);"><?=$emp->notes? $emp->notes:"...notes";?></textarea> </td>
            </tr>
            <tr>
              <td>
                <table>
                  <tr class="redclr">
                    <td width="30%"> </td>
                    <td width="30%">1.1.a.2</td>
                    <td width="40%">Phone #</td>
                  </tr>
                </table>
              </td>
              <td><span class="lt_gr">pref:</span> <textarea id="userContact" name="userContact" onblur="writeUserData(getElementById('lnameEntry'));"><?= $emp->contact;?></textarea> </td>
              <td><span class="lt_gr">other:</span> <textarea id="userPhone" name="userPhone" onblur="writeUserData(getElementById('lnameEntry'))"><?= $emp->phone;?></textarea> </td>
            </tr>
            <tr>
              <td>
                <table>
                  <tr class="redclr">
                    <td width="30%"> </td>
                    <td width="30%">1.1.a.3</td>
                    <td width="40%">Email</td>
                  </tr>
                </table>
              </td>
              <td> <textarea id="emailEntry" name="emailEntry" onblur="writeUserData(getElementById('lnameEntry'));"><?= $emp->email;?></textarea> </td>
              <td> <textarea id="userEmailOther" name="userEmailOther" onblur="writeUserData(getElementById('lnameEntry'));"><?= $emp->emailOther;?></textarea> </td>
            </tr>
			<tr class="">
              <td>
                <table>
                  <tr class="redclr">
                    <td width="30%"> </td>
                    <td width="30%">1.1.a.4</td>
                    <td width="40%">CV</td>
                  </tr>
                </table>
              </td>
              <td colspan="3" style="padding-top:2% !important;"></td>
              <td  style="vertical-align:bottom !important;">
              </td>
              <td> </td>
            </tr>
            <tr class="bg_pink">
              <td>
                <table>
                  <tr class="redclr">
                    <td width="30%"> </td>
                    <td width="30%"></td>
                    <td width="40%"></td>
                  </tr>
                </table>
              </td>
              <td colspan="3" style="padding:2% 2% !important;" id="currentCv"><img style="width:312px; height:450px;" src="<?= base_url().$emp->upload_cv;?>">
				</td>
              <td  style="vertical-align:bottom !important;">
              </td>
              <td> </td>
            </tr>
			<tr class="">
              <td>
                <table>
                  <tr class="redclr">
                    <td width="30%"> </td>
                    <td width="30%"></td>
                    <td width="40%"></td>
                  </tr>
                </table>
              </td>
              <td colspan="3" style="">
			   <p style="margin-bottom:-0.1rem !important;align-items: right !important;width: fit-content;float: right;">
                <!--  
			         <label class="fileContainer">
                    <button type="button" class="upload" name="button">Edit Current</button>
                    <input type="file"/>
                </label>
                -->
                <form class="rightbtnform" method="POST" action="<?=base_url("/Employee_reg/SaveCV");?>" style="margin-right:0 !important" enctype="multipart/form-data">
                  <label class="fileContainer marginTop">
                    <input type="hidden" name="id" value="<?=$id;?>">
                    <button type="button" class="upload" name="button"><label for="userfileCV">Edit Current</label></button>
                    <input style="display:none" type="file" id="userfileCV" name="userfileCV" onChange="form.submit()"/>
                  </label>
                </form>

                <form class="rightbtnform" method="POST" action="<?=base_url("/Employee_reg/ArchiveCV");?>" style="margin-right:0 !important" enctype="multipart/form-data">
                  <label class="fileContainer marginTop">
                    <input type="hidden" name="id" value="<?=$id;?>">
                    <button type="button" class="upload" name="button"><label for="userfileArchive">Add Latest</label></button>
                    <input style="display:none" type="file" id="userfileArchive" name="userfileCV" onChange="form.submit()"/>
                  </label>
                </form>

            </p>
			   <p style="clear:both;margin-bottom:1rem !important;align-items: right !important;width: fit-content;float: right;">
			           <label class="fileContainer marginTop">
                    <button type="button" class="upload" onclick="printContent('currentCv');">Print</button>
                    <!-- <input type="file"/> -->
                </label>
				        <label class="fileContainer marginTop">    
                    <button type="button" class="upload" name="button" ><a style="color:white" href="<?= base_url().$emp->upload_cv;?>" download> Download </a></button>
                </label></p>
				</td>
              <td  style="vertical-align:bottom !important;">
              </td>
              <td> </td>
            </tr>
			<tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <?php foreach ($oldCv as $key => $value) { ?>
            <tr>
              <td class="redclr"></td>
              <td class="triplenine">Previous CV</td>
              <td class="triplenine"><a style="color:black" href="<?=base_url().$value->link;?>" download> Download </a></td>
              <td class="triplenine padleftwo"><?=date("M j, Y", strtotime(date($value->dated)));?></td>
              <td><textarea style="width: 100%;">...notes</textarea></td>
            </tr>
            <?php } ?>
            <!--
            <tr>
              <td class="redclr"></td>
              <td class="triplenine">Brief Description</td>
              <td class="triplenine">Latest Upload</td>
              <td class="triplenine padleftwo">Mar 23, 2016</td>
              <td><textarea style="width: 100%;">...notes</textarea></td>
            </tr>
            -->
          </table>
        </div>
      </div>
      <div class="row mar_outerdiv">
        <div class="col-md-1 ">
          <b>1.2</b>
        </div>
        <div class="col-md-11">
          <table>
            <tr>
              <th class="redclr">Offer</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <td>
                <table>
                  <tr class="redclr">
                    <th class="pointer onhovshowonetwoA" style="width:25%"><p class="border dropdown p_bg">1.2.a<span><i class="fas fa-caret-down"></i></span></p></th>
                    <th style="">Offer Summary</th>
                    <th></th>
                  </tr>
                </table>
              </td>
              <td class="triplenine"></td>
              <td class="triplenine"></td>
              <td></td>
            </tr>
            <tr class="nodisplay showonetwoA">
              <td colspan="5" class="border">there</td>
            </tr>

            <!-- Dynamic offer from here-->
            <?php for($i=1; $i<=3; $i++) { ?>
              <tr>
                <td>
                  <table>
                    <tr class="redclr">
                      <td width="30%"> </td>
                      <td width="30%">1.2.a.<?=$i;?></td>
                      <td width="40%">offer <?=$i;?></td>
                    </tr>
                  </table>
                </td>

                <td style="display:none"><input id="offerEntry" type="hidden" name="offer_id" value="<?=$oldOffer[$i-1]->id;?>" /></td>
                <td><textarea style="width: 100%;" name="offer_description" onblur="writeOfferData(this)"><?=$oldOffer[$i-1]->description?></textarea></td>
                <td><textarea style="width: 100%;" name="offer_status" onblur="writeOfferData(this)"><?=$oldOffer[$i-1]->status?></textarea></td>
                <td> <button type="button" class="upload" onclick="loadGenericModal(this, '<?=$oldOffer[$i-1]->additional;?>');"> Additional </button> </td>
                <td><textarea style="width: 100%;" name="notes" onblur="writeOfferData(this)"><?=$oldOffer[$i-1]->notes?$oldOffer[$i-1]->notes:"...notes" ?></textarea> </td>
              </tr>
            <?php } ?>
            <!--tr>
              <th class="redclr"></th>
              <td class="triplenine">Brief Description</td>
              <td class="triplenine">Latest Upload</td>
              <td class="triplenine padleftwo">Mar 23, 2016</td>
              <td><textarea style="width: 100%;">...notes</textarea></td>
            </tr>
            <tr>
              <td class="redclr"></td>
              <td class="triplenine">Brief Description</td>
              <td class="triplenine">Latest Upload</td>
              <td class="triplenine padleftwo">Mar 23, 2016</td>
              <td><textarea style="widtd: 100%;">...notes</textarea></td>
            </tr-->
          </table>
        </div>
      </div>
      <div class="row mar_outerdiv">
        <div class="col-md-1 ">
          <b>1.3</b>
        </div>
        <div class="col-md-11">
          <table>
            <tr>
              <th class="redclr">Offer Letter</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <td>
                <table>
                  <tr class="redclr">
                    <th><a class="redclr" href="<?=base_url();?>Caan/offer/<?=$id;?>">Offer Letter Editor</a></th>
                    <th></th>
                    <th></th>
                  </tr>
                </table>
              </td>
              <td width="21%"><textarea style="width: 100%;">Brief Description</textarea></td>
              <td width="27.5%">Status</td>
              <td width="12%"><button type="button" name="button">Print</button></td>
              <td><textarea style="width: 100%;">...notes</textarea></td>
            </tr>
          </table>
        </div>
      </div>
      
    </div>

    <!-- additional modal -->
    <div id="genericModal" class="w3-modal">
      <div class="w3-modal-content w3-animate-opacity">
        <header class="w3-container" style="padding:5px; color:white; background: grey;">
          <h2>Information</h2>
        </header>

      <div class="w3-container">
      <form method="POST" action="">
        <label style="margin:10px 10px; width:100% !important;"> <b>Enter additional information</b> </label>
        <textarea id="additionalEntry"></textarea>
        <div style="float:right; margin:10px 10px">
          <input class="btn btn-success btn-sm" type="button" value="Update" id="modelAdditional" onclick="alert('conrollerd by js');">
          <input class="btn btn-success btn-sm" type="button" value="Cancel" onclick='modalVisible("genericModal", false);'>
        </div>
      </form>
      </div>
          <footer class="w3-container w3-text-teal">
            <p> </p>
          </footer>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript">
      $(".onhovshowonetwoA").click(function(){
        $(".showonetwoA").toggle('slow');
      });

      function modalVisible(name, bool) {
        if(bool)
          document.getElementById(name).style.display='block'
        else
          document.getElementById(name).style.display='none'
      }

      function addition(btn) {
        btn.onclick=loadGenericModal(this, $("#additionalEntry").val());
        writeOfferData(btn);
        modalVisible('genericModal', false);
      }

      function loadGenericModal(btn, data) {
        $("#additionalEntry").val(data);
        document.getElementById("modelAdditional").onclick= function() {addition(btn)};
        //console.log($("#modelAdditional").onclick);
        modalVisible('genericModal', true);
      }

      function writeOfferData(someItem){
        form= $(someItem).parent().parent().children("td");

        toPost= {
          id: form.find('input[name="offer_id"]').val(),
          user_id:"<?=$id?>",
          description: form.find('textarea[name="offer_description"]').val(),
          status: form.find('textarea[name="offer_status"]').val(),
          notes: form.find('textarea[name="notes"]').val(),
          additional: $("#additionalEntry").val(),
        };
        console.log(toPost);
        $.ajax({
          url:"<?php echo base_url(); ?>Employee_reg/saveOfferHistory",
          type: "POST",
          data: toPost,
          success: function(data) {//console.log(data);
          }
        });  
      }

      function writeUserData(someItem){
        //form= $(someItem).parent().siblings('td');
        form= $(someItem).parent().parent().children("td");
        toPost= {
          id:"<?=$id?>",
          lname: form.find('textarea[name="lname"]').val(),
          mid_name: form.find('textarea[name="mid_name"]').val(),
          fname: form.find('textarea[name="fname"]').val(),
          notes: form.find('textarea[name="notes"]').val(),
          contact: $("#userContact").val(),
          phone: $("#userPhone").val(),
          emailOther: $("#userEmailOther").val(),
          email: $("#emailEntry").val(),
        };
        console.log(toPost);
        $.ajax({
          url:"<?php echo base_url(); ?>Employee_reg/saveUserPrimaryData",
          type: "POST",
          data: toPost,
          success: function(data) {console.log(data);}
        });  
      }
    </script>
  </body>
</html>

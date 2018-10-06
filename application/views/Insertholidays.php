<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Holiday</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


</head>
<style>
      .mgl-10{
            margin-left: 10px;
      }
	  .mgl-50{
            margin-left: 10px;
      }
	  ..ShowClick{
		  display:none;
	  }
	  .hideclick{
		  display:block;
	  }
</style>
<body>
<div class="container" >
      <h2>Insert Holidays record</h2>
      
 
      <br>
      <br>
      <br>
      
      
<form method="post" action="<?php echo base_url();?>Attendance/saveholidays">
      <table class="table table-responsive">
            <tr>
                  <th>Name</th>
                  <th><p align="center">Date <span id="s1" class="ShowClick">From</span></p></th>
				  <th id="s2"  class="ShowClick"><p align="center">Date To</p></th>
                  <th>Type</th>
                  <th>Holiday</th>
            </tr>
            <tr class="pick-1">
                  <td><input type="text" class="form-control" name="name[0]"  placeholder="Name..."></td>
                  <td><span class="dateDropdown"></span></td>
				  <td class="ShowClick" id="s3"  ><span class="dateDropdown1"></span></td>
                  <td><input type="text" class="form-control" name="description[0]" ></td>
                  <td>Yes-<input type="radio" class="" name="holiday[0]" value="1"> No- <input type="radio" name="holiday[0]" value="0" checked></td>
                  <td><span class="cloned"><button id="1"  class="btn btn-primary btn-xs">+</button></span>
					  <span><button type="button" id="2"  class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-calendar"></span></button></span></td>
            </tr>
            <tr>
                  <td colspan="4" class=""><button class=" pull-right btn btn-success" value="submit"> Submit</button></td>
            </tr>
      </table>
      </form>
</div>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>

$(".ShowClick").hide();




var i=1;var j=0;
$("#add").on('click',function(event){
    event.preventDefault();
    i++;j++;
    var cloned=$(".pick-1:first").clone(true).prop('class','pick-'+i);
    cloned.find('input').each(function(){
      this.name=this.name.replace('['+0+']','['+j+']');
    });
    cloned.find('select').each(function(){
      this.name=this.name.replace('['+0+']','['+j+']');
    });
    
    cloned.insertAfter('.pick-'+(i-1)+':last');

});
var a =1 ; var b =0;
$("#2").on('click',function(event){
    //event.preventDefault();
   // $('#s1').removeClass('ShowClick').addClass('hideclick');
   // $('#s2').removeClass('ShowClick').addClass('hideclick');
   // $('#s3').removeClass('ShowClick').addClass('hideclick');
   // $('#s3').removeClass('ShowClick').addClass('hideclick'); 
    
  
	 $(".ShowClick").toggle();
	 $('#a1').removeClass('mgl-10').addClass('mgl-50');
     $('#a2').removeClass('mgl-10').addClass('mgl-50');
     $('#a3').removeClass('mgl-10').addClass('mgl-50');
});




      var s,
      DateWidget = {
        settings: {
          months: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'],
          day: new Date().getUTCDate(),
          currMonth: new Date().getUTCMonth(),
          currYear: new Date().getUTCFullYear()-10,
          yearOffset: 21,
          containers: $(".dateDropdown")
        },

        init: function() {
          s = this.settings;
          DW = this;
          s.containers.each(function(){
            DW.removeFallback(this);
            DW.createSelects(this);
            DW.populateSelects(this);
            DW.initializeSelects(this);
            DW.bindUIActions();
          })
        },

        getDaysInMonth: function(month, year) {
           return new Date(year, month, 0).getDate();
        },

        addDays: function(daySelect, numDays){
          $(daySelect).empty();

          for(var i = 0; i < numDays; i++){
            $("<option />")
              .text(i + 1)
              .val(i + 1)
              .appendTo(daySelect);
          }
        },

        addMonths: function(monthSelect){
          for(var i = 0; i < 12; i++){
            $("<option />")
              .text(s.months[i])
              .val(s.months[i])
              .appendTo(monthSelect);
          }
        },

        addYears: function(yearSelect){
          for(var i = 0; i < s.yearOffset; i++){
            $("<option />")
              .text(i + s.currYear)
              .val(i + s.currYear)
              .appendTo(yearSelect);
          }
        },

        removeFallback: function(container) {
          $(container).empty();
        },

        createSelects: function(container) {
          $("<select name='day[0]' id='a1' class='day form-control mgl-50' style='display:inline;width:auto'>").appendTo(container);
          $("<select name='month[0]' id='a2' class='month form-control mgl-50' style='display:inline;width:auto'>").appendTo(container);
          $("<select name='year[0]' id='a3' class='year form-control mgl-50' style='display:inline;width:auto'>").appendTo(container);
        },

        populateSelects: function(container) {
          DW.addDays($(container).find('.day'), DW.getDaysInMonth(s.currMonth, s.currYear));
          DW.addMonths($(container).find('.month'));
          DW.addYears($(container).find('.year'));
        },

        initializeSelects: function(container) {
          $(container).find('.day').val(s.day);
          $(container).find('.currMonth').val(s.month);
          $(container).find('.currYear').val(s.year);
        },

        bindUIActions: function() {
          $(".month").on("change", function(){
            var daySelect = $(this).prev(), 
                yearSelect = $(this).next(),
                month = s.months.indexOf($(this).val()) + 1,
                days = DW.getDaysInMonth(month, yearSelect.val());
            DW.addDays(daySelect, days);
          });

          $(".year").on("change", function(){
            var daySelect = $(this).prev().prev(), 
                monthSelect = $(this).prev(),
                month = s.months.indexOf(monthSelect.val()) + 1,
                days = DW.getDaysInMonth(month, $(this).val());
            DW.addDays(daySelect, days);
          });
        }
      };

      DateWidget.init();

 var data = '<?php echo json_encode($holidayDetails); ?>';
 data=JSON.parse(data);
console.log(data[0]['name']);
 $('input[name="name[0]"]').val(data[0]['name']);
 var dat=data[0]['date'].split('-');
 $('select[name="year[0]"]').val(dat[0]);
 $('select[name="day[0]"]').val(parseInt(dat[1]));
 // $('select[name="month[0]"]').val(parseInt(dat[2]));
 $('input[name="description[0]"]').val(data[0]['description']);
 // $('input[name="holiday[0]"]').prop('checked','checked');


 var s1,
 DateWidget1 = {
        settings: {
          months: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'],
          day: new Date().getUTCDate(),
          currMonth: new Date().getUTCMonth(),
          currYear: new Date().getUTCFullYear()-10,
          yearOffset: 21,
          containers: $(".dateDropdown1")
        },

        init: function() {
          s = this.settings;
          DW = this;
          s.containers.each(function(){
            DW.removeFallback(this);
            DW.createSelects(this);
            DW.populateSelects(this);
            DW.initializeSelects(this);
            DW.bindUIActions();
          })
        },

        getDaysInMonth: function(month, year) {
           return new Date(year, month, 0).getDate();
        },

        addDays: function(daySelect, numDays){
          $(daySelect).empty();

          for(var i = 0; i < numDays; i++){
            $("<option />")
              .text(i + 1)
              .val(i + 1)
              .appendTo(daySelect);
          }
        },

        addMonths: function(monthSelect){
          for(var i = 0; i < 12; i++){
            $("<option />")
              .text(s.months[i])
              .val(s.months[i])
              .appendTo(monthSelect);
          }
        },

        addYears: function(yearSelect){
          for(var i = 0; i < s.yearOffset; i++){
            $("<option />")
              .text(i + s.currYear)
              .val(i + s.currYear)
              .appendTo(yearSelect);
          }
        },

        removeFallback: function(container) {
          $(container).empty();
        },

        createSelects: function(container) {
          $("<select name='dayTo[0]' class='day form-control mgl-50' style='display:inline;width:auto'>").appendTo(container);
          $("<select name='monthTo[0]' class='month form-control mgl-50' style='display:inline;width:auto'>").appendTo(container);
          $("<select name='yearTo[0]' class='year form-control mgl-50' style='display:inline;width:auto'>").appendTo(container);
        },

        populateSelects: function(container) {
          DW.addDays($(container).find('.day'), DW.getDaysInMonth(s.currMonth, s.currYear));
          DW.addMonths($(container).find('.month'));
          DW.addYears($(container).find('.year'));
        },

        initializeSelects: function(container) {
          $(container).find('.day').val(s.day);
          $(container).find('.currMonth').val(s.month);
          $(container).find('.currYear').val(s.year);
        },

        bindUIActions: function() {
          $(".month").on("change", function(){
            var daySelect = $(this).prev(), 
                yearSelect = $(this).next(),
                month = s.months.indexOf($(this).val()) + 1,
                days = DW.getDaysInMonth(month, yearSelect.val());
            DW.addDays(daySelect, days);
          });
  $(".year").on("change", function(){
            var daySelect = $(this).prev().prev(), 
                monthSelect = $(this).prev(),
                month = s.months.indexOf(monthSelect.val()) + 1,
                days = DW.getDaysInMonth(month, $(this).val());
            DW.addDays(daySelect, days);
          });
        }
      };

      DateWidget1.init();

 
 
</script>
</html>
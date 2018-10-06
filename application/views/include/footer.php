<footer>
</footer>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/task2.js"></script>
<script>
/* $('.drag').on('mousedown', function (e) {

    $(this).addClass('active').parents().on('mousemove', function (e) {

        $('.active').offset({

            top: e.pageY - $('.active').outerHeight() / 2,
            left: e.pageX - $('.active').outerWidth() / 2

        }).on('mouseup', function () {

            $(this).removeClass('active');

        });
        
    });
    
    return false;    
});*/

 $(".drag").draggable ();
 $(".drag").bind('click', function( event ) {
    var cursor = $( ".drag" ).draggable( "option", "cursor" );
    var cursorAt = $( ".drag" ).draggable( "option", "cursorAt" );
    
 });
/*$('.drag').draggable({
    create: function( event, ui ) {
        $(this).css({
            top: $(this).position().top,
            bottom: "auto"
        });
    }
});*/
 /*salman*/

 $("input").attr('spellcheck', 'true');


</script>  
<script type="text/javascript">
	
	//for add task

	/*function AddTask() {		
		alert();
		$.post("<php echo base_url();?>"+"taskmanagement/addTask", function( response )
		{

			$(".addTask-div").html(response);
	
		});

	}*/

	//for add task

	//for editTask



	function editTaskPopup(taskId,clusterId)
	{
		$.post("<?php echo base_url();?>"+"taskmanagement/editTaskPopup", {taskId:taskId,clusterId:clusterId}, function(response){
			
			$(".editTask-div").html(response);
			$(".editTask-div").css('visibility','visible');

		    $("body, html").animate({ 
		      scrollTop: $(".editTask-div").offset().top 
		    }, 600);

		});
	}

	function hideAddTask(){
			$(".addTask-div").html("");
			$(".addTask-div").css('visibility','hidden');
	}
	function hideAddResources(){
			$(".custom-resources").html("");
	}
	function hideEditTask(){
			$(".editTask-div").html("");
			$(".editTask-div").css('visibility','hidden');
	}
	//for edit task

	/*$('.modal[data-color]').on('show hidden', function(e) 
	{
	$('body').toggleClass('modal-color-' + $(this).data('color'));
	});
*/
	function hideHTML(a) {
		$("#"+a).html("");
	}

$("#resAddition" ).click(function() {
    $(".custom-resources" ).append('<div class="fs-11" id="addResource" role="dialog">\
					<div class="custom-modal-set">\
					    <div class="m">\
						    <div class="">\
								<form action="<?= base_url()."taskmanagement/addResource";?>" accept-charset="utf-8" id="theForm" method="post">\
								<div class="row">\
									<button type="button" onClick="hideAddResources()" id="resClose" class="close" data-dismiss="modal">&times;</button>\
						      		<h3 class="custom-modal-title">Add Resource</h3>\
									<div class="form-group">\
										<input type="hidden" class="form-control" id="clusterId" name="clusterId" value=" <?php if(isset($_GET["id"])) echo $_GET["id"]; ?>" >\
										<input type="text" class="form-control" id="resourceTitle" name="resourceTitle" placeholder="Resource Title" required>\
										<br>\
										<input type="text" class="form-control" id="resourceLink" name="resourceLink" placeholder="Resource Link" required>\
									</div>\
								</div>\
								<button class="btn btn-success btn-slim center-block" type="submit" id="target">Add</button>\
								</form>\
						    </div>\
					    </div>\
					</div>\
				</div>');
	 $( ".custom-resources" ).css({'visibility':'visible','z-index':'9999'});
});
function ShowPreviousTask(){
	var tID = $("#gettID").val();
	editTaskPopup(tID,"<?php if(isset($_GET["id"])) echo $_GET["id"]; ?>");
}
function removeClass(){
	$('#tooltip').removeClass('none');
}
function editTask(a,b){
	$.post("<?php echo base_url();?>"+"taskmanagement/editBmTaskPopup", {taskId:a, clusterId:b}, function( response ){
			//console.log(response);
			$(".editTask-div").html(response);
			$(".editTask-div").css('visibility','visible');
		});
}
	$('#employees').change(function(){
  var id=$("#employees").val();

    $.ajax({
        type: "POST",
        url: "<?php echo site_url('taskmanagement/get_user_initials'); ?>", 
        data: {id:id},
         success :   function(data){
          var dataArray=jQuery.parseJSON(data);
          $("#init").text(dataArray.initials);
          $("#desig").text(dataArray.designation);     
          $("#projects").text(dataArray.project_title);     
        }
        });
    });

</script>
</body>
</html>
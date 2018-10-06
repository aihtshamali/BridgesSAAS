<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AJAX File upload using Codeigniter, jQuery</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function (e) {
                $('#upload').on('click', function () {
                    var file_data = $('#file').prop('files')[0];
                    var table = $('#table').val();
                    var id = $('#id').val();
                    // alert(id);
                    var form_data = new FormData();
                    form_data.append('file', file_data);
                    $.ajax({
                        url: '<?php echo base_url();?>/hr/upload_files/' +table+'-'+id, // point to server-side controller method
                        dataType: 'text', // what to expect back from the server
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (response) {
                            $('#msg').html(response); // display success response from the server
                        },
                        error: function (response) {
                            $('#msg').html(response); // display error response from the server
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <p id="msg"></p>
        <?php $id_new = $userid;?>
        <select name="table" id="table">
            <option value="Picture">Upload Picture</option>
            <option value="CV">Upload CV</option>
            <option value="CNIC">Upload Cnic</option>
            <option value="Matric">Matric</option>
            <option value="Inter">Inter</option>
            <option value="Bachlor14">Bachlor-14</option>
            <option value="Bachlor16">Bachlor-16</option>
            <option value="M.Phil">M.Phil</option>
            <option value="Post Doctorate">Post Doctorate</option>
            <option value="Offer Letter">Offer Letter</option>
            <option value="Hr Policy">Hr Policy</option>
            <option value="Job Description">Job Description</option>
            <option value="Termination">Termination</option>
            <option value="Promotion">Promotion</option>
        </select>
        <input type="file" id="file" name="file" />
        <input type="hidden" name="id" id="id" value="<?php echo $id_new;?>" >
        <button id="upload">Upload</button>
    </body>
</html>
<!-- value="<?php echo set_value('fname'); ?>" -->
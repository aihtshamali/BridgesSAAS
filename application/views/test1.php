<?php 
echo form_open('taskmanagement/index1');
$js = array(
        '1'       => 'Shirts',
        '2'       => 'Pents',
        '3'       => 'Coats',
        '4'       => 'Shoes',
);

echo form_multiselect('brand[]', $cluster1, array('2', '5'), 'id="brand"');

$data = array(
        'name'          => 'button',
        'id'            => 'button',
        'value'         => 'true',
        'type'          => 'Submit',
        'content'       => 'Submit'
);

echo form_button($data);

form_close();

?>
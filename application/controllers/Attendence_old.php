<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendence extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('view_attendence');
	}
	
	public function import()
	{	//phpinfo();
		if(isset($_POST["import"]))
		{
			$filename=$_FILES["file"]["tmp_name"];
			
			if($_FILES["file"]["size"] > 0)
			{
				// If you need to parse XLS files, include php-excel-reader
    require(APPPATH.'/third_party/spreadsheet-reader-master/php-excel-reader/excel_reader2.php');

    require(APPPATH.'/third_party/spreadsheet-reader-master/SpreadsheetReader.php');

    $Reader = new SpreadsheetReader($filename);
    foreach ($Reader as $key => $row)
    {
    	foreach($row as $k => $value){
		echo $k . ':' .$value.';';
		}
		echo '<br>';
    }
				/*$file = fopen($filename, "r");
				echo file_get_contents($filename);
				while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
				{
					print_r($emapData);echo '<br>';
				}
				
				fclose($file);*/
				
				// Load the spreadsheet reader library
				/*$this->load->library('excel_reader');
				
				// Read the spreadsheet via a relative path to the document
				// for example $this->excel_reader->read('./uploads/file.xls');
				$this->excel_reader->read($filename);
				
				// Get the contents of the first worksheet
				$worksheet = $this->excel_reader->worksheets[0];
				echo $worksheet;*/
				/*$file = $filename;//'./files/test.xlsx';
				//load the excel library
				$this->load->library('PHPExcel');
				//read file from path
				$objPHPExcel = PHPExcel_IOFactory::load($file);
				//get only the Cell Collection
				$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
				//extract to a PHP readable array format
				foreach ($cell_collection as $cell) {
					$column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
					$row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
					$data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
					//header will/should be in row 1 only. of course this can be modified to suit your need.
					if ($row == 1) {
						$header[$row][$column] = $data_value;
					} else {
						$arr_data[$row][$column] = $data_value;
					}
				}
				//send the data in an array format
				$data['header'] = $header;
				$data['values'] = $arr_data;
				print_r($data);*/
				echo 'Excel File has been successfully Imported';
				
			}
			else
				echo 'Invalid File:Please Upload Excel File';
		}

		$this->load->view('import_attendence');	
	}
}

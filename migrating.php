<?php

class Item
{
	private $code;
	private $manufacturer;
	private $product;
	private $description;
	private $url;
	private $imgurl;
	private $price_original;
	private $price_vat;
	private $vat;
	private $availability;
	private $categorytext;

	private $
		
	public function __construct($obj)
		{
			$this->code = $obj->CODE->__toString();
			$this->manufacturer = $obj->MANUFACTURER->__toString();
			$this->product = $obj->PRODUCT->__toString();
			$this->description = $obj->DESCRIPTION->__toString();
			$this->url = $obj->URL->__toString();
			$this->imgurl = $obj->IMGURL->__toString();
			$this->price_original = $obj->PRICE_ORIGINAL->__toString();
			$this->price_vat = $obj->PRICE_VAT->__toString();
			$this->vat = $obj->VAT->__toString();
			$this->availability = $obj->AVAILABILITY->__toString();
			$this->categorytext = $obj->CATEGORYTEXT->__toString();
		}

	public function print()
	{

		print_r($this);
	}
}

class Report
{
	private $_a;

	public function __construct($path)
	{
		$xml_file = file_get_contents($path);
		$xml_array = simplexml_load_string($xml_file);

		$this->_a = array();
		$size = sizeof($xml_array->SHOPITEM);

		for($i = 0 ; $i < $size ; $i++)
		{
			$this->_a[$i] = new Item($xml_array->SHOPITEM[$i]);
		}

		echo(sizeof($xml_array->SHOPITEM));
	}

	public function print($i)
	{
		$this->_a[$i]->print();
	}
}




$a = new Report($argv[1]);
$a->print(1);
#print_r($array->SHOPITEM[1]);
#print_r($a->print());

#for ($i=0; $i < 10000; $i++) { 
	#echo($i);
#}

?>

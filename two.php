<?
/**
*Physical addres.
*/
class Address{
	//Street addres.
	public $street_adress_1 = "";
	public $street_adress_2 = "";

	//Name of the City.
	public $city_name;

	//Name of the subdivison.
	public $subdivison_name;

	//Postal code.
	public $postal_code;

	//Name of the Country.
	public $country_name;

	/**
	*Display an assress in HTML.
	*@return string
	*/
	function display(){
		$output = '';

		//Street address.
		$output .= this->street_adress_1;
		if ($this->street_adress_2){
			$output .= '<br />' . $this->street_adress_2;
		}

		// City , Subdivision Postal.
		$output .= '<br />';
		$output .= $this->city_name. ', ' . $this->subdivison_name;
		$output .= ' ' . $this->postal_code;

		//Country.
		$output .= '<br />';
		$output .= $this->country_name;

		return $output;
	}

}
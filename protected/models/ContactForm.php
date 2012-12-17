<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel
{
	public $inputName;
	public $inputAddress;
	public $inputArea;
	public $inputText;
	public $inputPhone;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			array('inputName, inputAddress, inputArea, inputText, inputPhone', 'required'),
		);
	}
	
}
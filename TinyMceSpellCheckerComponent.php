<?php
App::uses('Component', 'Controller');

App::import('Vendor', 'TinymceSpellchecker', array(
	'file' => 'tm_spellchecker' . DS . 'tm_spellchecker.php'
));


class TinyMceSpellCheckerComponent extends Component {
	public $name = 'TinyMceSpellCheckerComponent';
	
	public function check() {
		$tinymceSpellCheckerConfig = array(
			"engine" => "enchant", // enchant, pspell
			                       
			// Enchant options
			"enchant_dicts_path" => APP . 'Vendor' . DS . 'tm_spellchecker' . DS . 'dicts',
		
			// PSpell options
			"pspell.mode" => "fast",
			"pspell.spelling" => "",
			"pspell.jargon" => "",
			"pspell.encoding" => ""
		);

		TinyMCE_Spellchecker_Engine::processRequest($tinymceSpellCheckerConfig);
	}
}
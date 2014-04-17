<?php
/**
 * RANDOM PARAGRAPH GENERATOR.
 */

// TODO: 最小文字数を指定できるようにする

?>

<?php

class GenerateRandom
{
	public $letters;
	public $periodLetters;
	public $separator;

	public function __construct()
	{
		$this->letters = array('×', '○', '●', '△', '▲', '□', '■');
		$this->periodLetters = array('。', '！', '？');
		$this->separator = '、';
	}

	public function word($minLength, $maxLength)
	{
		$data = "";
		for ($i = $minLength; $i < $maxLength - 1; $i++) {
			$letter = $this->letters[array_rand($this->letters, 1)];
			if (mt_rand(0, 1)) {
				$data .= $letter;
			} else {
				// nothing to do.
			}
		}
		return $data;
	}

	public function sentence($minLength, $maxLength)
	{
		$data = "";
		for ($i = $minLength; $i < $maxLength - 1; $i++) {
			$word = self::word(null, 10);
			if (mt_rand(0, 1)) {
				$data .= $word;
			} else {
				// nothing to do.
			}
			$data .= $this->separator;
		}
		$data .= $this->periodLetters[array_rand($this->periodLetters, 1)];
		return $data;
	}

}


$generator = new GenerateRandom();

for ($i = 0; $i < 20; $i++) {
	echo $generator->word(null, 20);
	echo "\n";
}

?>
<?php 
	function count_words( $text ){
		$words = 1;

		while( stripos($text, " ") ) {
			$words++;
			$text = substr($text, stripos($text, " ") + 1, strlen($text) );
		}

		return $words;

	}

	function cut_text_for_words($text, $number_words){
		$quantity_of_words = count_words($text);

		if( !($number_words > $quantity_of_words) ){
			if( $number_words == $quantity_of_words){
				return $text;
			}
			else{
				$new_cut_text = "";
				for ($i=0; $i < $number_words; $i++) { 
					$new_cut_text .= substr($text, 0, stripos($text, ' ') + 1);
					$text = substr($text, stripos($text, " ") + 1, strlen($text) );
				}
				return $new_cut_text;
			}
		}else{
			/*
				Este mensaje aparece porque
				La cantidad de palabras a cortar es mayor a la cantidad de palabras que tiene el texto
			*/
			return "Destinos inolvidables";
		}

	}
?>


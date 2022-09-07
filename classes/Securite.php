<?php
    class Securite {

		public static function chiffrer($password) {
			return "1a3".sha1($password.'gdfgd').'5131';
		}

	}
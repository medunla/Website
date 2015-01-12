<?php

class Horazart{

	// Calculate birth day in Monday - Sunday
	function CalDateWeek($d, $m, $y){
		$temp = $y . "-" . $m . "-" . $d;
    	$date = new DateTime($temp);
    	$return = $date->format('l');
    	return $return;
	}

	// Calculate Zodiac
	function CalZodiac($d, $m){
		$return = array("Capricorn", "Aquarius", "Pisces", "Aries", "Taurus", "Gemini", "Cancer", "Leo", "Virgo", "Libra", "Scorpio", "Sagittarius");

		if( ($m==12 && $d>=14) || ($m==1 && $d<=12) ){
			return $return[0];
		}
		else if( ($m==1 && $d>=13) || ($m==2 && $d<=13) ){
			return $return[1];
		}
		else if( ($m==2 && $d>=14) || ($m==3 && $d<=14) ){
			return $return[2];
		}
		else if( ($m==3 && $d>=15) || ($m==4 && $d<=14) ){
			return $return[3];
		}
		else if( ($m==4 && $d>=15) || ($m==5 && $d<=14) ){
			return $return[4];
		}
		else if( ($m==5 && $d>=15) || ($m==6 && $d<=15) ){
			return $return[5];
		}
		else if( ($m==6 && $d>=16) || ($m==7 && $d<=16) ){
			return $return[6];
		}
		else if( ($m==7 && $d>=17) || ($m==8 && $d<=15) ){
			return $return[7];
		}
		else if( ($m==8 && $d>=16) || ($m==9 && $d<=16) ){
			return $return[8];
		}
		else if( ($m==9 && $d>=17) || ($m==10 && $d<=15) ){
			return $return[9];
		}
		else if( ($m==10 && $d>=16) || ($m==11 && $d<=15) ){
			return $return[10];
		}
		else if( ($m==11 && $d>=16) || ($m==12 && $d<=13) ){
			return $return[11];
		}
	}

	// Calculate Naksat
	function CalNaksat($y){
		$return = array("Rat", "Ox", "Tiger", "Rabbit", "Great snake", "Small snake", "Horse", "Goat", "Monkey", "Cock", "Dog", "Pig");
		$yearDefault = 1936; //<--- 2479
		$year = $y - $yearDefault;

		for($i=0; $i<12; $i++){
			if($year%12 == $i){
				return $return[$i];
			}
		}
	}

	// Calculate India style
	function CalIndia($d, $m){
		$return = array("Aswini", "Poranee", "Krittika", "Rohini", "Maruksrin", "Aartra", "Punapsu", "Pusaya", "Aaselesa", "Makha", "Buropponcuni", "Autrponcuni", "Hattha", "Chitra", "Swati", "Visakha", "Anuradhapura", "Chettha", "Tamula", "Burphasalha", "Auttrasalha", "Srwna", "Tnitha", "Stpisach", "Burppatrbt", "Auttrpatrbt", "Rewadee");

		if( ($m==4 && $d>=14) && ($m==4 && $d<=27) ){
			return $return[0];
		}
		else if( ($m==4 && $d>=28) || ($m==5 && $d<=11) ){
			return $return[1];
		}
		else if( ($m==5 && $d>=12) && ($m==5 && $d<=25) ){
			return $return[2];
		}
		else if( ($m==5 && $d>=26) || ($m==6 && $d<=8) ){
			return $return[3];
		}
		else if( ($m==6 && $d>=9) && ($m==6 && $d<=21) ){
			return $return[4];
		}
		else if( ($m==6 && $d>=22) || ($m==7 && $d<=5) ){
			return $return[5];
		}
		else if( ($m==7 && $d>=6) && ($m==7 && $d<=19) ){
			return $return[6];
		}
		else if( ($m==7 && $d>=20) || ($m==8 && $d<=2) ){
			return $return[7];
		}
		else if( ($m==8 && $d>=3) && ($m==8 && $d<=16) ){
			return $return[8];
		}
		else if( ($m==8 && $d>=17) && ($m==8 && $d<=30) ){
			return $return[9];
		}
		else if( ($m==8 && $d>=31) || ($m==9 && $d<=13) ){
			return $return[10];
		}
		else if( ($m==9 && $d>=14) && ($m==9 && $d<=26) ){
			return $return[11];
		}
		else if( ($m==9 && $d>=27) || ($m==10 && $d<=10) ){
			return $return[12];
		}
		else if( ($m==10 && $d>=11) && ($m==10 && $d<=23) ){
			return $return[13];
		}
		else if( ($m==10 && $d>=24) || ($m==11 && $d<=6) ){
			return $return[14];
		}
		else if( ($m==11 && $d>=7) && ($m==11 && $d<=19) ){
			return $return[15];
		}
		else if( ($m==11 && $d>=20) || ($m==12 && $d<=2) ){
			return $return[16];
		}
		else if( ($m==12 && $d>=3) && ($m==12 && $d<=15) ){
			return $return[17];
		}
		else if( ($m==12 && $d>=16) && ($m==12 && $d<=28) ){
			return $return[18];
		}
		else if( ($m==12 && $d>=29) || ($m==1 && $d<=11) ){
			return $return[19];
		}
		else if( ($m==1 && $d>=12) && ($m==1 && $d<=24) ){
			return $return[20];
		}
		else if( ($m==1 && $d>=25) || ($m==2 && $d<=6) ){
			return $return[21];
		}
		else if( ($m==2 && $d>=7) && ($m==2 && $d<=19) ){
			return $return[22];
		}
		else if( ($m==2 && $d>=20) || ($m==3 && $d<=4) ){
			return $return[23];
		}
		else if( ($m==3 && $d>=5) && ($m==3 && $d<=17) ){
			return $return[24];
		}
		else if( ($m==3 && $d>=18) && ($m==3 && $d<=31) ){
			return $return[25];
		}
		else if( ($m==4 && $d>=1) && ($m==4 && $d<=13) ){
			return $return[26];
		}
		
	}

	// Calculate Egypt style
	function CalEgypt($d, $m){
		$return = array("The Nile", "Amon-Ra", "Mut", "Geb", "Osiris", "Isis", "Thoth", "Horus", "Anubis", "Seth", "Bastet", "Sekhmet");

		// The Nile
		if( ($m==1 && $d>=1) && ($m==1 && $d<=7) ){
			return $return[0];
		}
		else if( ($m==6 && $d>=19) && ($m==6 && $d<=28) ){
			return $return[0];
		}
		else if( ($m==9 && $d>=1) && ($m==9 && $d<=7) ){
			return $return[0];
		}
		else if( ($m==11 && $d>=18) && ($m==11 && $d<=26) ){
			return $return[0];
		}

		// Amon-Ra
		else if( ($m==1 && $d>=8) && ($m==1 && $d<=21) ){
			return $return[1];
		}
		else if( ($m==2 && $d>=1) && ($m==2 && $d<=11) ){
			return $return[1];
		}

		// Mut
		else if( ($m==1 && $d>=22) && ($m==1 && $d<=31) ){
			return $return[2];
		}
		else if( ($m==9 && $d>=8) && ($m==9 && $d<=22) ){
			return $return[2];
		}

		// Geb
		else if( ($m==2 && $d>=12) && ($m==2 && $d<=29) ){
			return $return[3];
		}
		else if( ($m==8 && $d>=20) && ($m==8 && $d<=31) ){
			return $return[3];
		}

		// Osiris
		else if( ($m==3 && $d>=1) && ($m==3 && $d<=10) ){
			return $return[4];
		}
		else if( ($m==11 && $d>=27) || ($m==12 && $d<=18) ){
			return $return[4];
		}

		// Isis
		else if( ($m==3 && $d>=11) && ($m==3 && $d<=31) ){
			return $return[5];
		}
		else if( ($m==10 && $d>=18) && ($m==10 && $d<=29) ){
			return $return[5];
		}
		else if( ($m==12 && $d>=19) && ($m==12 && $d<=31) ){
			return $return[5];
		}

		// Thoth
		else if( ($m==4 && $d>=1) && ($m==4 && $d<=19) ){
			return $return[6];
		}
		else if( ($m==11 && $d>=8) && ($m==11 && $d<=17) ){
			return $return[6];
		}

		// Horus
		else if( ($m==4 && $d>=20) || ($m==5 && $d<=7) ){
			return $return[7];
		}
		else if( ($m==8 && $d>=12) && ($m==8 && $d<=19) ){
			return $return[7];
		}

		// Anubis
		else if( ($m==5 && $d>=8) && ($m==5 && $d<=27) ){
			return $return[8];
		}
		else if( ($m==6 && $d>=29) || ($m==7 && $d<=13) ){
			return $return[8];
		}

		// Seth
		else if( ($m==5 && $d>=28) || ($m==6 && $d<=18) ){
			return $return[9];
		}
		else if( ($m==9 && $d>=28) || ($m==10 && $d<=2) ){
			return $return[9];
		}

		// Bastet
		else if( ($m==7 && $d>=14) && ($m==7 && $d<=28) ){
			return $return[10];
		}
		else if( ($m==9 && $d>=23) && ($m==9 && $d<=27) ){
			return $return[10];
		}
		else if( ($m==10 && $d>=3) && ($m==10 && $d<=17) ){
			return $return[10];
		}

		// Sekhmet
		else if( ($m==7 && $d>=29) || ($m==8 && $d<=11) ){
			return $return[11];
		}
		else if( ($m==10 && $d>=30) || ($m==11 && $d<=7) ){
			return $return[11];
		}
		
	}


	//----------------------------------------------------------------------------------------
	// Calculate time birth
	function CalTimeBirth($timeString){
		$time = floatval($timeString);
		$timeHour = intval($time);
		$timeMin = $time - $timeHour;

		$return = array("Error", "05.00 - 06.59", "07.00 - 08.59", "09.00 - 10.59", "11.00 - 12.59", "13.00 - 14.59", "15.00 - 16.59", "17.00 - 18.59", "19.00 - 20.59", "21.00 - 22.59", "23.00 - 00.59", "01.00 - 02.59", "03.00 - 04.59");

		// Check error input time
		if($timeHour>24 || $timeMin>0.59){
			return $return[0];
		}
		else if($timeHour==24 && $timeMin>0){
			return $return[0];
		}

		// Not error
		if($time>=5 && $time<7){
			return $return[1];
		}
		else if($time>=7 && $time<9){
			return $return[2];
		}
		else if($time>=9 && $time<11){
			return $return[3];
		}
		else if($time>=11 && $time<13){
			return $return[4];
		}
		else if($time>=13 && $time<15){
			return $return[5];
		}
		else if($time>=15 && $time<17){
			return $return[6];
		}
		else if($time>=17 && $time<19){
			return $return[7];
		}
		else if($time>=19 && $time<21){
			return $return[8];
		}
		else if($time>=21 && $time<23){
			return $return[9];
		}
		else if($time>=23 && $time<=24){
			return $return[10];
		}
		else if($time>=0 && $time<1){
			return $return[10];
		}
		else if($time>=1 && $time<3){
			return $return[11];
		}
		else if($time>=3 && $time<5){
			return $return[12];
		}
	}

	// Calculate Name
	function CalName($nameInput){
		$name = strtoupper($nameInput);
		$nameLast = substr($name, -1);

		return $nameLast;
	}

	// Calculate number phone
	function CalPhone($phoneInput){
		$phone7 = (intval($phoneInput)%10000000);
		$phoneString = strval($phone7);
		$phone2 = 0;
		$phone1 = 0;

		// Step 1
		for($i=0; $i<7; $i++){
			$phone2 += $phoneString[$i];
		}
		$phone1 = $phone2;
		
		// Step 2
		if($phone2 > 9){			
			$phoneString = strval($phone2);
			$phone1 = 0;
			for($i=0; $i<2; $i++){
				$phone1 += $phoneString[$i];
			}
		}

		// Step 3, if step 2 not succese
		if($phone1 > 9){
			$phoneString = strval($phone1);
			$phone1 = 0;
			for($i=0; $i<2; $i++){
				$phone1 += $phoneString[$i];
			}
		}

		return $phone1;
	}

	// Calculate First character of email
	function CalEmail($EmailInput){
		$Email = strtoupper($EmailInput);
		$EmailFirst = $Email[0];

		return $EmailFirst;
	}

	// Calculate Fear
	function CalFear($Fear){
		return $Fear;
	}



	//----------------------------------------------------------------------------------------
	//------------------------------------ Output information --------------------------------
	//----------------------------------------------------------------------------------------

	// Read information
	function ReadData($TypeDate, $Data){
		$dir = "information/" . $TypeDate . "/" . $Data . ".txt";
		$count = 0;
		// Open file
		$file = file($dir);
		// Read file		
		foreach($file as $text){
			if($count == 0){
				$count++;
			}
		    else {
		    	echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $text . "<br/>";
		    }
		}
	}
	// Read information
	function HeadData($TypeDate, $Data){
		$dir = "information/" . $TypeDate . "/" . $Data . ".txt";
		$count = 0;
		// Open file
		$file = file($dir);
		// Read file		
		foreach($file as $text){
			if($count == 0){
				echo $text;
				$count++;
			}

		}
	}



}// End class Horazart

class ConvertTimeBirth{
	function Convert($timeString){
		$birthTemp = explode("/", $timeString);
		$birth = array(0, 1, 2);
		$birth[1] = intval($birthTemp[0]);
		$birth[0] = intval($birthTemp[1]);
		$birth[2] = intval($birthTemp[2]);
		return $birth;
	}
}

class GetFb{
	function GetPicture($id){
		$a = "http://graph.facebook.com/" . $id . "/picture?height=160&type=normal&width=160";
		return $a;
	}
}

?>
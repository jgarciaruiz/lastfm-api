	<?php
		$api_key = "xxx";
		$username = "myemptywords";
		$albums = "http://ws.audioscrobbler.com/2.0/?method=user.gettopartists&user=$username&api_key=$api_key&format=json";

		$json = file_get_contents($albums);
		$data = json_decode($json, TRUE);

		topArtist(10);

		function topArtist($top){
			global $data;
			$id = 1;
			foreach ($data['topartists']['artist'] as $band){
	    		echo $id++.". Band: <img src='".$band['image'][3]['#text']."'/>". $band['name'] . ". Played ". $band['playcount'] ." times.<br>";
				if (($id-1) == $top){
					break;
				}
			};
		}

	
	?>
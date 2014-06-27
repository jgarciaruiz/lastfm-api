	<script>
		var api_key = "xxx";
		username = "myemptywords",
		albums = "http://ws.audioscrobbler.com/2.0/?method=user.getTopArtists&user="+username+"&api_key="+api_key+"&format=json&callback=?";

		topArtist(10);

		function topArtist(top){
		    $.getJSON(albums, function(data) {
		        var content = "",
		        	id = 1;
		        $.each(data.topartists.artist, function(i, band) {
		            content += "<p>"+(id)+". Band: <img src='" + band.image[3]["#text"]+"'/>" + band.name + ". Played " + band.playcount + " times.</p>";
		        	id++;
		        	if ((id-1) == top){
		        		return false;
		        	}
		        });
		        $("#data-wr").append(content);
			});
		};
	</script>
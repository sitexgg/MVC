
<?php 


echo "Home Edition <hr>";

echo "<a href=\"http://mvc/contact/\">Contact</a>";

foreach($news as $value) {
	echo '<h4>'. $value['title'] .'</h4>';
	echo '<p>'. $value['description'] .'</p><hr>';
}




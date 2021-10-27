<?php
$con=mysqli_connect("localhost","root","","url_shortener");
$link=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=== 'on'? "https" : "http"). "://" .$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
// echo "$link";
$array_link=explode("a.php?", $link);
//echo "0:".$array_link['0'];
$req_exten=$array_link['1'];
$qry_ex=mysqli_query($con, "select orig_url from short_url_data where unique_exten='$req_exten'");
$res=mysqli_fetch_assoc($qry_ex);
?>
<script>
	var js_url= <?php echo json_encode($res['orig_url']); ?>;
	window.open(js_url);
</script>
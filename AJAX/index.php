<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat halaman web ajax tanpa reload</title>
    <!--Menghubungkan css-->
    <link rel="stylesheet"  href="style.css">

</head>
<body>
    <div class="content">
        <header>
            <h2 class="deskripsi">Membuat halaman ajax tanpa reload jquary</h2>
        </header>

        <div class="menu">
                <ul>
                    <li><a class="klik_menu" id="home"> home </a></li>
                    <li><a class="klik_menu" id="tentang"> tentang </a></li>
                    <li><a class="klik_menu" id="tutorial"> tutorial </a></li>
                    <li><a class="klik_menu" id="contact"> contact </a></li>
                </ul>
        </div>

        <div class="badan">

        </div>
    </div>
<script type="text/javascript" src="js/jquery-3.6.3.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.klik_menu').click(function(){
			var menu = $(this).attr('id');
			if(menu == "home"){
				$('.badan').load('home.php');						
			}else if(menu == "tentang"){
				$('.badan').load('tentang.php');						
			}else if(menu == "tutorial"){
				$('.badan').load('tutorial.php');						
			}else if(menu == "contact"){
				$('.badan').load('contact.php');						
			}
		});
 
 
		// halaman yang di load default pertama kali
		$('.badan').load('home.php');						
 
	});
</script>
</body>
</html>
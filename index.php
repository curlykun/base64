<form action="index.php" method="post">
    <label>user name :
        <select name="username" id="">
            <option value=""> - </option>
            <option value="aji.maulana">aji.maulana</option>
            <option value="tania.anindita">tania.anindita</option>
            <option value="triastanto">triastanto</option>
            <option value="himawan.sutanto">himawan.sutanto</option>
        </select>
    <label>nik :
        <select name="nik" id="">
            <option value=""> - </option>
            <option value="10843">aji.maulana (10843)</option>
            <option value="11729">tania.anindita (11729)</option>
            <option value="11725">triastanto (11725)</option>
            <option value="11801">himawan.sutanto (11801)</option>
        </select>
    <input type="submit" name="" value="Kirim">
</form>

<?php

// $str = 'aji.maulana|10843|2017-11-16|09:34:10|employee';
if(isset($_POST['username']) && isset($_POST['nik']) ){
	$str = $_POST['username'].'|'.$_POST['nik'].'|2017-11-16|09:34:10|employee';
	echo '<a href="http://smks.krakatausteel.com/indexsso.php?ss='.base64_encode($str).'" >Masuk</a>';
}
?>
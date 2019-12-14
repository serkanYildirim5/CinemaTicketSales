<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
<?php
$seans_Saati = 0;
$seans = array('Seçiniz', '10:00-12:00', '12:00-14:00', '14:00-16:00', '16:00-18:00', '18:00-20:00', '20:00-22:00', '22:00-24:00');
$bilet_fiyat=0;
?>
<center><h1>Sinema Bilet Satış</h1>
<form action="" method="post" class="col-md-4">
    <table class="table">
        <tr>
            <td>Adınız</td>          
            <td><input type="text" class="form-control" name="ad" maxlength="70" value=""></td>
        </tr>
        <tr>
            <td>Kullanıcı Türü</td>
            <td>
                <label><input type="radio" name="tur" value="calisan" >
                  Çalışan </label>
                <label><input type="radio" name="tur" value="ogrenci" >
                   Ogrenci </label>
					<label><input type="radio" name="tur" value="normal" >
                    Normal </label>
            </td>
        </tr>
		<tr>
		<td>Film Seçiniz</td><td><table>
		 <tr><td><center><img src="indir.jpg"/></center></td><td><center><img src="asa.jpg" /></center></td></tr>
		 <tr><td><center><b>YOL ARKADAŞIM 2(30TL)</b><input type="radio" name="film"  value="YOL ARKADAŞIM 2"></center></td>
		 <td><center><b>VENOM(35TL)</b><input type="radio" name="film"  value="VENOM"></center></td></tr>
		</table>
		</td>
		</tr>
        <tr>
            <td>Seans Saati</td>
            <td>
                <select name="seans_Saati">
                     <?php
                    for ($i = 0; $i < 8; $i++) {
                        if ($seans_Saati == $i) 
                            echo "<option value='$i' selected>" . $seans[$i] . "</option>";
                        else 
                            echo "<option value='$i'>" . $seans[$i] . "</option>";
                    }
                    ?>					  
                </select>
            </td>
        </tr>
        <tr>
            <td>Koltuk Numarası</td>
            <td>
                <select name="K_no" class="form-control">
                    <option value='0'></option>
					<?php
                    for ($i = 0; $i <=29; $i++) {
                        echo "<option value='$i'>" . ($i+1) . "</option>";
                    }
                    ?>
                </select>

            </td>
        </tr>
        <tr>
            <td>Tarih</td>
            <td>          
               <input type="date" name="tarih">
            </td>
        </tr>
<tr><td><center><b>PROMOSYON</b></center>
</td>
</tr>
<tr><td><center>3 SAYI TAHMİN OYUNU(0-9)</center></td></tr>
<tr><td>1.Sayı tahmini yazınız:</td><td> <input type="number" name="sayi1" maxlength="1"></td></tr>
<tr><td>2.Sayı tahmini yazınız:</td><td> <input type="number" name="sayi2" maxlength="1"></td></tr>
<tr><td>3.Sayı tahmini yazınız:</td><td> <input type="number" name="sayi3" maxlength="1"></td>
</tr>
        <tr>
            <td></td>
            <td><input type="submit" name="gonder" value="Gönder" class="btn btn-primary"></td>
        </tr>
    </table>
</form></center>
<div class="col-md-12">
    <?php 
    if ($_POST) {	
		if($_POST['film']=="YOL ARKADAŞIM 2"){
			$bilet_fiyat=30;
		}
		else if($_POST['film']=="VENOM"){
			$bilet_fiyat=35;
		}
		echo "<center><b>".date("Y-m-d H:i:s")." tarihinde biletinizi aldınız.</b></center>";
        echo str_replace("serkan",$_POST['ad'],"<center><b>Adınız: serkan</b></center>");
		echo "<center><b>Film:".$_POST['film']."</center></b>";
		echo"<center><b>Koltuk Numaranız:".($_POST['K_no']+1)."</center></b>";
		echo "<center><b>Biletinizin Tarihi:".$_POST['tarih']." ".$seans[$_POST['seans_Saati']]."</b></center>";
		if($_POST['seans_Saati']>=3 && $_POST['seans_Saati']<=7){
				$bilet_fiyat=$bilet_fiyat+2;
         echo "<center><b>Geç seans saatlerini seçtiğiniz için 2 lira zamlıdır.</b></center><br>";
		}
		else{
			$bilet_fiyat=$bilet_fiyat-2;
			echo "<center><b>Erken seans saatlerini seçtiğiniz için 2 lira indirimlidir.</b></center><br>";
		}
		$sans=0;
		for($i=1;$i<=3;$i++){
		if($_POST['sayi'.$i]==rand(0,9))
		{ 
			$sans++;
		}
		}		
		if($sans==1){
			$sans1=15*($bilet_fiyat/100);
			$bilet_fiyat=$bilet_fiyat-$sans1;
			echo "<center><b>1 sayi tahminiz tuttu.Bilet fiyatında %15 indirim olmuştur.</b></center><br>";
		}
		else if($sans==2){
			$sans1=25*($bilet_fiyat/100);
			$bilet_fiyat=$bilet_fiyat-$sans1;
			echo "<center><b>2 sayi tahminiz tuttu.Bilet fiyatında %25 indirim olmuştur.</b></center><br>";
		}
		else if($sans==3){
			$sans1=50*($bilet_fiyat/100);
			$bilet_fiyat=$bilet_fiyat-$sans1;
			echo "<center><b>3 sayi tahminiz tuttu.Bilet fiyatında %50 indirim olmuştur.</b></center><br>";
		}
		else{
			echo "<center><b>3 sayiyida bilemediniz.İndirim olmayacaktır.</b></center>";
		}
		echo "<center><b>Bilet fiyatınız:".$bilet_fiyat." TL </b></center>";			
    }
    ?>
</div>
</body>
</html>
</html>
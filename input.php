<!DOCTYPE html> 
<html> 
<head> 
 <meta charset="UTF-8"> 
 <title>Simpan Data</title> 
</head> 
<body> 
 <form action="hasil.php" method="post"> 
 <table> 
 <tr> 
 <td>Wilayah : </td> 
 <td><select name="wilayah" id=""> 
 <option value="Jakarta">DKI Jakarta</option> 
 <option value="Jawa Barat">Jawa Barat</option>
 <option value="Banten">Banten</option> 
 <option value="Jawa Tengah">Jawa Tengah</option> 
 </select></td> 
 </tr> 
 <tr> 
 <td>Jumlah Positif : </td> 
 <td><input type="text" name="positif"></td> 
 </tr> 
 <tr> 
 <td>Jumlah Dirawat : </td> 
 <td><input type="text" name="rawat"></td> 
 </tr> 
 <tr> 
 <td>Jumlah Sembuh : </td> 
 <td><input type="text" name="sembuh"></td> 
 </tr> 
 <tr> 
 <td>Jumlah Meninggal : </td> 
 <td><input type="text" name="die"></td> 
 </tr> 
 <tr> 
 <td>Nama Operator : </td> 
 <td><input type="text" name="operator"></td> 
 </tr> 
 <tr> 
 <td>NIM Mahasiswa : </td> 
 <td><input type="text" name="nim"></td> 
 </tr> 
<tr> 
 <td><button type="submit" name="OK">Simpan</button></td> 
 </tr> 
 </form> 
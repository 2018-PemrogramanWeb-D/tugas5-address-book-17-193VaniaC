<!DOCTYPE html PUBLIC >
<html lan="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Address Book</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
        $("#tambah").hide();
        $("#tambahbttn").click(function(){
            $("#tambah").animate({
            height: 'toggle'
            });
        });
    });
    
</script>

<style >
    body {background-image: url(http://thinkfresh.com.sg/wp-content/uploads/2016/01/mandarinorange1.jpg);
          background-position: center;
          background-repeat: no-repeat;
          color: white;}
    h1 {color: white; font-family: fantasy;}
    .Add {width: 100px;
          background: rgba(242, 230, 255, 0.6);
    }
    .square{width: 800px;
          background: rgba(242, 230, 255, 0.6);
          margin: 2px auto;}
    .minisquare{width: 400px;
        background: rgba(242, 230, 255, 0.6);
        margin: 2px auto;
        text-align: center;}


</style>

</head>
<body>
<center><h1 class="square">Address Book</h1></center>

   <!--  <div>
        <form method="post" action="searchidandname.php">
        <input type="text" name="txtsearch" placeholder="Type to Search" /><input type="submit" name="cmdsearch" value="Search" />
    </form>
    </div> -->


<div class="minisquare">
<button id="tambahbttn">Add</button>
    <table>
            <form method="post" id="tambah" action="">
                <tr>            
                <?php
                    mysql_connect("localhost","root","") or die (mysql_error());
                    mysql_select_db ("address_book");
                    $g = mysql_query("select max(No) from daftar");
                    while($No=mysql_fetch_array($g))
                    {
                ?>
                <th>No:</th>
                    <td><input type="text" name="No" value="<?php echo $No[0]+1; ?>" readonly="readonly" /></td>
                </tr>
                <?php
                    }
                ?>
                <tr>
                    <th>Nama:   </th>
                    <td><input type="text" name="Nama" placeholder="Nama anda"  /></td>
                </tr>
                <tr>
                    <th>No. Telp:</th>
                    <td><input type="text" name="Notelp" placeholder="No. telp anda"  /></td>
                </tr>
                <tr>
                    <th>Alamat:</th>
                    <td><textarea cols="25px" rows="4" name="Alamat" placeholder="Alamat"  /></textarea></td>
                </tr>
                 <tr>
                    <th>Catatan:</th>
                    <td><textarea cols="25px" rows="4" name="Catatan" placeholder="Catatan" /></textarea></td>
                </tr>
                <tr>
                   <td><input type="submit" name="cmdreset" value="Add"/></td>
                </tr>
            </form>
        </table>
</div>
<div class="square">
    
    <table>
        <tr>
            <th>No.         </th>
            <th>Nama        </th>
            <th>No. Telp    </th>
            <th>Alamat      </th>
            <th>Catatan     </th>
            <th>Pilihan     </th>
        </tr>
        <?php
            mysql_connect("localhost","root","") or die (mysql_error());
            mysql_select_db ("address_book");
            $select = "select * from daftar";
            $mysql = mysql_query($select);
            while($baris=mysql_fetch_array($mysql))
            {
        ?>
        <tr>
            <td><?php echo $baris[0]; ?></td>
            <td><?php echo $baris[1]; ?></td>
            <td><?php echo $baris[2]; ?></td>
            <td><?php echo $baris[3]; ?></td>
            <td><?php echo $baris[4]; ?></td>
            <td><?php echo $baris[5]; ?></td>
            <td align="center">
                <a href="Delete.php? No=<?php echo $baris[0];?>">Delete</a><br>
                <a href="Edit.php? No=<?php echo $baris[0];?>">Edit</a> </td>    
        </tr>
        <?php
            }
        ?>
        
    </table>

</div>
</body>
</html>
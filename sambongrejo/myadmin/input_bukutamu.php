<?php
include "mysqli_koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script language="JavaScript">  
function batal(){
 		document.location='index.php?page=berita';  
}		
</script>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Input Berita</li>						  	
					</ol>
				</div>
			</div>
                    <form id="contact-form" method="POST" action="isi_bukutamu.php">
                        <table cellpadding="3" cellspacing="0" border="0" width="90%">

                            <tr>
                                <td width="200">Nama</td>
                                <td>: <input type="text" name="nama" size="30"></td>
                            <tr>
                                <td>Email Address</td>
                                <td>: <input type="email" name='email' size="30"/></td>
                            </tr>
                            <tr>
                                <td>Situs</td>
                                <td>: <input type="text" name="situs" size="30"></td>
                                </td>
                            </tr>
                            <tr>
                                <td>Pesan</td>
                                <td>: <textarea name="message" id="message" rows="6" cols="40"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;&nbsp;<input type="submit" name="submit" value="Input Buku Tamu">&nbsp;
                                    <input type="button" name="Cancel" value="Cancel" onClick="batal()">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

        </div>

    </div>
</body>

</html>
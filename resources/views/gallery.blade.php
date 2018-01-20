
@extends('layouts.1')
@section('konten')

<!DOCTYPE html>
<html>
<head>
    <title>tugas</title>
</head>
<body>
<h1><center>GALLERY </center></h1>
<?php
$a=glob("saya.jpg");
$b=glob("laela.jpg");
$c=glob("insyallah.jpg");
$d=glob("islam.jpg");

for($i=0;$i<count($a);$i++)
for($i=0;$i<count($b);$i++)
for($i=0;$i<count($c);$i++)
for($i=0;$i<count($d);$i++)



{
    $rr = $a[$i];
    $single_image = $b[$i];
    $a = $c[$i];
    $b= $d[$i];
        ?>
    <img src="<?php echo $rr;?>" width="350" heigth="150"/?>
    <img src="<?php echo $single_image;?>" width="350" heigth="150"/?>
    <img src="<?php echo $a;?>" width="350" heigth="150"/?>
    <img src="<?php echo $b;?>" width="350" heigth="150"/?>
 

    <?php
}
?>

</body>
</html>

@endsection                                         
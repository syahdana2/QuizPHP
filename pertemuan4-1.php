<!-- addclashses -->
<?php 
$str = addcslashes("Hello World!","o");
echo "<hr>" . $str;
?>

<!-- addslashes -->
<?php 
$str = addcslashes("Hello World!","o");
echo "<hr>" . $str; 
?>

<!-- bin2hex() -->
<?php
$str = bin2hex("Hello World!");
echo "<hr>" . $str;
?>

<!-- chop() -->
<?php
$str = bin2hex("Hello World!");
echo "<hr>" . $str;
?>

<!-- chr() -->
<?php
echo "<hr>";
echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value
?>

<!-- chunk_split() -->
<?php
$str = "Hello world!";
echo "<hr>" .chunk_split($str,1,".");
?>

<!--  -->
<?php
// error karena php versi 7 keatas tidak dapat medeteksi abjad
// $str = "Hello world! وّه";
// echo $str . "<br>";
// echo convert_cyr_string($str,'w','a'); 
?> 

<?php
$str = ",2&5L;&\@=V]R;&0A `";
echo "<hr>". convert_uudecode($str);
?>

<?php
$str = "Hello world!";
echo "<hr>" .convert_uuencode($str);
?>

<?php
$str = "Hello World!";
echo "<hr>" .count_chars($str,3);
?>

<!-- crc32() -->
<?php
$str = crc32("Hello World!");
printf("<hr> %u\n",$str);
?>

<!-- crypt() -->
<?php
// 2 character salt
if (CRYPT_STD_DES == 1)
{
echo "Standard DES: ".crypt('something','st')."\n<br>";
}
else
{
echo "Standard DES not supported.\n<br>";
}

// 4 character salt
if (CRYPT_EXT_DES == 1)
{
echo "Extended DES: ".crypt('something','_S4..some')."\n<br>";
}
else
{
echo "Extended DES not supported.\n<br>";
}

// 12 character salt starting with $1$
if (CRYPT_MD5 == 1)
{
echo "MD5: ".crypt('something','$1$somethin$')."\n<br>";
}
else
{
echo "MD5 not supported.\n<br>";
}

// Salt starting with $2a$. The two digit cost parameter: 09. 22 characters
if (CRYPT_BLOWFISH == 1)
{
echo "Blowfish: ".crypt('something','$2a$09$anexamplestringforsalt$')."\n<br>";
}
else
{
echo "Blowfish DES not supported.\n<br>";
}

// 16 character salt starting with $5$. The default number of rounds is 5000.
if (CRYPT_SHA256 == 1)
{
echo "SHA-256: ".crypt('something','$5$rounds=5000$anexamplestringforsalt$')."\n<br>"; }
else
{
echo "SHA-256 not supported.\n<br>";
}

// 16 character salt starting with $6$. The default number of rounds is 5000.
if (CRYPT_SHA512 == 1)
{
echo "SHA-512: ".crypt('something','$6$rounds=5000$anexamplestringforsalt$');
}
else
{
echo "SHA-512 not supported.";
}
?>

<!-- explode() -->
<?php
$str = "Hello world. It's a beautiful day.";
echo "<hr>";
print_r (explode(" ",$str));
?>

<!-- fprintf() -->
<?php
$number = 9;
$str = "Beijing";
$file = fopen("test.txt","w");
echo "<hr>";
echo fprintf($file,"There are %u million bicycles in %s.",$number,$str);
?>

<!-- get html translation table() -->
<?php
echo "<hr>";
print_r (get_html_translation_table()); // HTML_SPECIALCHARS is default.
?>

<!-- hebrev() -->
<?php
echo "<hr>";
echo hebrev("á çùåï äúùñâ");
?>

<!-- hebrevc() -->
<?php
// echo "<hr>";
// echo hebrevc("� ���� �����\n� ���� �����");
?>






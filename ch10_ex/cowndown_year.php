$now = new DataTime();
$new_year = new DateTime('next year Ja1st');
$span = $now->diff($nea_year);
$md_left = $span->format('%months,%d days');
$hms_left = $span->format('%h:%I:%S');
if($now->format('MD')=='0101'){
    echo 'Happy New Year!';
}else if($now->format('MD') == '1231'){
    echo "$hms_leftremaining to the New Year.";
}else {
    echo "$md_left, and $hms_left remainning to theNew Year.";
}
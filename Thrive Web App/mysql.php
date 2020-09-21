<?php
// mysql.php
function mysql_safe_string($value) {
    $value = trim($value);
    if(empty($value))           return 'NULL';
    elseif(is_numeric($value))  return $value;
    else                        return "'".mysql_real_escape_string($value)."'";
}
function mysql_safe_query($query) {
    $args = array_slice(func_get_args(),1);
    $args = array_map('mysql_safe_string',$args);
    return mysql_query(vsprintf($query,$args));
}
function redirect($uri)
{
    if (!headers_sent())
    {    
        header('Location: '.$uri);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$uri.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$uri.'" />';
        echo '</noscript>'; exit;
    }
}
@mysql_connect('localhost','dcampbell42','43drl14p526ks2yw');
@mysql_select_db('dcampbell42');

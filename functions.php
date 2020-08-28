<?php
function currentYear(){
    return date('Y');
}

remove_filter('term_description','wpautop');
?>
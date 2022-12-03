<?php
// settings
$wan_ip_source = "http://ipecho.net/plain";
$domainList = dirname(__DIR__)."/sidePanel/domains.txt";
$shouldPing = false;

?>


<style>

.domain_name{
    font-size:16px;
}
.domain_block{
    display:flex;
    flex-direction:column;
    text-align:left;
}
.domain_ping{
    font-size:16px;
}

</style>

<div class="domain_check widget" style='width:100%;margin:10px 0px 0px 0px'; id=<?=$wid?>>
<div class="domain_check_wrapper" style=padding:10px;>

<?php
$domains = explode("\n",file_get_contents($domainList));


echo "<h3>domain checker</h3>";
echo "<div class=\"domains\">";

foreach ($domains as $key => $domain){
    if ($domain == "self"){
        $domain_ip = file_get_contents($wan_ip_source);
        
    }else{
        $domain_ip = gethostbyname($domain);
    }
    echo "<div class=\"domain_block \">";
    echo 
    "<span class=\"domain_name\">$domain</span>
    <span class=\"domain_addr\">$domain_ip";
    if($shouldPing){echo "<span class=\"domain_ping\">".Os::getPing($domain_ip)."</span>";}
    echo "</span>";
    echo "</div>";
}


echo "</div>"


?>

</div>
</div>

<?php
$region = geoip_country_name_by_name('62.244.174.221');
//$region = geoip_region_by_name('62.244.174.221');
if ($region) {
    print_r($region);
}
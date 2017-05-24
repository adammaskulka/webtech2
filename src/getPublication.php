<?php


//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
$postdata = file_get_contents("php://input");
if (isset($postdata) && !empty($postdata)) {
    $request = json_decode($postdata);
    $aisLogin = $request->aisLogin;
    $year = $request->year;

    $ldap = ldap_connect("ldap.stuba.sk");
    $dn = 'ou=People, DC=stuba, DC=sk';
    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);

    $sr = ldap_search($ldap, $dn, "uid=$aisLogin");
    $entry = ldap_first_entry($ldap, $sr);
    $usrId = ldap_get_values($ldap, $entry, "uisid")[0];

    if ($usrId == null) {
        echo null;
    } else {
        $tableRows = array();
        $ch = curl_init('http://is.stuba.sk/lide/clovek.pl');

        $data = array(
            'lang' => 'sk',
            'zalozka' => '5',
            'rok' => $year,
            'id' => $usrId
        );

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $result = curl_exec($ch);
        curl_close($ch);

        $doc = new DOMDocument();
        $doc->loadHTML($result);

        $response = element_to_obj($doc->documentElement);

        echo json_encode($response);
    }
}

function element_to_obj($element) {
    $obj = array( "tag" => $element->tagName );
    foreach ($element->attributes as $attribute) {
        $obj[$attribute->name] = $attribute->value;
    }
    foreach ($element->childNodes as $subElement) {
        if ($subElement->nodeType == XML_TEXT_NODE) {
            $obj["html"] = $subElement->wholeText;
        }
        else {
            $obj["children"][] = element_to_obj($subElement);
        }
    }
    return $obj;
}
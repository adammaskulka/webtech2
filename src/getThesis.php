<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

    $request = json_decode($postdata);
    $institution = $request->institution;
    $ch = curl_init('http://is.stuba.sk/pracoviste/prehled_temat.pl');

// zostavenie dat pre POST dopyt
    $data = array(
        'pracoviste' => '642',
        'lang' => 'sk',
        'omezit_temata2' => 'Obmedziť'
    );

// nastavenie curl-u pre pouzitie POST dopytu
    curl_setopt($ch, CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// nastavenie curl-u pre ulozenie dat z odpovede do navratovej hodnoty z volania curl_exec
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// vykonanie dopytu
    $result = curl_exec($ch);
    curl_close($ch);

    $doc = new DOMDocument();
    $doc->loadHTML($result);

    $response = element_to_obj($doc->documentElement);

    echo json_encode($response);


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


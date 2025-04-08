<?php
    $style = "nuit.css";
    $logo = "./images/logocyu.png";

    if (isset($_GET['style']) && !empty($_GET['style']) && $_GET['style'] == "jour") {
        $style = "jour.css";
        $logo = "./images/logocyujour.png";
    }


    $title = "NASA APOD";
    $h1 = "Image du Jour - NASA APOD";

    require "./include/header.inc.php"; 
?>
    <section>
        <?php
            $api_key = "YSU1xcVKL9kcxOHP2fj8uJpfCaE361c5ygt3eNRZ";
            $apod_url = "https://api.nasa.gov/planetary/apod?api_key=$api_key";
            $apod_data = json_decode(file_get_contents($apod_url), true);

            echo "<h2>" . $apod_data["title"] . "</h2>\n";
            if ($apod_data["media_type"] == "image") {
                echo "\t\t<img src='" . $apod_data["url"] . "' alt='APOD' style='max-width: 100%; height: auto;'>\n\t\t<p>" . $apod_data["explanation"] . "</p>";
            } elseif ($apod_data["media_type"] == "video") {
                echo "\t\t<video controls style='max-width: 100%; height: auto;'>\n
                \t\t<source src='" . $apod_data["url"] . "' type='video/mp4'>\n
              \t\t</video>
              <p>" . $apod_data["explanation"] . "</p>";
        
            }
        ?>
    </section>
    <section>
        <h2>Localisation via IP (avec flux XML)</h2>
        <span>
            <?php

                $user_ip = $_SERVER['REMOTE_ADDR'];

                $geo_url = "http://www.geoplugin.net/xml.gp?ip=$user_ip";
                $geo_xml = simplexml_load_file($geo_url);


                if ($geo_xml) {
                    echo "Votre position: ";
                    echo $geo_xml->geoplugin_city . ", " . $geo_xml->geoplugin_region . ", " . $geo_xml->geoplugin_countryName;
                } else {
                    echo "Impossible de récupérer votre position.";
                }
            ?>
        </span>
    </section>
    <section>
        <h2>Localisation via IP (avec flux JSON)</h2>
        <span>
            <?php

                $json_ip = $_SERVER['REMOTE_ADDR'];

                $json_url = "https://ipinfo.io/".$json_ip."/geo";
                $json_data = json_decode(file_get_contents($json_url), true);
                echo "Votre position: ";
                echo $json_data["city"] . ", " . $json_data["region"] . ", " . $json_data["country"];
            ?>
        </span>
    </section>
    <section>
        <h2>Localisation via IP (avec flux XML autre site)</h2>
                <span>
            <?php
                $user_ip = $_SERVER['REMOTE_ADDR'];
                $xml_key = "3eb1ac9520face5e3d05bfef8d66641d";
                $xml_url = "https://api.whatismyip.com/ip-address-lookup.php?key=$xml_key&input=$user_ip&output=xml";
                $xml_str = simplexml_load_string(file_get_contents($xml_url));
                echo "Votre position: ";
                echo $xml_str->server_data->city . ", " . $xml_str->server_data->region . ", " . $xml_str->server_data->country;
            ?>
            </span>
            </h2>
        </section>
</body>
</html>
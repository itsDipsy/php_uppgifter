<?php 
    function the_header(){
        $rel = "stylesheet";
        $href = "styles.css";
        $utf_8 = "utf-8";
        $head = 
        "<head>
                <title>Övning 01</title>
                <meta charset=$utf_8>
                <link rel=$rel href=$href>
        </head>";

        return $head;
    }

function main(){
    $src = "corgi.jpg";
    $alt = "A Corgi!";   
    $main = "<body>
                <h1>Breed Profile: An Essential Guide to Corgis (Pembroke Welsh and Cardigan Welsh)</h1>
                <p>You dont have to be a corgi lover to recognize one. Their short legs, long back, and fox-like looks make them distinctive (and adorable) in appearance, and their friendly, lively personalities leave a lasting impression on anyone they meet. Learn more about these cheerful herding dogs in this in-depth breed profile, and let us help you decide if a corgi dog is right for you.</p>
                <h2>Breed Characteristics</h2>
                <ul>
                    <li>Origin: Wales</li>
                    <li>Size: small</li>
                    <li>Average Life Expectancy: 12-13 years (Pembroke), 12-15 years (Cardigan)</li>
                    <li>Energy Level: medium</li>
                    <li>Breed Group: herding</li>
                </ul>
                <img src=$src alt=$alt>
                <h2>Breed Appearance</h2>
            <   p>The corgi dog type actually consists of two separate breeds: the Pembroke Welsh corgi and the Cardigan Welsh corgi. You may have also heard of cowboy corgis, which aren’t purebred corgis but rather a mix of corgi and Australian cattle dog.</p>
            </body>";
        
        return $main;
    }

?>
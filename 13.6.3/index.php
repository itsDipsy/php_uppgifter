<?php
// Er data.
$dogs = [
    [
        "heading" => "Labrador Retrievers",
        "content" => 'These friendly and active pups have held the top spot the past 28 years in a row. "This is a do-everything breed that needs to be with its humans," long-timer breeder Erin Henlon-Hall told the AKC. "It personifies the definition of versatility — hunting, showing, family, dock diving, tracking, obedience. It’s as American as baseball, hot dogs, and apple pie."'
    ],
    [
        "heading" => "German Shepherds",
        "content" => 'These trusted companions often work as police dogs and service dogs because they\'re fiercely loyal to their main caretakers.'
    ],
    [
        "heading" => "Golden Retrievers",
        "content" => 'This intelligent, friendly breed is basically the movie star of the group with starring roles on Full House, Air Bud, and Homeward Bound.'
    ],
    [
        "heading" => "French Bulldogs",
        "content" => 'Frenchies have big personalities but require minimal exercise. It\'s no wonder the big-eared pooches are also the top choice in New York, San Francisco, and Miami, the AKC announced.'
    ]
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Övning 03</title>
        <meta charset="utf-8">
        <style>
            body {
                width:100vw;
                height:100vh;
                display:flex;
                justify-content: center;
                align-items:center;
                flex-direction:column;
                gap:20px;
            }
            .box{
                width:40vw;
                border-radius:10px 10px 10px 10px;
                border:1px solid gray;
            }
            .header{
                border-radius:10px 10px 0px 0px;
                padding-top:10px;
                padding-bottom:10px;
                width:100%;
                height:50px;
                color:white;
                background-color:skyblue;
                font-size:30px;
                
            }
            .content{
                padding: 20px;
                height:auto;
                font-size:23px;
            }
        </style>
    </head>
    <body>
        <h1>The 4 Most Popular Dog Breeds in the Country</h1>
        <?php 
            function create_box($header_var, $content_var, $index){
                $box_class_strig = "box";
                $header_class_string = "header";
                $content_class_string = "content";

                $the_header = "<div class=$header_class_string>$index. $header_var</div>";
                $the_content = "<div class=$content_class_string>$content_var</div>";
                $the_main_div = "<div class=$box_class_strig>
                    $the_header
                    $the_content
                </div>";

                echo $the_main_div;
            }
            foreach($dogs as $index => $data ){
                create_box($data["heading"], $data["content"], $index);
            }
            
        ?>
    </body>
</html>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="dist/styles/output.css" rel="stylesheet">
    </head>
    <body>
        <main>
            <section></section>
            <button class="dark-grey-button club-demo-button" id="play">play</button>
            <svg height="800" width="400" xmlns="http://www.w3.org/2000/svg">
                <path id="line-top" d="M 200 0 L 200 400" style="stroke:red;stroke-width:2;fill:none" />
                <path id="line" d="M 200 400 L 200 600" style="stroke:green;stroke-width:2;fill:none" />
                <path id="line-bottom" d="M 200 600 L 200 800" style="stroke:red;stroke-width:2;fill:none" />
                <path id="curve" class="hidden" d="
                M 200,400
                C 260,480, 320,480, 280,430
                C 240,470, 180,470, 200,420
                C 210,440, 250,440, 240,420
                C 230,430, 200,450, 210,470
                C 220,490, 250,490, 260,470
                C 270,450, 240,440, 250,430
                C 260,420, 230,420, 240,410
                C 250,400, 270,410, 260,420
                C 250,430, 220,430, 230,420
                C 240,410, 260,400, 250,390
                C 240,380, 220,380, 230,370
                C 240,360, 260,370, 250,360
                C 240,350, 220,340, 230,330
                C 240,320, 270,330, 260,320
                C 250,310, 220,320, 230,310
                C 240,300, 270,310, 260,300
                C 250,290, 220,280, 230,270
                C 240,260, 270,270, 260,260
                C 250,250, 220,260, 230,250
                C 250,300, 260,350, 200,600
                L 200,600" 
        style="stroke:green;stroke-width:2;fill:none" />
            </svg>            
            
        </main>
    <script type="module" src="dist/scripts/script.js"></script>
    </body>
</html>
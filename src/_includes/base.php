---
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $metadata['page_title'] ) ) echo $metadata['page_title'] . ' - '; ?>WebFonts Test Site</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

        <style type="text/css">
            *, *::before, *::after { box-sizing: border-box; }
            html, body { font-family: "Poppins", sans-serif; font-size: 1.2rem; background-color: #333; color: #ccc; margin: 0; padding: 0; }
            .container { max-width: 1200px; margin-inline: auto; padding: 1rem; }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>Web Fonts Test Site</h1>
            <p>A website where I test various WebFonts.</p>

            <hr>

            {{ content }}
        </div>
    </body>
</html>
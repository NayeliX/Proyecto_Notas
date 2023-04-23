<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>CT - Notas</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">

    </head>
    <body>
        
        <!-- Navigation -->
        <div class="navbar">
            <div class="container flex">

                <!-- Image Logo -->
                <!-- <a class="logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> -->

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <a class="logo-text" href="index.html">Ciencia y Tecnología</a>

                <nav>
                    <ul >
                        <li><a href="#contact">Notas</a></li>
                    </ul>
                </nav>
            </div> <!-- end of container -->
        </div> <!-- end of navbar -->
        <!-- end of navigation -->

        
        <!-- Header -->
        <header>
            <div class="container">
                <div class="text-container">
                    <h1 class="h1-large">Conocer mis notas y avance</h1>
                    <a class="btn-outline-lg" href="#contact">Comenzar</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of container -->
        </header> <!-- end of header -->
        <!-- end of header -->


        <!-- Formunulario -->
        <div id="contact" class="contact bg-gray">
            <div class="container">
                <h2>Ingresa correctamente tu DNI</h2>
                <p class="p-heading">Recuerda digitar correctamente tus datos</p>

                <form method="post" action="">
                    <div class="form-group" id="dni">
                        <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        type = "number" maxlength = "8" class="form-control-input-button" name="dni" required>
                        <br>
                        <br>
                    </div>
                    <button type="submit" class="form-control-submit-button" name="btnIngresar">Enviar</button>
                </form>
                
            </div> <!-- end of container -->
        </div> <!-- end of contact -->
        <!-- end of contact -->


        <!-- Footer -->
        <footer>
            <div class="container grid grid-3">
                <div>
                    
                    <!-- Image Logo -->
                    <a class="logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> 
                    
                    <!-- Text Logo -->
                    <!-- <a class="logo-text" href="index.html">Name</a> -->

                    <p>Miguel Barrantes Flores © 2023</p>
                </div>
                <div>
                    <ul class="li-space-lg">
                        <li><a href="#contact">Conocer mi nota</a></li>
                    </ul>
                </div>
                <div>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div> <!-- end of container -->
        </footer> <!-- end of footer -->
        <!-- end of footer -->


        <!-- Back To Top Button -->
        <a id="myBtn" href="#" data-scroll>
            <img src="images/up-arrow.png" alt="alternative">
        </a>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="js/smooth-scroll.polyfills.min.js"></script> <!-- Smooth Scroll -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>
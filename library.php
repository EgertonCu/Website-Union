<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eLibrary</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #288c42;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }

        .container {
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .book {
            display: flex;
            align-items: center;
            background: #fff;
            margin-bottom: 1rem;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .book-icon {
            font-size: 3rem;
            color: #288c42;
            margin-right: 1rem;
        }

        .book-details {
            flex-grow: 1;
        }
        
        a { color: inherit; } 


        .book-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin: 0;
        }

        .book-category {
            font-size: 0.9rem;
            color: #666;
        }

        footer {
            background-color: #288c42;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<!-- Include fetch file -->
<?php include 'helpers/fetch.php';?>

<body>
    <header>
    <header id="header" class="header-section">
            <div class="top-header">
                <div class="container">
                    <div class="top-content-wrap row">
                        <div class="col-sm-8">
                            <ul class="left-info">
                                <li><a href="#"><i class="ti-email"></i>info@eunccu.org</a></li>
                                <li><a href="#"><i class="ti-mobile"></i>+(254) 102 186502</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 d-none d-md-block">
                            <ul class="right-info">
                                <li><a href="https://www.facebook.com/egertoncu.org" target="_blank" rel="noopener no-referrer"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://x.com/egertoncu/" target="_blank" rel="noopener no-referrer"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/cu_egerton/" target="_blank" rel="noopener no-referrer"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://wa.me/254102186205" target="_blank" rel="noopener no-referrer"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="https://www.youtube.com/@EgertonUniversityNjoroCampusCU" target="_blank" rel="noopener no-referrer"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-header">
                <div class="container">
                    <div class="bottom-content-wrap row">
                        <div class="col-sm-4">
                            <div class="site-branding">
                                <a href="#"><img src="img/logo2.png" alt="Brand"></a>
                            </div>
                        </div>
                       <div class="col-sm-8 text-right">
                           <ul id="mainmenu" class="nav navbar-nav nav-menu">
                                <li class="active"> <a href="index.html">Home</a></li>
                                <li class="active"> <a href="index.html">Home</a>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="Leadership.html">Leadership</a></li>
                                <li><a href="Ministries.html">Ministries</a></li>
                                <li><a href="#">Pages</a> 
                                    <ul>
                                       <li><a href="gallery.html">Gallery</a></li>
                                       <li><a href="E-Library.html">E-Library</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-grid.html">Blog</a> 
                                    <ul>
                                       <li><a href="blog-grid.html">Blog Grid</a></li>
                                       <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                       <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li> <a href="contact.html">Contact</a></li>
                            </ul>
                            <a href="#" class="default-btn">Sign Up/Sign In</a>
                       </div>
                    </div>
                </div>
            </div>
        </header><!-- /Header Section -->
    </header>

    <div class="container">
        <!-- <div class="book">
            <div class="book-icon">📘</div>
            <div class="book-details">
                <p class="book-title">Book Title 1</p>
                <p class="book-category">Category: Fiction</p>
            </div>
        </div> -->

        <!-- Dynamically list books -->
        <?php listBooks();?>

        <!-- <div class="book">
            <div class="book-icon">📙</div>
            <div class="book-details">
                <p class="book-title">Book Title 3</p>
                <p class="book-category">Category: History</p>
            </div>
        </div> -->
    </div>

    <footer class="footer-section">
			<div class="container">
                <div class="row">
                    <div class="col-md-6 sm-padding">
                        <div class="copyright">&copy; 2024 EUNCCU Powered by Mediaministrydevelopers</div>
                    </div>
                    <div class="col-md-6 sm-padding">
                        <ul class="footer-social">
                            <li><a href="#">Comments</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Report Problem</a></li>
                        </ul>
                    </div>
                </div>
			</div>
		</footer><!-- /Footer Section -->
</body>
</html>

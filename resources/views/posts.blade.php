<!DOCTYPE html>
 <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GreenArt</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="{{ asset('../assets/css/font-awesome.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{ asset('../assets/css/animate.min.css')}}">

        <link href="{{ asset('../assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="{{ asset('../assets/css/carousel.css')}}">

        <link href="{{ asset('../assets/css/style.css')}}" rel="stylesheet">

        <link href="{{ asset('../assets/css/responsive.css')}}" rel="stylesheet">

        <style>

            .addresses {
                position: absolute;
                top: 20px;
                left: 50%;
                transform: translateX(-50%);
                background-color: #fff;
                /* Increase padding around the addresses */
                padding: 30px;
                border-radius: 10px;
                /* Increase the maximum width to allow more content */
                max-width: 500px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            }

            .addresses h2 {
                /* Increase font size for the title */
                font-size: 24px;
                margin-bottom: 20px;
            }

            .addresses ul {
                /* Increase margin between list items */
                margin-bottom: 20px;
            }

            .addresses li {
                /* Increase padding between list items */
                padding: 10px 15px;
                /* Add a subtle border to each list item */
                border-bottom: 1px solid #ddd;
            }

            .addresses p {
                /* Increase font size for the address text */
                font-size: 16px;
                line-height: 1.6;
            }
                    /* The sidebar menu */

            .sidenav {
                height: 100%; /* Full-height: remove this if you want "auto" height */
                width: 160px; /* Set the width of the sidebar */
                position: fixed; /* Fixed Sidebar (stay in place on scroll) */
                z-index: 1; /* Stay on top */
                top: 0; /* Stay at the top */
                left: 0;
                background-color: #183c26; /* Black */
                overflow-x: hidden; /* Disable horizontal scroll */
                padding-right: 2em;
            }

                /* The navigation menu links */
            .sidenav a {
                padding: 6px 8px 6px 16px;
                text-decoration: none;
                font-size: 40%;
                color: #f4eaea;
                display: block;
            }

                /* When you mouse over the navigation links, change their color */
            .sidenav a:hover {
                color: #f1f1f1;
            }

                /* Style page content */


                /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
            @media screen  {
                .sidenav {padding-top: 150px;}
                .sidenav a {font-size: 10px;}




                /* Top navigation styles */
                .topnav {
                    background-color: #5cc65b;
                    overflow: hidden;
                    position: fixed;
                    top: 2%;
                    width: 90%;
                }

                /* Style the links inside the navigation bar */
                .topnav a {
                    float: left;
                    color: #f2f2f2;
                    padding: 14px 16px;
                    text-decoration: none;
                    font-size: 17px;
                }

                /* Hover effect for links */
                .topnav a:hover {
                    background-color: #ddd;
                    color: black;
                }

                /* Styling for active link */
                .topnav a.active {
                    background-color: #04AA6D;
                    color: white;
                }

            }

            .footer {
                    position: fixed;
                    left: 0;
                    bottom: 0;
                    width: 100%;
                    background-color: rgb(29, 94, 45);
                    color: white;
                    text-align: center;
            }
        </style>
    </head>

    <body data-spy="scroll" >
        <!--Start of blog-->
            <section id="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="latest_blog text-center">
                                <h2>les adresses</h2>
                                <p>Consultez les emplacements des produits cosmétiques bio.</p>
                            </div>
                        </div>
                    </div>

              <div class="sidenav">

                <a href="#">Mon compte</a>
                <a href="#">Mes favoris</a>
                <a href="#">Se connecter</a>
                <a href="#">Se deconnecter</a>
              </div>



                <div class="topnav">

                <a href="#home">Home</a>
                <a href="#news">News</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>

                </div>
                <div class="row">
                    @if ($posts->isEmpty())
                    <p>Aucun post n'est actuellement disponible.</p>
                    @else
                    @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">

                                <div class="blog_img" id="contaier">
                                  <div><img src="{{asset('../storage/app/public/profil/'.$post->photo) }}" alt="{{ $post['nom'] }}"></div>

                                </div>

                                <div class="blog_content">
                                    <a href=""><h3>{{ $post->nom}}</h3></a>
                                    <p class="blog_news_content">{{ $post->description }}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </section>
                <!--Start of footer-->
                <div class="footer">
                    <p>Green'Art</p>
                </div>

            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
            <script src="js/jquery-1.12.3.min.js"></script>
              <!--Counter UP Waypoint-->
            <script src="js/waypoints.min.js"></script>
                <!--Counter UP-->
            <script src="js/jquery.counterup.min.js"></script>
            <script>
                    //for counter up
                    $('.counter').counterUp({
                        delay: 10,
                        time: 1000
                    });
            </script>

            <script>

                <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
                <script src="{{ asset('../assets/js/jquery-1.12.3.min.js') }}"></script>

                <script src="{{ asset('../assets/js/waypoints.min.js') }}"></script>
                <script src="{{ asset('../assets/js/jquery.counterup.min.js') }}"></script>




                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


                    <script src="{{ asset('../assets/js/isotope/min/scripts-min.js') }}"></script>
                    <script src="{{ asset('../assets/js/isotope/cells-by-row.js') }}"></script>
                    <script src="{{ asset('../assets/js/isotope/isotope.pkgd.min.js') }}"></script>
                    <script src="{{ asset('../assets/js/isotope/packery-mode.pkgd.min.js') }}"></script>
                    <script src="{{ asset('../assets/js/isotope/scripts.js') }}"></script>


                    <script src="{{ asset('../assets/js/backtotop.js') }}"></script>


                    <script src="{{ asset('../assets/js/jquery.localScroll.min.js') }}"></script>
                    <script src="{{ asset('../assets/js/jquery.scrollTo.min.js') }}"></script>
                    <script src="{{ asset('../assets/js/wow.min.js') }}"></script>



                    <script src="{{ asset('../assets/js/bootstrap.min.js') }}"></script>
                    <script src="{{ asset('../assets/js/main.js') }}"></script>




    </body>

</html>

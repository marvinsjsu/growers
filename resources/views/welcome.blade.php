<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Grown By: - Passion and artistry for Marijuana</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link async href="http://fonts.googleapis.com/css?family=Battambang" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="/css/main.css" />

    </head>
    <body class="index">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <h1 id="logo"><a href="/">GrownBy <span> - Let's get cultivated</span></a></h1>
            <nav id="nav">
                <ul>
                    <li class="current"><a href="#banner" class="scrolly">Home</a></li>
                    <li><a href="#main" class="scrolly">Blog</a></li>
                    <li><a href="#about-us" class="scrolly">About Us</a></li>

                    <!-- 							<li class="submenu">
                                                    <a href="#">Layouts</a>
                                                    <ul>
                                                        <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="right-sidebar.html">Right Sidebar</a></li>
                                                        <li><a href="no-sidebar.html">No Sidebar</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                        <li class="submenu">
                                                            <a href="#">Submenu</a>
                                                            <ul>
                                                                <li><a href="#">Dolore Sed</a></li>
                                                                <li><a href="#">Consequat</a></li>
                                                                <li><a href="#">Lorem Magna</a></li>
                                                                <li><a href="#">Sed Magna</a></li>
                                                                <li><a href="#">Ipsum Nisl</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="button special">Sign Up</a></li>
                     -->						</ul>
            </nav>
        </header>

        <!-- Banner -->
        <section id="banner">

            <!--
                ".inner" is set up as an inline-block so it automatically expands
                in both directions to fit whatever's inside it. This means it won't
                automatically wrap lines, so be sure to use line breaks where
                appropriate (<br />).
            -->
            <div class="inner">

                <header>
                    <h2>Grown By</h2>
                </header>

                <div class="sign-up">
                    <!-- need to add the subscribe button here -->
                    <!-- 							<div class="row">
                                                    <div class="6u 12u(narrower)">

                                                        <section>
                                                            <a href="#" class="image featured"><img src="images/growers_bg.png" alt="" /></a>
                                                        </section>

                                                    </div>
                                                </div> -->
                    <p>
                        >> our bud picture here <<
                    </p>
                    <p>
                        >> subscription field and button here <<
                    </p>
                    <br/>
                    <br/>
                    <br/>
                </div>
                <footer>
                    <ul class="buttons vertical">
                        <li><a href="#main" class="button fit scrolly"><!--[-->Read our stories<!--]--></a></li>
                    </ul>
                </footer>

            </div>

        </section>
        <!-- Main -->
        <article id="main">

            <!-- Three -->
            <section class="wrapper style3 container special">

                <header class="major">
                    <h2><!--[-->Growing:<!--]--> <strong><!--[-->My Journey in Cultivating<!--]--></strong></h2>
                </header>


                <div class="row">
                    @foreach ($posts as $post)
                    <div class="6u 12u(narrower)">

                        <section>
                            <a href="{{ url('posts') . '/' . $post->id }}" class="image featured"><img src="{{ $post->image_url }}" alt="" /></a>
                            <header>
                                <h3><!--[-->{{ $post->title }}<!--]--></h3>
                            </header>
                            <p class="left">
                                {{ $post->summary }}
                                <a href="{{ url('posts') . '/' . $post->id }}"> [read more] </a>
                            </p>
                        </section>

                    </div>
                    @endforeach
                </div>



                <footer class="major">
                    <ul class="buttons">
                        <li><a href="{{ route('stories.all') }}" class="button">See More</a></li>
                    </ul>
                </footer>

            </section>
        </article>

        <article id="about-us">
            <header class="special container">
                <!-- <span class="icon fa-bar-chart-o"></span> -->
                <h2><!--[-->We are artisans from <!--]--> <strong><!--[-->Hollister,<!--]--></strong> <!--[--> California. <!--]-->
                    <br />
                    <!--[-->Our interest in growing organic marijuana through sustainable means drives our journey as growers.<!--]--></h2>
                <p><!--[-->This site, <strong>Grown By</strong>, is a journal of our exploration in the cultivation of various Cannabis strains.<!--]-->
                    <br />
                </p>
            </header>

            <!-- One -->
            <section class="wrapper style2 container special-alt">
                <div class="row 50%">
                    <div class="12u 12u(narrower)">

                        <header>
                            <h2>Marijuan Buds</h2>
                        </header>
                        <p> >> Sample 1 w/ picture << </p>
                        <footer>
                            <ul class="buttons">
                                <li><a href="#" class="button">Photos and Video Gallery</a></li>
                            </ul>
                        </footer>

                    </div>
                    <!-- 								<div class="4u 12u(narrower) important(narrower)">

                                                        <ul class="featured-icons">
                                                            <li><span class="icon fa-clock-o"><span class="label">Feature 1</span></span></li>
                                                            <li><span class="icon fa-volume-up"><span class="label">Feature 2</span></span></li>
                                                            <li><span class="icon fa-laptop"><span class="label">Feature 3</span></span></li>
                                                            <li><span class="icon fa-inbox"><span class="label">Feature 4</span></span></li>
                                                            <li><span class="icon fa-lock"><span class="label">Feature 5</span></span></li>
                                                            <li><span class="icon fa-cog"><span class="label">Feature 6</span></span></li>
                                                        </ul>

                                                    </div> -->
                </div>
            </section>
        </article>


        <!-- CTA -->
        <section id="cta">

            <header>
                <h2><!--[-->Let's get <strong>Cultivating!</strong><!--]--></h2>
            </header>
            <footer>


            </footer>

        </section>

        <!-- Footer -->
        <footer id="footer">

            <ul class="icons">
                <li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
                <!-- <li><a href="#" class="icon circle fa-instagram"><span class="label">Instagram</span></a></li> -->

            </ul>

            <ul class="copyright">
                <li>&copy; Grown By 2017</li>
            </ul>

        </footer>
    </div>

    <!-- Scripts -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.dropotron.min.js"></script>
    <script src="/js/jquery.scrolly.min.js"></script>
    <script src="/js/jquery.scrollgress.min.js"></script>
    <script src="/js/skel.min.js"></script>
    <script src="/js/util.js"></script>
    <!--[if lte IE 8]><script src="public/js/ie/respond.min.js"></script><![endif]-->
    <script src="/js/main.js"></script>

    </body>
</html>

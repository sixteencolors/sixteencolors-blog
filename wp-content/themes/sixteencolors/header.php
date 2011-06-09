<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title>
<?php
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

?>
    </title>
    <meta name="description" content="Sixteen Colors is an archive of ANSI art and ASCII art produced by groups in the underground digital artscene from 1990 to the present. This art began as a way to make Bulletin Board Systems more attractive but grew to be an art medium in its own right." />
    <meta name="keywords" content="ANSI, ASCII, art, underground, textmode, bbs" />
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
    <header class=container>
        <h1 class=grid_4><a href="http://sixteencolors.net/">Sixteen Colors ANSI/ASCII Art Archive</a></h1>
        <nav>
            <ul id=nav>
                <li class="grid_2"><a href="http://sixteencolors.net/info">Information</a>
                    <ul>
                        <li><a href="http://blog.sixteencolors.net">News</a></li>
                        <li><a href="http://sixteencolors.net/history">History</a></li>
                        <li><a href="http://sixteencolors.net/glossary">Glossary</a></li>
                    </ul>
                </li>
                <li class=grid_2><a href="http://sixteencolors.net/art">Artwork</a>
                    <ul>
                        <li><a href="http://sixteencolors.net/pack">Packs</a></li>
                        <li><a href="http://sixteencolors.net/group">Groups</a></li>
                        <li><a href="http://sixteencolors.net/artist">Artists</a></li>
                        <li><a href="http://sixteencolors.net/convert">Converter</a></li>
                    </ul>
                </li>
                <li class=grid_2><a href="http://sixteencolors.net/site">Site</a>
                    <ul>
                        <li><a href="http://sixteencolors.net/contact">Contact</a></li>
                        <li><a href="http://sixteencolors.net/stats">Statistics</a></li>
                        <li><a href="http://sixteencolors.net/api">API</a></li>
                        <li><a href="http://sixteencolors.net/colophon">Colophon</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id=search class=grid_5>
            <h2>Search</h2>
            <form>
                <input type=search action="http://sixteencolors.net/search" name=q placeholder="Search the archive..." required /> 
                <input type=submit value=Search />
            </form>
        </div>
        <div class=clear></div>
    </header>

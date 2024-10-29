<?php
/*
Plugin Name: Apuracao Eleicoes Brasil
Plugin URI: https://github.com/valeriosouza/apuracao-eleicoes-brasil
Description: Apuração das Eleições 2018 do Brasil
Version: 0.3.1
Author: Valerio Souza
Author URI: http://valeriosouza.com.br
Text Domain: eleicoes-brasil
Domain Path: /languages
*/

// Add Shortcode
function apura_tse() {?>
<iframe
src="http://divulga.tse.jus.br/index.html" height="700" width="100%" frameborder="0" scrolling="auto">Seu site não suporta iframes</iframe>
<?php 
}
add_shortcode( 'apuracao', 'apura_tse' );

function apura_twitter() {?>
<a class="twitter-timeline" href="https://twitter.com/search?q=elei%C3%A7%C3%B5es+OR+elei%C3%A7%C3%B5es2018+OR+eleicoes+lang%3Apt" data-widget-id="519666914453233664">Tweets sobre "eleições OR eleições2018 OR eleicoes lang:pt"</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<?php 
}
add_shortcode( 'twitter_eleicao', 'apura_twitter' );

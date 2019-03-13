<head><script id="chatBroEmbedCode">/* Chatbro Widget Embed Code Start */function ChatbroLoader(chats,async){async=!1!==async;var params={embedChatsParameters:chats instanceof Array?chats:[chats],lang:navigator.language||navigator.userLanguage,needLoadCode:'undefined'==typeof Chatbro,embedParamsVersion:localStorage.embedParamsVersion,chatbroScriptVersion:localStorage.chatbroScriptVersion},xhr=new XMLHttpRequest;xhr.withCredentials=!0,xhr.onload=function(){eval(xhr.responseText)},xhr.onerror=function(){console.error('Chatbro loading error')},xhr.open('GET','//www.chatbro.com/embed.js?'+btoa(unescape(encodeURIComponent(JSON.stringify(params)))),async),xhr.send()}/* Chatbro Widget Embed Code End */ChatbroLoader({encodedChatId: '235h3'});</script></head>

<?php

$algo = user()->getState('yaamp-algo');

JavascriptFile("/extensions/jqplot/jquery.jqplot.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.dateAxisRenderer.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.barRenderer.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.highlighter.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.cursor.js");
JavascriptFile('/yaamp/ui/js/auto_refresh.js');

$height = '240px';

$min_payout = floatval(YAAMP_PAYMENTS_MINI);
$min_sunday = $min_payout/10;

$payout_freq = (YAAMP_PAYMENTS_FREQ / 3600)." hours";
?>

<div id='resume_update_button' style='color: #444; background-color: #ffd; border: 1px solid #eea;
	padding: 10px; margin-left: 20px; margin-right: 20px; margin-top: 15px; cursor: pointer; display: none;'
	onclick='auto_page_resume();' align=center>
	<b>Auto refresh is paused - Click to resume</b></div>

<table cellspacing=20 width=100%>
<tr><td valign=top width=50%>

<!--  -->

<div class="main-left-box">
<div class="main-left-title">YiiMP MINING POOL</div>
<div class="main-left-inner">

<ul>

 <body>
  <p><b><a href="https://www.nicehash.com/pool-operators" target="_blank">Options Diff NiceHash</a></b></p> 
 </body>

<li>Payouts are made automatically every <b> <?= $payout_freq ?> </b> for all balances above <b><?= $min_payout ?></b>, or <b><?= $min_sunday ?></b> on Sunday.</li>
<br/>



<!--  -->

<div class="main-left-box">
<div class="main-left-title">STRATUM SERVERS</div>
<div class="main-left-inner">

<ul>
<a></a>yiimp.hopto.org</p>
<li>
<p class="main-left-box" style='padding: 5px; font-size: .8em; background-color: #2b7bb9; font-family: monospace;'>
	<b>-a algo -o stratum+tcp://<?= YAAMP_STRATUM_URL ?>:&lt;PORT&gt; -u &lt;WALLET_ADDRESS&gt; -p c=[SYMBOL],d=[you_diff]</b></p>
</li>

<?php if (YAAMP_ALLOW_EXCHANGE): ?>
<li>&lt;WALLET_ADDRESS&gt; </li>

<?php else: ?>
<li><b>-a sha256 -o stratum+tcp://<?= YAAMP_STRATUM_URL ?>:3333 -u WALLET_ADDRESS -p c=BTC,d=512<b></b></li>
<li><b>wallet_address<b></b></li>
<?php endif; ?>
<li><b>-p c=[symbol]</b></li>
<li>
<b>d=512, diff options Nicehash</b></li>

<div class="main-left-box">
<div class="main-left-title">Exchange Coins</div>
<div class="main-left-inner">

<ul class="social-icons">
    <li><a href="https://novaexchange.com/?re=yzwi0i1srizxj7wgamtl"target="_blank"><img src='/images/nowa.jpg' /></a></li>
    <li><a href="https://app.stex.com?ref=44316772"target="_blank"><img src='/images/stex.webp' /></a></li>
    <li><a href="https://www.coinexchange.io"target="_blank"><img src='/images/coinexcange.jpg' /></a></li>
    <li><a href="https://tradesatoshi.com"target="_blank"><img src='/images/tradesatoshi.jpg' /></a></li>
	<li><a href="https://c-cex.com/?rf=B18861ACD54DEF4D"target="_blank"><img src='/images/c-cex.com.png' /></a></li>
	<li><a href="https://crex24.com/?refid=v2tsf7rlflxitkyjkgdh"target="_blank"><img src='/images/crex24.com.jpg' /></a></li>
	<li><a href="https://altmarkets.io"target="_blank"><img src='/images/altmarkets.jpg' /></a></li>
	<li><a href="https://wallet.crypto-bridge.org/"target="_blank"><img src='/images/brige.png' /></a></li>
	<li><a href="https://www.altilly.com/"target="_blank"><img src='/images/altilly.com.png' /></a></li>
	<li><a href="https://www.idax.pro"target="_blank"><img src='/images/idax.jpg' /></a></li>
</ul>

<br>

</ul>
</div></div><br>

<!--  -->
<div class="main-left-box">
<div class="main-left-title">Pool News!</div>
<div class="main-left-inner">

<a class="twitter-timeline" href="https://twitter.com/yiimphoptoorg?ref_src=twsrc%5Etfw%7Ctwcamp%5Etweetembed&ref_url=https%3A%2F%2Ftwitter.com%2Fyiimphoptoorg">Pool NEWS</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<script type="text/javascript">
$("iframe#twitter-widget-0").waitUntilExists(function(){
    $("iframe#twitter-widget-0").contents().find('head').append('<style>.SandboxRoot .timeline-Widget .timeline-TweetList .timeline-Tweet-text { font-size: 16px; line-height: 32px; }</style>');     
});
</script>




<div class="main-left-box">
<div class="main-left-title">LINKS</div>
<div class="main-left-inner">

<ul>

<li><b>API</b> - <a href='/site/api'>http://<?= YAAMP_SITE_URL ?>/site/api</a></li>
<li><b>Difficulty</b> - <a href='/site/diff'>http://<?= YAAMP_SITE_URL ?>/site/diff</a></li>
<?php if (YIIMP_PUBLIC_BENCHMARK): ?>
<li><b>Benchmarks</b> - <a href='/site/benchmarks'>http://<?= YAAMP_SITE_URL ?>/site/benchmarks</a></li>
<?php endif; ?>

<?php if (YAAMP_ALLOW_EXCHANGE): ?>
<li><b>Algo Switching</b> - <a href='/site/multialgo'>http://<?= YAAMP_SITE_URL ?>/site/multialgo</a></li>
<?php endif; ?>

<br>

</ul>
</div></div><br>

</div></div><br>
</td><td valign=top>
<!--  -->

<div id='pool_current_results'>
<br><br><br><br><br><br><br><br><br><br>
</div>

<div id='pool_history_results'>
<br><br><br><br><br><br><br><br><br><br>
</div>

</td></tr></table>

<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>

<script>

function page_refresh()
{
	pool_current_refresh();
	pool_history_refresh();
}

function select_algo(algo)
{
	window.location.href = '/site/algo?algo='+algo+'&r=/';
}

////////////////////////////////////////////////////

function pool_current_ready(data)
{
	$('#pool_current_results').html(data);
}

function pool_current_refresh()
{
	var url = "/site/current_results";
	$.get(url, '', pool_current_ready);
}

////////////////////////////////////////////////////

function pool_history_ready(data)
{
	$('#pool_history_results').html(data);
}

function pool_history_refresh()
{
	var url = "/site/history_results";
	$.get(url, '', pool_history_ready);
}

</script>

<?php

if (get_type () == "article") {
	?>
<div id="disqus_thread"></div>

<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = '<?php Template::escape(Settings::get("disqus_id"))?>'; // required: replace example with your forum shortname

    // The following are highly recommended additional parameters. Remove the slashes in front to use.
    var disqus_identifier = '<?php echo md5(Settings::get("password_salt").get_ID());?>';
    // var disqus_url = 'https://example.com/permalink-to-page.html';

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'https://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>
	Please enable JavaScript to view the <a
		href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
</noscript>
<a href="https://disqus.com" class="dsq-brlink">blog comments powered by
	<span class="logo-disqus">Disqus</span>
</a>

<?php
}

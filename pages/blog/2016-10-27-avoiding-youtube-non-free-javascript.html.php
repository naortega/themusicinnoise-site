<?php
require 'config.php';
require '2016-10-27-avoiding-youtube-non-free-javascript.cfg.php';
require 'templates/blog-header.php';
?>
<p>First I would like to mention that there are free alternatives to publishing media (even videos) such as the Up1 service (which currently is currently down on its main page, but you can access another instance of it at <a href="https://share.riseup.net/" target="_blank" >share.riseup.net</a>), <a href="https://unsee.cc/" target="_blank" >unsee.cc</a>, and <a href="https://goblinrefuge.com/mediagoblin/" target="_blank" >GoblinRefuge</a> (a MediaGoblin instance that allows up to 1GB size uploads). Therefore if you're going to publish media try using one of those first (GoblinRefuge is the closest thing to YouTube in terms of how public the media is).</p>

<p>Now, as for avoiding using YouTube's website, I've found two programs that can be used to watch YouTube videos without having to visit the website. The first is `mps-youtube' (might also be called `mpsyt', that's the name of the Debian package, at least). This is a CLI program that lets you browse and download YouTube videos without having to visit the site. It gives you a set of commands which can be used to search, download, and play YouTube videos all from the command-line. It's quite advanced and should allow you to avoid using YouTube all together. I myself haven't truly explored all of its functionality yet (I mostly just use it to look up some quick videos), but expect it to be missing some of the website's functionality (duh).</p>

<p>The other option has to do with when you're given a YouTube link. To my knowledge mpsyt can't necessarily watch videos based on a URL (again, I haven't explored all of its features yet), and there's always that friend who's going to be sending you YouTube links, yet you don't want to click them. So you can simply use `youtube-dl'. It's a very common tool that you can use to download YouTube videos (along with videos from other sites, a friend of mine downloads his porn using youtube-dl from websites that do a bad job at hiding the video's URL) and can even do things such as convert to other formats and extract audio from the files. Therefore, whenever someone sends you a YouTube link just run `youtube-dl <link>' and you'll never have to visit YouTube again.</p>

<p>With this it's relatively easy to live without running YouTube's non-free JavaScript. Although from now on any media you want to upload you should do so through the more ethical alternatives mentioned before.</p>

<p><b>UPDATE 2018/06/24:</b> I was recently made aware of <a href="https://hooktube.com/" target="_blank" >HookTube</a>, which is a website that keeps your viewing of YouTube videos away from YouTube, is lighter, and is still easy to use.</p>

<p><b>UPDATE 2020/03/19:</b> I forgot I had this post, but I guess late is better than never. Basically, HookTube has faced legal action from YouTube and had to resort to using normal embeds. It's still good as a lightweight alternative to YouTube, but not for privacy. If you want the privacy features HookTube used to have then I suggest using <a href="https://invidio.us/" target="_blank" >Invidious</a> instead.</p>


<?php
require 'templates/blog-footer.php';
?>
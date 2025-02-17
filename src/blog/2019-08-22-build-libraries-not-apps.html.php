<?php
require 'config.php';
require '2019-08-22-build-libraries-not-apps.cfg.php';
require 'templates/blog-header.php';
?>
<p>In the world of UNIX computing, we love having the freedom to interact with a bit of software using a variety of different interfaces, the most common being Graphical User Interface (GUI), Text User Interface (TUI, think of any curses-like interface), and Command-Line Interface (CLI). The idea was always that you could use any of these alternative interfaces (not all of them officially-supported, but all of them worked) and get the same work done, in an environment that the user found most comfortable. Heck, often times you could integrate one application into another that you were more comfortable using. However, since Linux has gone <b>somewhat</b> mainstream, I've found that many newer applications (especially those based on web technologies such as electron) have strayed from this mentality. They first create an application, which has a bloated UI, and then (if they get around to it) they write up a very limited API, almost as an after-thought. This is the case for applications such as Wire and Telegram.</p>

<p>From what I can speculate, the source of this new mentality is from web, and the non-technical user mentality. On the web, you have one way of viewing a page: whatever the server gives you. There is no alternative interface (using a text-based browser doesn't count, you're just omitting certain information). The same applies to the non-technical user, people who conform with whatever interface they're first given as the only possible interface to that software/network.</p>

<p>So what's gone wrong? How can we fix this? Quite simply, think of your app's functional element (what it actually does) and turn that into a library, then write your app using that library instead of directly embedded into your apps code. This way, any feature available in your app is available in any other client that is community made. A perfect example of this is <a href="https://tox.chat/" target="_blank" >Tox</a>, where the actual work is done by the <i>toxcore</i> library, and every client has the ability to implement the very same features.</p>

<p>The only reason not to develop in this manner is if you are purposefully trying to make it harder for people to make alternative interfaces to your software, which doesn't sound very friendly, and certainly isn't in the spirit of free or open-source software.</p>


<?php
require 'templates/blog-footer.php';
?>
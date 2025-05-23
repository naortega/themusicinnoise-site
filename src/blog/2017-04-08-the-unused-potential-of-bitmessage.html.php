<?php
require 'config.php';
require '2017-04-08-the-unused-potential-of-bitmessage.cfg.php';
require 'templates/blog-header.php';
?>
<p>For quite some time now I've been using <a href="https://github.com/Bitmessage/PyBitmessage" target="_blank" >Bitmessage</a>, an e-mail replacement that was made to protect user privacy based on the <a href="https://bitcoin.org/" target="_blank" >Bitcoin</a> model. After using Bitmessage for quite some time I have come to see the many benefits it has compared to e-mail, namely in regards to privacy and ease-of-use.</p>

<p>To begin with, Bitmessage has no e-mail service provider, you don't need to register an account with a third-party just to get a Bitmessage address, and all the information is stored on your computer. This means that it is highly accessible to anyone who has the application. This also means that information can't be stolen from a central source (eg. GMail/Yahoo/OutLook/etc. servers) but rather they would have to have direct access to the machine in which you store your messages (which is hopefully protected by disk encryption).</p>

<p>Bitmessage is also automatically encrypted, as your Bitmessage address is essentially your <a href="https://en.wikipedia.org/wiki/Public-key_cryptography" target="_blank" >public key</a>. This means you no longer have to show people who to encrypt e-mails. What's more, Bitmessage can be easily contained and put on a USB device (or any other form of external storage) where you can use it from any computer that supports Python and has the correct modules (this device should also be encrypted since it will contain your messages that you have sent/received), meaning you wouldn't even have to teach people how to move their keys from one place to another. Worst comes to worst they can generate their addresses using a passphrase which would allow them to recreate their keys if necessary.</p>

<p>Bitmessage has the additional benefit of being anonymous, it works in a mesh network where information is encrypted and then sent off into the network until it is either received by the recipient or expires (I will talk more about expiring messages in a bit... maybe a few hundred bytes). When sending a message you can do so anonymously or revealing your own Bitmessage address, and even with your Bitmessage address there is no way to trace it back to you unless you give up your own identity (or someone has access to the device your Bitmessage is on). This makes it a very secure and anonymous method of communication.</p>

<p>Bitmessage also has chan(nel)s, which are like mailing lists but with less of a hassle. These chans can be as public or private as you want them to be. If you want to create a public chan you simply have to publish your chan's address and passphrase somewhere public so everyone can see. If you just want it for you and your friends/family then only give these two to them.</p>

<p>Now, as you can expect, there are some negative aspects to Bitmessage (as always, there is no perfect solution) that should be taken into consideration, however none of them have to do with your privacy.</p>

<p>As you can imagine, being a cryptographic method of communication, Bitmessage requires more system resources than you'd be used to for your every-day e-mail client. When I run Bitmessage it tends to consume about half as much RAM as IceWeasel (currently it's using up 300MB), and when running, since it is also relaying messages, reading incoming messages, decrypting new messages, etc., it tends to use a good amount of processing power when busy (nothing too noticeable for my computer, but if you're running a really old computer it may be).</p>

<p>Another issue that most people will not be used to is the TTL (Time-To-Live). Messages will only roam the network for a certain amount of time (typically 4 days, however you can set it to be shorter or longer). This is used so that messages aren't flowing around the network endlessly and therefore simply creating a bunch of noise and rendering the entire network useless. The longer the TTL the more processing power will be needed when sending the message (in order to ensure that people don't always send messages with very long TTLs). However, most people tend to see their messages (for anything) on at least a daily basis, so a 4-day TTL should be just fine.</p>

<p>One must also take precautions in joining publicly available chans, precisely because it is anonymous, like any other tool for anonymity and privacy, it is used for malicious purposes as well. You will typically not find anything bad unless you're looking for it (same rule that applies to 'the dark web'), just know that if you receive something you don't want then simply delete it and empty your trash (it's not the end of the world).</p>

<p>The biggest issue is convincing people to use it. Everyone and everything wants you to use an e-mail, whether you're signing up for services or communicating with a friend. There are attempts at making <a href="https://bitmessage.ch/" target="_blank" >e-mail gateways</a>, but this does not protect your friends, so it would be ideal if you would convince your friends and family to use it as well.</p>

<p>If you would like to try out Bitmessage you can send a message to the address I have on my Contact page, and I will get back to you as soon as I can.</p>


<?php
require 'templates/blog-footer.php';
?>
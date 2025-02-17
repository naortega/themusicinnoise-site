<?php
require 'config.php';
require '2016-08-17-tox.cfg.php';
require 'templates/blog-header.php';
?>
<p>It's sad that out of all the types of software out there the one that is developed the least or given the least importance in terms of its freedom respecting alternatives is precisely the ones that we care about the most, applications such as our video/voice chat. This is not to say that there aren't such alternatives, seeing that this post is about precisely one of those alternatives, but it is sad that they don't have the popularity that software such as Firefox or GNU/Linux have. Therefore I would like to talk about <a href="https://tox.chat/" target="_blank" >Tox</a>. There are other alternatives such as <a href="https://ring.cx/" target="_blank" >Ring</a>, but I personally prefer Tox and have actually used it for video chatting (qTox, that is). Ring seems to have many features and is more organized, but I've had many issues with it so I'm not going to necessarily talk about them, just be aware that they're another freedom respecting alternative.</p>

<p>First I would like to point out that I use qTox. Now, what does this mean? Well, there are multiple Tox clients, because it's not a unified project. So in this post I will be talking about my experiences exclusively with qTox, the one that I have installed. Not all Tox clients have the same features, so I'd like to make it very clear that I'm only talking about qTox. If you want to know about any of the other clients simply go to <a href="https://tox.chat/clients.html" target="_blank" >this link</a> and choose your favorite. Just make sure to take a look at their features first and make sure they have what you're looking for.</p>

<p>So, the first question I'm guessing is how good does it actually work? This is a typical question by people who don't care too much about their freedom, but I'm willing to answer with great pleasure. qTox works great. I've actually had video calls with people in the U.S. from Spain and it's worked just fine. The only problem that really exists is if one of you aren't wearing headphones, in which case at least one of you is going to get an echo, but this is an issue that's hard to solve and that even Skype has issues with sometimes (though much less). So video chat works just fine, which is what most people use it for.</p>

<p>Another great feature it has is encryption, it will encrypt your information being sent and received in order to avoid eavesdroppers on your calls. This applies to calls, video, and chat. Something that many other services don't provide (or at least not making it one of their top priorities). There's also the p2p (peer-to-peer) aspect of it, meaning that there's not an intermediary server in the middle that receives all your messages and video streams to spy on you. Instead Tox connects directly to the other person whenever sending information. This has its disadvantages, mostly being that if both participants in the chat are not online then any messages sent will have to wait until both participants are online. This makes sense because of the p2p nature, so it's something I at least am willing to deal with.</p>

<p>Another important feature is how Tox doesn't actually use usernames to find other users, but rather an ID that you have to share directly with the people you wish to add as a contact. This can sound inconvenient at first, but in reality it's actually much more convenient than usernames. Why is that? Because I don't have to search between the 20 different people called 'John Brown' or the other 30 that have some username with 'johnny' in it and then a bunch of numbers. This ID is exact. Not only that but part of it is replaceable. Let's say that someone you don't like associating with has found your ID and constantly harasses you with contact requests. You can press a button and a part of your ID will change and that person will no longer be able to find you because your ID is different. Great against spammers, right?</p>

<p>Because of this, I suggest that everyone switch to Tox, or at least to something like Ring, just please stop using non-free stuff like Google Hangouts, Skype, or especially Facetime. Which reminds me, I should do a post on why I hate Apple. I've probably shown quite a bit of hatred towards them in my blog before (and much more compared to my hatred of Microsoft). So look forward to a post hating on Apple.</p>


<?php
require 'templates/blog-footer.php';
?>
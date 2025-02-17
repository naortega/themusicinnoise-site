<?php
require 'config.php';
require '2019-09-18-how-to-split-tech-monopolies.cfg.php';
require 'templates/blog-header.php';
?>
<p>Recently we've begun to question the amount of power that large tech
companies have over our lives through our data, especially as these
companies begin to monopolize the market. Because of this, the solution
that is provided by our legal system is to split these companies. The
problem is, these companies are often multi-purposed and sell many
extremely different products, and many of these products, even if the
company were to split, would still hold a monopoly over the market. This
is the case of the Skype video conferencing tool or the Google search
engine. Even if you were to split a company such as Google based on its
products, you would still have market monopolies. Even worse, how do you
split something like Facebook which functions precisely because all your
friends, family, and acquaintances use it? If you were to split
Facebook, people would simply concentrate on the platform that had most
of their contacts on it, which would recreate the initial problem.
Simply splitting a company may have worked back when they just sold a
specific non-social product or service, like repairs, retail, etc.
However, with tech companies, especially those that rely on social
networks, need a special kind of split that allows consumers to continue
to interact with one another independently of which of the new companies
they have their account with.</p>

<p>Think about this: imagine that by contracting a given internet
service provider (ISP) you could only communicate with people (or
rather, computers) that were also connected to that ISP's network. That
is the equivalent of what social networks like Facebook and Skype do.
They make sure that if you want to communicate with someone in their
network, you must use their product and have an account with them,
therefore surrendering your personal data to that company. So how could
we allow for users to communicate with one another from separate
platforms? Well, there's already a technology that exists that shows us
how this is done: e-mail. With e-mail, it doesn't matter what server
hosts your mail, what client you use, what protocol you use to access
the e-mail server itself. How can this be? Even though e-mail is so
versatile and flexible, it uses a single protocol to send e-mails: SMTP.
It doesn't matter what service you use, where you host your mail, it all
uses SMTP to send e-mails. You could even host your own e-mail server if
you wanted to avoid relying on someone else's services!</p>

<p>So, how would this be applied to something like a social network such
as Facebook? For this we have many examples, but the one I'm most
familiar with is <a href="https://diasporafoundation.org/"
target="_blank" >Diaspora*</a> (the asterisk is actually part of the
name). When you setup an account on the Diaspora* network, you don't
register your account on any central server like you would on Facebook,
but instead you register your account on a <i>node</i>, like if you were
to register an e-mail at GMail, Yahoo!, ProtonMail, or even your own
server. Then, all your data is hosted on that node, and that node only,
but it can be shared with the friends you have on other nodes; similar
to how all your e-mails are only on the server you're registered on, but
you can send and receive e-mails from any other server. All that's
needed is for there to be a common protocol between the servers (which
Diaspora* has).</p>

<p>What about video conferencing tools, like Skype? Exact same
principle, and there's even an example: <a href="https://tox.chat/"
target="_blank" >Tox</a>. Tox isn't a program you install on your
computer, it's a network that can be accessed by <a
href="https://tox.chat/clients.html" target="_blank" >a variety of
programs</a>. Don't like how one of them works? Use a different one!
You'll still have access to all your friends because no matter the
program you choose to use, it's all connecting to the same network.</p

<p>Now you may be asking, "if this is such a wonderful idea, why haven't
companies been doing this from the start?". Put quite simply, they have
an incentive to lock users to their products, and their products alone.
Competition is great for consumers, but bad for companies since it means
they actually have to make an effort to provide a better
product/service, rather than being the only viable option around. If
there is no comparable product/service to the one provided by a single
company, then there is nowhere else for the consumer to turn, and the
company doesn't need to put any effort into swaying the consumer's
opinion with good business practices. In this sense, tech companies have
taken advantage of how social networks work (i.e. people will tend
towards the network where they know the most people) and absorbed you
into it.</p>

<p>Now, is it likely that such a solution will be implemented? No. The
most likely scenario is that these companies will not even be split, but
instead pay a (relatively very small) fine, and then continue on their
merry way abusing people's data. But there's still something you can do
about this. If you are truly worried about how your data is being used
by these massive companies, look into decentralized alternatives. I have
mentioned a few on the <a
href="https://themusicinnoise.net/decentralized.html"
>Decentralized page</a> of my website, but you can find a much more
complete list on <a href="https://prism-break.org/en/" target="_blank"
>Prism-Break</a> (although not all are decentralized... but most are).
Then, convince your friends and family to use these technologies and put
the social network effect into practice. The more people you convince to
use these technologies, the more will join, and the less power large
corporations will have over your data.</p>

<?php
require 'templates/blog-footer.php';
?>
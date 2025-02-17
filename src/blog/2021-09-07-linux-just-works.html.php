<?php
require 'config.php';
require '2021-09-07-linux-just-works.cfg.php';
require 'templates/blog-header.php';
?>
<p>Recently, after having setup my MACCHIATObin as a desktop computer, I've
decided to move most of my computing to that, and therefore my x86 laptop is
going to be mostly unused. As such I decided to install something more
low-maintenance on it since I don't want to have to fix or update it with any
special frequency. As such ArchLinux (my favorite distribution) was out of the
question, and I had to consider alternatives.</p>

<p>At this point I started considering what OS I would install on the machine,
and for a brief moment I started to consider installing Windows on it. The idea
is, naturally, that Windows provides good software support and it's famed for
being the more "stable" option... but I quickly realized just how ridiculous
this was. The fact of the matter is, unlike Windows, Linux
<em>just works</em>.</p>

<p>For a long time, Linux has gotten a bad rep for being very unstable,
requiring lots of manual configuration, and generally just being an OS for
techies (or GNU/Linux, don't <i>copypasta</i> me), and if we look at
distributions like ArchLinux or Gentoo in particular, that would definitely seem
to be true. However, this is far from being the case for all Linux
distributions. In particular, what I have decided to install on my laptop is
LinuxMint.</p>

<p>The main points I would look at as to why Linux is better as a stable OS,
even for non-techies, are the following: stability, security, and control.
Obviously, these don't apply to every distribution out there, but they
definitely do seem to apply to LinuxMint, and probably other similar
distributions.</p>

<p>Regarding stability, I think this part is obvious. Many stable distributions
put a great deal of effort into testing software before putting it into
production, making sure that it can be installed and work just as expected.
Although this means that the software may not be as bleeding-edge, you can be
sure that when you install it, it'll work as expected, and updates will not
break any currently configured behaviour. The same cannot be said for Windows,
where updates are the most dreaded experience of just about any Windows user.
Every update presents a possibility of the system breaking, of having to endure
seemingly eternal shutdown and boot processes, and of seemingly unrelated
software running into glitches and bugs because an update has been installed in
the background without the user's knowing. Comparatively, Linux provides much
more tranquility regarding updates and long-term usage.</p>

<p>With security Windows in notorious for being akin to the whore of Babylon.
Basically every bit of malware under the sun is made for Windows. And although
this isn't the fault of Microsoft - after all, this is something that would
likely happen with any OS that became sufficiently popular for PCs - it is true
that this does give a layer of extra security to your average user. Add to this
that the manner in which you install software on Linux is much more secure to
begin with: package managers. Microsoft has started to implement something
similar with their software store, but this is something that Linux has had
since the very beginning. Pretty much any program you wish to install can be
found in the software repositories, and when you install them, the downloads are
verified normally via checksum and signature verification. Although there are
probably still ways someone could sneak some malware into the repositories of a
Linux distribution, it's very unlikely, especially if you're running a
well-known stable distribution, as then someone will likely find the malware in
testing before it even reaches production.</p>

<p>Linux also provides more control. I've alluded to this before with stability,
but Linux won't do anything unless you tell it to. That is, it respects you as a
user to decide what you want to do with your computer. Whereas on Windows there
are always programs you are forbidden to uninstall, updates which are forced,
and loads of unalterable configurations, Linux let's you decide all these things
yourself. For although there may be some settings and software out of the box,
you're always free to change any of it to your liking, and therefore you are
able to personalize your environment to what is most suited to your
computing.</p>

<p>In terms of "user-friendliness", I also find that Linux is much more
intuitive and understandable, especially if you're using a distribution like
LinuxMint. We all think that Windows is super-intuitive because we're used to
it, and it has dominated personal computing; but if you spend a few years
without using it, you'll start to notice that it's actually quite a confusing
interface to use, and a lot of the ways in which things work is actually
counter-intuitive.</p>

<p>All-in-all, I think it's fair to say that, contrary to popular belief, Linux
<em>just works</em>, and is actually a really "user-friendly" OS to use. It is
simply unfortunate that it has the reputation for begin extremely technical,
which may, to an extent, be the fault of Linux users who unnecessarily
complicate a beginner's experience with advanced material that they're not ready
for or even interested in.</p>

<p>Basically, techies, if you want normal people to use Linux, stop scaring them
by telling them to install ArchLinux or alike.</p>

<?php
require 'templates/blog-footer.php';
?>
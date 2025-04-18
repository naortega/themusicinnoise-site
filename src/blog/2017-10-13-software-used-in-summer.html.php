<?php
require 'config.php';
require '2017-10-13-software-used-in-summer.cfg.php';
require 'templates/blog-header.php';
?>
<p>As someone who moves around a lot, I dislike having to bring lots of equipment with me, this includes amplifiers, keyboards, etc. Therefore, what I prefer to do is the run software that simulates these. I have used software <a href="http://zynaddsubfx.sourceforge.net/" target="_blank" >ZynAddSubFX</a> and <a href="https://lmms.io/" target="_blank" >LMMS</a> in previous albums, but I've also experimented before with tools that I'm using for the new album, <a href="/projects/music/summer/" ><i>Summer</i></a>.</p>

<p>One of my primary tools with this album is <a href="http://guitarix.org/" target="_blank" >Guitarix</a>, a virtual guitar amplifier with many effects. In this sense, I find Guitarix to be a lot more useful than an actual amplifier, since it already comes with many effects that otherwise I'd have to get individual pedals for each new effect. What's more, since it works with <a href="https://en.wikipedia.org/wiki/JACK_Audio_Connection_Kit" target="_blank" >JACK</a> I'm able to plug in different sound inputs (including synthesizers) as well as choosing where to send the output of the program. I manage this through the <a href="https://qjackctl.sourceforge.io/" target="_blank" >QjackCtl</a>, which makes plugging the different inputs/outputs very simple. In order to plug in the guitar I use a special cable that has a jack pin on one end and a USB connector on the other (no need for microphones with background noise).</p>

<p>For the percussion I've been working with the <a href="http://www.hydrogen-music.org/hcms/" target="_blank" >Hydrogen drum machine</a>, which has proven itself simple for programming drum patterns, which is important for someone like me who isn't very big into drums, although while working on this album I've started to pay more attention to drums in similar music to that of <i>Summer</i>. I am also continuing my usage of ZynAddSubFX for any synthesizer work that's needed.</p>

<p>For the bass guitar I've simply been using my guitar and dropping the frequency an octave. With the acoustic recordings I've done so far it hasn't turned out exactly how I wanted it to, but it seems as though it works nicely with the electric guitar hooked into Guitarix, so I may be rerecording the bass for the acoustic songs in this album.</p>

<p>Of course, all final editing/mastering is done in <a href="http://www.audacityteam.org/" target="_blank" >Audacity</a>. This tool has proven itself to be extremely effective overall for music editing.</p>

<p>Upon publishing the album I'll also publish a source tar ball like I did last time with <a href="/projects/music/dreaming-in-bytes/" ><i>Dreaming in Bytes</i></a>. Here I'll be adding as much as I can so that my song can be remixed with ease (instead of having to do any sort of half-assed frequency cuts to extract a track from the song). This will most definitely include the audacity project for the songs, the hydrogen drum pattern files, and any presets that I can provide.</p>

<p>As an appended news on the album's progress, it's currently slowed down a bit, but I'm hoping to release it in time for the summer of 2018. It all depends on the time I have and when my creative juices begin to flow.</p>


<?php
require 'templates/blog-footer.php';
?>
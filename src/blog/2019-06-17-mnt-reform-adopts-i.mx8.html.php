<?php
require 'config.php';
require '2019-06-17-mnt-reform-adopts-i.mx8.cfg.php';
require 'templates/blog-header.php';
?>
<p>For a while now I've been following the progress of the world of ARM computing, especially relating to personal computing. One of the projects I've been following is the <a href="https://mntre.com/reform/" target="_blank" >MNT Reform</a> (which I mentioned in my last post on ARM). The Reform is a modular laptop with open-source casing that can easily be 3D printed for replacement. In its original model it used the i.MX6QP, which had 4 cores with a frequency of 1.2GHz and the Vivante GC3000 GPU, which had up to OpenGL ES 3.1. However, in May for the re-introduction of the Reform they announced <a href="https://www.crowdsupply.com/mnt/reform/updates/re-introducing-reform" target="_blank" >they would be upgrading the chip from the i.MX6 to the i.MX8</a>. This has quite a few benefits to it, most importantly being the <a href="https://en.wikipedia.org/wiki/I.MX#i.MX_8_series" target="_blank" >introduction of Vulkan support</a> with i.MX8's integrated GPU (which uses free drivers). This means a lot more power for the ARM laptop, and shows how ARM can push into the realm of personal computing.</p>

<p>For most people interested in FLOSS computers, the MNT Reform seems to be providing a modern computer with freedom respecting hardware, while avoiding any kind of management engines like with Intel's x86 CPUs. With a GPU supporting Vulkan we can hope to see a laptop that will be good for FLOSS gaming as well as other GPU intensive tasks (such as 3D modeling).</p>


<?php
require 'templates/blog-footer.php';
?>
<?php
require 'config.php';
require '2016-11-29-non-free-firmware.cfg.php';
require 'templates/blog-header.php';
?>
<p>One of the largest struggles in the Free Software movement is that against non-free firmware. This is because firmware tends to be very difficult to replace, often completely tied to the hardware of the computer. Yet my opinion on the extension of freedom into this field is very iffy because of how firmware, by definition, is almost impossible to modify. Therefore the question is should we be as concerned about freedoms 1-3 with firmware? I would argue that freedom 0 is always important as it is what allows the user to use the program for whatever purpose, and therefore firmware is no more special in this regard.</p>

<p>For freedom 1, the freedom to analyze the code and change it, I believe that the first part of analyzing the code is important, as it helps to make sure that the software does what it says it does. However, the second part is a little less clear. Since it is firmware and cannot necessarily be changed that means that any changes made to the code are somewhat futile. However, it could be said that a change in the source-code is good for community improvements to the code or providing alternatives for someone else who has the resources to manufacture alternative hardware containing the modified firmware. So I leave that up in the air. In this sense freedom 1 is quite necessary for firmware.</p>

<p>Freedom 2 does not make much sense in terms of firmware since distribution of the firmware is just distribution of the hardware, which is already considered legal since it's not making a copy. So I would say that this kind of distribution is already protected by law in most countries with regards to firmware.</p>

<p>Freedom 3 is the tricky one. Taking into account what I said in the second part of freedom 1 it could sway either way. This freedom would essentially be the ability to manufacture alternative hardware that contains modified versions of the firmware. For this a community is extremely important. So this freedom, as well, is also very up in the air.</p>

<p>Of course, if possible it's always best to buy hardware that uses freedom respecting firmware. However, I do not see it as being as important as software in most cases, especially since firmware is not always changeable anyways therefore restricting freedom 1 by definition. That said, it is a different issue that manufacturers are putting more and more of the user's computing onto the hardware component itself and its firmware, and although this may yield more due to less load on the CPU it does take away power from the user and therefore the user's freedom. If the firmware simply does the minimal amount and then leaves most of the work to the drivers then the firmware being non-free is not as problematic so long as the drivers are freedom respecting. However, if the firmware is doing a good portion of the computing then it becomes rather problematic. These devices should be avoided at all costs since the user never has control over them.</p>


<?php
require 'templates/blog-footer.php';
?>
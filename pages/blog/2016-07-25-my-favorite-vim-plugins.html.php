<?php
require 'config.php';
require '2016-07-25-my-favorite-vim-plugins.cfg.php';
require 'templates/blog-header.php';
?>
<p>I've already made post about my favorite Firefox addons, so this one is dedicated to my favorite editor, Vim. Most people's first encounter with Vim is always a bad one (even mine), but once I got used to it's weird key bindings and commands I got used to it and now I quite enjoy it, especially with all of its plugins available that are very easy to install with a plugin called <a href="https://github.com/VundleVim/Vundle.vim" target="_blank" >Vundle</a>, which can be used to install all the other plugins by simply providing a link to their git repository (since most of these plugins tend to be on GitHub). So here it goes.</p>

<p><a href="https://github.com/tpope/vim-fugitive" target="_blank" ><u>Vim-Fugitive</u></a>: This plugin is great since it allows you to work with Git from within Vim, that is, you can commit, switch branches, push, or anything really, all from within Vim.</p>

<p><a href="https://github.com/wincent/command-t" target="_blank" ><u>Command-T</u></a>: This plugin is nice since this makes it easier to navigate files, all you need to do is run `<leader>t' and you'll get a list where you can search for files within your project by name.</p>

<p><a href="https://github.com/Valloric/YouCompleteMe" target="_blank" ><u>YouCompleteMe</u></a>: What would I do without 'YouCompleteMe'? As you can probably guess by the name this plugin autocompletes. It searches through your document and files you've opened in the session to help you autocomplete your code (or even writings, I often find myself autocompleting long words on essays and even these blog posts). So, basically, this is a must have.</p>

<p><a href="https://github.com/scrooloose/nerdcommenter" target="_blank" ><u>Nerd Commenter</u></a>: This is a nice plugin that will help you comment your code. It has many keyboard shortcuts for different kinds of commenting (block, single line, etc.), and it adjusts the character which it uses by file based on the language the file is in. Pretty nice when you have to comment a lot of stuff, just highlight them in visual mode and use the keyboard shortcut.</p>

<p><a href="https://github.com/vhdirk/vim-cmake" target="_blank" ><u>vim-cmake</u></a>: I work a lot with C++, and because of that I have to deal a lot with CMake compiling. So why not compile my code from within Vim? With this plugin I simply run ':CMake' and then ':make' and it compiles my code. This command will search downward for a build/ directory in which it will run `cmake ..' (../ being where the CMakeLists.txt file is).</p>

<p><a href="https://github.com/teneighty/vim-ant" target="_blank" ><u>vim-ant</u></a>: Well, I already have a vim-cmake, so why not ant too? I also work with Java every now and then, and ant is one of my prefered tools for doing my compiling (I've never really looked into Gradle), so this script runs the build.xml for your Java project from within Vim!</p>

<p><a href="https://github.com/vim-scripts/Trailer-Trash" target="_blank" ><u>Trailer-Trash</u></a> & <a href="https://github.com/vim-scripts/bad-whitespace" target="_blank" ><u>Bad-Whitespace</u></a>: These two make a perfect pair. The first one, Trailer-Trash, points out in red any trailing whitespaces. I hate those things, they're extra characters that I don't even know that they're there. Now I can see them, and with Bad-Whitespace I can delete all of them in one command (which, in a sense, defeats the purpose of seeing them, but oh well).</p>

<p><a href="https://github.com/chilicuil/vim-sprunge" target="_blank" ><u>vim-sprunge</u></a>: I work in collaboration with other people, and sometimes I need to share snippets of code I have not yet commit, but going to a pastebin in the web browser is a bit of a pain. So this plugin exists so I simply have to run a command and it will give me a link to a file on Sprunge where my code has been posted for my comrades to see it. I don't even have to exit Vim.</p>

<p>Of course, I use more than these, but these are the ones I like the most. I will most likely end up installing way more in the future, but these are truly useful.</p>


<?php
require 'templates/blog-footer.php';
?>
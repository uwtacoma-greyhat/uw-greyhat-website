        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/greyhat">Grey Hat Group</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li<?php if ('home' === $navactclass) { ?> class="active" <?php } ?>><a href="/greyhat">Home</a></li>
                            <li<?php if ('about' === $navactclass) { ?> class="active" <?php } ?>><a href="/greyhat/about">About</a></li>
                            <li<?php if ('meetings' === $navactclass) { ?> class="active" <?php } ?>><a href="/greyhat/meetings">Meetings</a></li>
			<?php if (false) { ?>
                            <li<?php if ('resources' === $navactclass) { ?> class="active" <?php } ?>><a href="/greyhat/resources">Resources</a></li>
			<?php } ?>
                            <li<?php if ('contact' === $navactclass) { ?> class="active" <?php } ?>><a href="/greyhat/contact">Contact</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
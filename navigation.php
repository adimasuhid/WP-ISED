<div class='header container'>
  <div class="navbar margin">
    <div class="navbar-inner height">
      <a class="brand" href="<?php echo get_option('home');?>">ISED</a>
      <ul class="nav">
        <li class="divider-vertical"></li>
        <li <?php if (is_page(9)) echo 'class="dropdown active"'; else echo 'class="dropdown"';?>>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            What is Social Enterprise
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu">
            <li><a tabindex="-1" href="#">Link1</a></li>
            <li><a tabindex="-1" href="#">Link2</a></li>
            <li><a tabindex="-1" href="#">Link3</a></li>
            <li class="divider"></li>
            <li><a tabindex="-1" href="<?php echo get_page_link('9'); ?>">Social Enterprise</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            About ISED
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu">
            <li><a tabindex="-1" href="#">Link1</a></li>
            <li><a tabindex="-1" href="#">Link2</a></li>
            <li><a tabindex="-1" href="#">Link3</a></li>
          </ul>
        </li>
    		<?php wp_list_pages('title_li=&exclude=9'); ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Join Us 
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu">
            <li><a tabindex="-1" href="#">Link1</a></li>
            <li><a tabindex="-1" href="#">Link2</a></li>
            <li><a tabindex="-1" href="#">Link3</a></li>
          </ul>
        </li>
    	</ul>
    </div>
  </div>
</div>

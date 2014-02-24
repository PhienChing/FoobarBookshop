<?php
$base_url = $this->config->item('base_url'); 
$assets = $this->config->item('assets');
?>

<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="#"><i class="fa fa-book"></i> <small>FOOBARBOOKSHOP</small></a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  </ul>

  <section class="top-bar-section">
    <ul class="right">
      <li class="has-dropdown">
        <a href="#"><i class="fa fa-gear"></i></a>
        <ul class="dropdown">
          <li><a href="#" data-reveal-id="viewProfile" data-reveal><i class="fa fa-user"></i> View Profile</a></li>
          <li><a href="#" data-reveal-id="editProfile" data-reveal><i class="fa fa-pencil-square-o"></i> Edit Profile</a></li>
          <li class="divider"></li>
          <li><a href="index.php/logout"><i class="fa fa-sign-out"></i>Log Out</a></li>
        </ul>
      </li>
    </ul>

    <ul class="left">
      <li class="has-form">
        <div class="row collapse">
          <div class="large-8 small-9 columns">
            <input type="text" placeholder="Find Stuff">
          </div>
          <div class="large-4 small-3 columns">
            <a href="#" class="alert button expand"><i class="fa fa-search"></i> Search</a>
          </div>
        </div>
      </li>
    </ul>
  </section>
</nav>

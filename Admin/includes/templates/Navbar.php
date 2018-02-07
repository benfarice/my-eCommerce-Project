<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php echo lang('Home');?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-nav" aria-controls="app-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="app-nav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#"><?php echo lang('Categories');?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><?php echo lang('link');?></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          imzoughene 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><?php echo lang('Edit_Profile');?></a>
          <a class="dropdown-item" href="#"><?php echo lang('Settings');?></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><?php echo lang('Logout');?></a>
        </div>
      </li>
  
    </ul>
  
  </div>
</nav>
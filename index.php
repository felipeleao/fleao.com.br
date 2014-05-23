<?php 
  include_once("./config/constants.php");
  include_once("./template/header.tpl.php"); 
?>


  <!-- Main component for a primary marketing message or call to action -->
  <div class="jumbotron extra-margin">
      <h1 class="title">Super User</h1>
      <h2>Developer, Researcher, Shodan and Surfer Apprentice.</h2>
      <p>Living in Rio de Janeiro (Brazil) and currently working as a Systems Analyst. Also pursuing the Master's degree in Information Systems (Knowledge Representation and Reasoning).</p>
      
      <img src="<?= IMAGES_ROOT; ?>/floreio2.png" class=".img-responsive floreio" alt="flourish">
      
      <p class="lead">
          <small>
            <span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;&nbsp;System Analyst @ Petrobras
            <br/>
            <span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;&nbsp;M.Sc. Candidate @ UNIRIO (RJ/Brazil)
          </small>
      </p>
  </div>



<?php include_once("./template/footer.tpl.php"); ?>
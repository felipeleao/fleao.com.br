
<?php
  include_once("../config/constants.php");
  include_once("../template/header.tpl.php");
?>


  <!-- Main component for a primary marketing message or call to action -->
  <div class="full-page-content">


    <h1>Researches</h1>

    <p>This section describes my ongoing researches and those I have participated in the past. All the work described
    here was developed either with the <a target="_blank" href="https://sites.google.com/site/np2tec/">NP2Tec Research Group</a>
    or along with professors from <a target="_blank" href="http://www.unirio.br/">UNIRIO</a> as requirements for courses
    and the degrees of B.Sc. and M.Sc.</p>



    <h3>Table of Contents</h3>
    <ol>
      <li><a href="#OntologyLearning">Automatically Learning Well-founded Ontologies through NLP</a> <span class="ongoing">(ongoing)</span></li>
      <li><a href="#ModelMining">Knowledge Models Mining</a></li>
      <li><a href="#Orion">ORION - A Framework for Ontology Refinement through Theory Revision Techniques</a></li>
      <li><a href="#PropId">Data Access Control through Identity Propagation</a></li>
    </ol>

    <div id="push"></div>

    <h2><a name="OntologyLearning"></a>Automatically Learning Well-founded Ontologies through NLP <span class="ongoing">(ongoing)</span></h2>
    <p>This project is currently under development and aims at defining a method to automatically build well-founded ontologies. These are a
    class of ontologies modeled based on well-founded modelling languages, which are based on Foundational Ontologies (a.k.a Upper
    Ontologies or Top-Level Ontologies). Examples of Foundational Ontologies are:</p>
    <ul>
      <li><a href="http://www.ontologyportal.org/">Suggested Upper Merged Ontology</a> (SUMO)</li>
      <li><a href="http://www.loa.istc.cnr.it/old/DOLCE.html">Descriptive Ontology for Linguistic and Cognitive Engineering</a> (DOLCE)</li>
      <li><a href="https://oxygen.informatik.tu-cottbus.de/drupal7/ufo/">Unified Foundational Ontolgy</a> (UFO)</li>
    </ul>
    <p>In order to achieve an automatic method we combine multiple Natural Language Processing (NLP) techniques, along with a semantic
    extension of <a href="http://wordnet.princeton.edu/">Wordnet</a> and a mapping of Semantic Types to OntoUML (a well-founded modelling
    language based on UFO).</p>
    <p>At first some preprocessing NLP techniques are applied to a text describing the target domain. Afterwards the resulting preprocessed.
    data is ran through a Semantic Role Labeler, in order to detect the main nouns and verbs that should pose as concepts and relations,
    respectively. Since words can have multiple meanings a Word Sense Disambiguation tool is used to find the intended meaning to each
    main noun given the context in which they are used. The WSD tool must use the Wordnet as lexical database. The identified senses
    are used. Onde the intended meanings are determined we map them to Semantic Types, a set of classes aiming at gathering words according
    to shared characteristics. By applying heuristcs, Semantic types are then mapped to OntoUML constructs, enabling the construction
    of well-founded ontologies.</p>
    <img src="<?=IMAGES_ROOT?>/OntologyLearning.png" class="img-responsive"/>

    <div id="push"></div>









    <h2><a name="ModelMining"></a>Knowledge Models Mining</h2>

    <div id="push"></div>









    <h2><a name="Orion"></a>ORION - A Framework for Ontology Refinement through Theory Revision Techniques</h2>
    <img src="<?=IMAGES_ROOT?>/ORION.png" class="img-responsive"/>

    <div id="push"></div>








    <h2><a name="PropId"></a>Data Access Control through Identity Propagation</h2>
    <img src="<?=IMAGES_ROOT?>/IdentityPropagation.png" class="img-responsive"/>


    <div id="push"></div>
    <hr class="hr-dashed" />

    <p>If you would like further information about the projects described here, please refer to the <a href="<?=SITE_URL;?>/publications">Publications</a> section.</p>


  </div>



<?php include_once("../template/footer.tpl.php"); ?>

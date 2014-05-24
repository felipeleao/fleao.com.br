
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
    <p>A research focused on implementing, at a comercial level, proposals for learning knowlege models such as Business Process Models,
    Ontologies and Mind Maps. The models are learned from texts based on Natural Language Processing Techniques.The project started as a research project at
    <a target="_blank" href="https://sites.google.com/site/np2tec/">NP2Tec</a> and was later turned into a set of applications at
    <a target="_blank" href="http://www.se7ti.com.br">Se7Ti</a>. This work derived in the systems
    <a target="_blank" href="http://www.se7ti.com.br/solucoes/?prod=17">teXplore</a> and
    <a target="_blank" href="http://www.se7ti.com.br:8080/conti/login">ConTi</a>.</p>

    <div id="push"></div>









    <h2><a name="Orion"></a>ORION - A Framework for Ontology Refinement through Theory Revision Techniques</h2>
    <p>The usefulness of a domain Ontology depends on the accuracy with which its structure and axioms are able to represent
    the real world semantics. Given the dynamic nature of several domains, new observations of the real world continuously
    arise, possibly inconsistent with the domain conceptualization encompassed by the ontology. These observations may
    trigger the ontology to be revised. However, the manual modification of an ontology is very costly and complex, especially
    in domains where there is a significant number of observed facts, or where the specification of the required modifications
    is not trivial to be defined. In these scenarios, a computational support is required to help the ontologist to come up
    correct and consistent model. The picture below describes the general architecture proposed and impolemented.</p>
    <ul>
      <li><strong>Step 1</strong>  - The current ontology, alng with its instances and new facts is submited to ORION and converted to Horn Clauses;</li>
      <li><strong>Step 2</strong>  - The Horn clause convertion results in a set of three files. The first two contain the current theory and axioms that
      are represented by the ontology, while the third comprises the positive and negative examples, corresponding to things that the
      revised theory should be able to represent and restrictions that it should impose to avoid certain false assertions.</li>
      <li><strong>Step 3</strong>  - The files are submitted to FORTE, a first order theory revision system that outputs a new set of revised axioms that
      must compose the theory.</li>
      <li><strong>Step 4</strong>  - The new axioms are used to build a revised version of the original ontology able to accept the new facts as instances
      and avoid the things that should no longer be accepted as valid instances.</li>
    </ul>
    <img src="<?=IMAGES_ROOT?>/ORION.png" class="img-responsive"/>

    <div id="push"></div>








    <h2><a name="PropId"></a>Data Access Control through Identity Propagation</h2>
    <img src="<?=IMAGES_ROOT?>/IdentityPropagation.png" class="img-responsive"/>


    <div id="push"></div>
    <hr class="hr-dashed" />

    <p>If you would like further information about the projects described here, please refer to the <a href="<?=SITE_URL;?>/publications">Publications</a> section.</p>


  </div>



<?php include_once("../template/footer.tpl.php"); ?>

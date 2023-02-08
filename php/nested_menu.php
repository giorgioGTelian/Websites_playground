<nav class="tree-nav">

  <details class=" is-expandable" open>
    <summary class=""><img class="home-logo" src="./svg/home.svg"/>  Home</summary>

    <?php
      function createDetails($title, $content) {
        echo '<details class="tree-nav__item is-expandable">';
        echo '<summary class="tree-nav__item-title">' . $title . '</summary>';
        echo '<div class="tree-nav__item">' . $content . '</div>';
        echo '</details>';
      }
    ?>

    <?php
      createDetails("Products", '<details class="tree-nav__item is-expandable">
        <div class="active"></div>
        <summary class="tree-nav__item-title"> Furniture</summary>
        <details class="tree-nav__item is-expandable">
          <summary class="tree-nav__item-title">Sofa & Armchairs</summary>
          <details class="tree-nav__item is-expandable">
            <summary class="tree-nav__item-title">Sofas</summary>
            <div class="tree-nav__item"></div>
          </details>
          <details class="tree-nav__item is-expandable">
            <summary class="tree-nav__item-title">Armchairs</summary>
            <div class="tree-nav__item"></div>
          </details>
          <details class="tree-nav__item is-expandable">
            <summary class="tree-nav__item-title">Easychairs</summary>
            <div class="tree-nav__item"></div>
          </details>
          <details class="tree-nav__item is-expandable">
            <summary class="tree-nav__item-title">Chaise Longues</summary>
            <div class="tree-nav__item"></div>
          </details>
          <details class="tree-nav__item is-expandable">
            <summary class="tree-nav__item-title">Poufs</summary>
            <div class="tree-nav__item"></div>
          </details>
        </details>
        <details class="tree-nav__item is-expandable">
          <summary class="tree-nav__item-title">Tables & Chairs</summary>
        </details>
        <details class="tree-nav__item is-expandable">
          <summary class="tree-nav__item-title">Storage System</summary>
        </details>
        <details class="tree-nav__item is-expandable">
          <summary class="tree-nav__item-title">Sleeping Area</summary>
        </details>
      </details>');
      
      createDetails("Lighting", "");
      createDetails("Outdoor", "");
      createDetails("Office", "");
    ?>

    <details class="tree-

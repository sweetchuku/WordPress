<?php
/**
 * /* Template Name: home 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Math_Calculator
 */

get_header();

?>
<div class="container">
  <div class="calculator">
    <div class="readout"></div>
    <div class="keypad">
      <div class="clears">
        <button id="clear">C</button>
        <button id="all-clear">AC</button>
        <button id="back">&#8592;</button>
      </div>
      <div class="functions">
        <button id="memory-save">MS</button>
        <button id="memory-recall">MR &#9660;</button>
        <ul class="memory-list"></ul>
        <button id="memory-clear">MC</button>
      </div>
      <div class="grid">
        <div class="numpad col-3-5">
          <div class="row">
            <button id="seven">7</button>
            <button id="eight">8</button>
            <button id="nine">9</button>
          </div>
          <div class="row">
            <button id="four">4</button>
            <button id="five">5</button>
            <button id="six">6</button>
          </div>
          <div class="row">
            <button id="one">1</button>
            <button id="two">2</button>
            <button id="three">3</button>
          </div>
          <div class="row">
            <button id="zero">0</button>
            <button id="decimal">.</button>
            <button id="inverse">&#177;</button>
          </div>
        </div>
        <div class="operations col-2-5">
          <div class="grid">
            <div class="left col-1-2">
              <button id="divide">&#247;</button>
              <button id="multiply">&#215;</button>
              <button id="minus">-</button>
              <button id="plus">+</button>
            </div>
            <div class="right col-1-2">
              <button id="exponent">^</button>
              <button id="square-root">&#8730;</button>
              <button id="percent">%</button>
              <button id="equals">=</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php

get_footer();
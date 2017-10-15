/**
 * Custom JS.
 *
 * Custom JS scripts.
 *
 * @since 1.0.0
 */

 'use strict';

var menuAnimation = function() {
  /**
   * Selectors for Mobile Nav Animation
   */
  var menuButton = document.querySelector("#menu-button");
  var sideMenu = document.querySelector("#side-menu");
  var overlay = document.querySelector("#overlay");

  var open = false;

  /**
   * Menu Button Event Listener
   * @type {TimelineMax}
   */
  menuButton.addEventListener("click", function() {
    if (!open) {
      var show = new TimelineMax();

      show.to(sideMenu, 0.2, {ease: "Power2.easeIn", marginLeft: 0}, "0")
      .to(overlay, 0.2, {ease: "Power2.easeIn", display: "block", opacity: 1}, "0");

      show.play();
      open = true;
    }
  });

  /**
   * Overlay Event Listener
   * @type {TimelineMax}
   */
  overlay.addEventListener("click", function() {
    if (open) {
      var hide = new TimelineMax();

      hide.to(sideMenu, 0.2, {ease: "Power2.easeIn", marginLeft: -240}, "0")
      .to(overlay, 0.2, {ease: "Power2.easeIn", display: "none", opacity: 0}, "0");

      hide.play();
      open = false;
    }
  });
};

var menu = new menuAnimation();

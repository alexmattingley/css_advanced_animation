# css_advanced_animation

Demonstration can be found <a href="http://learning-fuze.github.io/css_advanced_animation/" target="_blank">here</a>

## Things to note:
- Animations are layered:
  - wiggle animation is on nested element
  - square running animation is on parent element
- Note the "animation-fill-mode" so that it doesn't reset at the end and cause a skip
- The "keyframes bug_dance" directive gives a sort of script based upon the percentage of the total animation time
  - This can also be done with the "from" and "to" directives to go between two different points

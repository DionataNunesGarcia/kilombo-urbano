/**
 * @file
 * Kilombo behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.kilomboTheme = {
    attach: function (context, settings) {
      console.log('It works!');
    }
  };

  document
    .querySelector(".btn-copy")
    .addEventListener("click", () => {
      let input = document.querySelector(".value-copy");
      input.select();
      const copyed = document.execCommand("copy");
      console.log("copied "+input.value)
      alert('Conteúdo copiado com sucesso!')
    })
} (Drupal));

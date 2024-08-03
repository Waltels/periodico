// npm package: tinymce
// github link: https://github.com/tinymce/tinymce

$(function() {
  'use strict';

  //Tinymce editor
  if ($("#tinymceExample").length) {
    tinymce.init({
      selector: '#tinymceExample',
      min_height: 250,
      default_text_color: 'red',
      plugins: [
        'advlist', 'autoresize', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen',
      ],
      toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      image_advtab: false,
      templates: [

        {
          title: 'Test template 2',
          content: 'Test 2'
        }
      ],
      content_css: []
    });
  }

});
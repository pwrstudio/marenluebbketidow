// app.js
(function () {
  'use strict'
  const $ = require('jquery')
  $(function () {
    let topMenuItem = $('.menu-item:first-child')
    window.location.hash = topMenuItem.attr('href')
    topMenuItem.addClass('active-section-link')
    $(document).on('click', '.menu-item', function () {
      $('.active-section-link').removeClass('active-section-link')
      $(this).addClass('active-section-link')
    })
    $(document).on('click', '.search-button', function () {
      $('#search').addClass('active-search')
      $('input[name=s]').focus()
    })
    $(document).on('blur', 'input[name=s]', function () {
      $('#search').removeClass('active-search')
      $('input[name=s]').val('')
    })
  })
}())

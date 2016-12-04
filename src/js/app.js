// app.js
(function () {
  'use strict'
  const $ = require('jquery')
  $(function () {
    if (window.location.hash) {
      $('[href="' + window.location.hash + '"]').addClass('active-section-link')
      $('body').addClass('lightbox')
    } else if(!$('body').hasClass('page-about')) {
      let topMenuItem = $('.menu-item').first()
      window.location.hash = topMenuItem.attr('href')
      topMenuItem.addClass('active-section-link')
    }
    if($('body').hasClass('page-about')) {
      $('.main-menu-item.about a').addClass('active')
    } else if($('body').hasClass('page-texts')) {
      $('.main-menu-item.texts').addClass('active')
    } else if($('body').hasClass('page-editorial')) {
      $('.main-menu-item.editorial').addClass('active')
    } else if($('body').hasClass('page-curatorial')) {
      $('.main-menu-item.curatorial').addClass('active')
    } else if($('body').hasClass('page-various')) {
      $('.main-menu-item.various').addClass('active')
    }
    $(document).on('click', '.menu-item', function () {
      $('.active-section-link').removeClass('active-section-link')
      $(this).addClass('active-section-link')
      $('body').addClass('lightbox')
    })
    $(document).on('click', '#close', function () {
      $('body').removeClass('lightbox')
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

$(document).ready(function() {
  $('#left-menubar-toggle').click(function() {
    $this = $('#left-menubar')
    if ($this.css('left') == '-240px') {
      _menuLeft = '0'
      _contentLeft = '250'
    }
    else if ($this.css('left') == '0') {
      _menuLeft = '-240'
      _contentLeft = '10'
    }
    $('#left-menubar').animate({left: _menuLeft}, 1000)
    $('#contents').animate({left: _contentLeft}, 1000)
  })

  onMenubarLinkClick = function(e) {
    $this = $(this)
    hash = $this.attr('data-target')
    offset = $(hash).offset().top - $('#contents').offset().top
    $this.parent().addClass('active').siblings().removeClass('active')
    $('#contents').animate({scrollTop: "+="+offset}, function () {
      window.location.hash = hash
    })
    return false
  }

  initMenubarLink = function(e) {
    hash = window.location.hash
    $("a[data-target='"+hash+"']").parent().addClass('active')
  }

  initMenubarScroll = function(e) {
    hash = window.location.hash
    $curLink = $("a[data-target='"+hash+"']")

    $curHeader = $curLink.parents().prevAll('.nav-header:first()')
    $('#left-menubar .nav').animate({scrollTop: $curHeader.offset().top - 200}, 500)
  }

  initMenubarLink();
  initMenubarScroll();
  $('a[data-target^="#"]').bind('click', onMenubarLinkClick)
  hljs.initHighlighting();
})
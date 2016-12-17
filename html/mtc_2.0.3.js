$(function () {
    // Do not upload to any online repository

  console.log('Forum Enhancement v2.0.3 by Kadauchi');

  jQuery.extend(jQuery.fn, { within: function (pSelector) { return this.filter(function () { return $(this).closest(pSelector).length; }); } });

  var settings = JSON.parse(localStorage.getItem('settings')) || {media: false, hits: false, condense: false, masters: false, fix: false, notify: false, sound: false};

  var options =
      '<ul class="secondaryContent blockLinksList checkboxColumns">' +
      '<li><label><input type="checkbox" id="media" ' + (settings.media ? 'checked' : '') + '> Spoiler Media</label></li>' +
      '<li><label><input type="checkbox" id="hits" ' + (settings.hits ? 'checked' : '') + '> HITs Only</label></li>' +
      '<li><label><input type="checkbox" id="condense" ' + (settings.condense ? 'checked' : '') + '> Condense HITs</label></li>' +
      '<li><label><input type="checkbox" id="masters" ' + (settings.masters ? 'checked' : '') + '> Hide Masters</label></li>' +
      '<li><label><input type="checkbox" id="fix" ' + (settings.fix ? 'checked' : '') + '> Fix Link Colors</label></li>' +
      '<li><label><input type="checkbox" id="notify" ' + (settings.notify ? 'checked' : '') + '> New HIT Notify</label></li>' +
      '<li><label><input type="checkbox" id="sound" ' + (settings.sound ? 'checked' : '') + '> New HIT Sound</label></li>' +
      '</ul>'
  ;

  var $threadtools = $('div[id^="XenForoUniq"]:contains(Thread Tools), div[id^="XenForoUniq"]:contains(Live Update)');

  if ($threadtools.length) {
    $threadtools.append(options);
  }

  // Puts images and media behind a spoiler tag
  function Media () {
    if (settings.media) {
      $('img:not(.smedia, .mceSmilie, .mceSmilieSprite, [alt^="@"], [src*="data.istrack.in/t"]), iframe:not(.smedia)').within('.messageContent').each(function () {
        if (!$(this).parents('.bbCodeSpoilerContainer').length) {
          $(this).addClass('smedia').hide().before('<div class="media"><button type="button" class="media button"><span>Spoiled Image/Media</span></button></div>');
        }
      });
    }
    else {
      $('.smedia').removeClass('smedia');
      $('button.media').parent().next().show();
      $('.media').remove();
    }
  }

  // Hide posts without a link to mturk or prolific and adds a toggle button
  function HITs () {
    if (settings.hits) {
      $('li[id^="post-"]:not(.nohit)').not(':has([href^="https://www.mturk.com/"], [href^="https://www.prolific.ac/studies/"])').each(function () {
        $(this).addClass('nohit').hide().before('<button class="nonhit primaryContent" type="button" title="A post without a link to mturk.com has been hidden. Click to toggle visibility." style="font-size: 10px; width: 100%; background-color : transparent; border: solid 1px black;"><a href="javascript:void(0);">Show Non HIT Post</a></button>');//<br class="nonhit">
      });
    }
    else {
      $('.nohit').removeClass('nohit');
      $('button.nonhit').next().show();
      $('.nonhit').remove();
    }
  }

  // Hides Masters HITs behind a spoiler tag
  function Masters () {
    if (settings.masters) {
      $('.ctaBbcodeTable:contains(Masters has been granted):not(.master), .ctaBbcodeTable:contains(Masters Exists):not(.master)').each(function () {
        $(this).addClass('master').hide().before('<div class="masters"><button type="button" class="masters button";>Masters HIT</button></div>');
      });
    }
    else {
      $('.master').removeClass('master');
      $('button.masters').parent().next().show();
      $('.masters').remove();
    }
  }

  // Removes bbcode coloring from links
  function Fix () {
    if (settings.fix) {
      $('.messageContent').find('a').children().css({'color' : ''});
    }
  }

  // Adds a PandA link next to preview links
  function AddPanda () {
    $('a[href*="/mturk/preview?"]:not(.panda)').each(function () {
      if ($(this).addClass('panda').next().text() !== 'PANDA') {
        var panda = $(this).prop('href').replace('preview?', 'previewandaccept?');
        $(this).after(' &nbsp;|&nbsp; <a href="' + panda + '" target="_blank">PANDA</a>');
      }
    });
  }

  // Condenses the default HIT export into a single line
  function Condense () {
    if (settings.condense){
      $('.ctaBbcodeTable:not(.condensed)').each(function () {
        if (($(this).find('a[href^="https://www.mturk.com/mturk/preview?"], a[href^="https://www.mturk.com/mturk/searchbar?"]').length) && ($(this).find(':contains(Reward:)').length) &&  ($(this).parents('.messageText').length)) {

          $(this).addClass('condensed').find('.ctaBbcodeTableRowTransparent').addClass('hidecondensed');

          var req = $(this).find('b:contains(Requester:)').next().text();
          var reqlink = $(this).find('b:contains(Requester:)').next().prop('href');
          var title = $(this).find('b:contains(Title:)').next().text();
          var titlelink = $(this).find('b:contains(Title:)').next().prop('href');
          var reward = $(this).find(':contains(Reward:)').next().text().replace(/[^0-9.]/g, '');
          var acclink = titlelink.replace('preview?', 'previewandaccept?');
          var available = $(this).text().match(/(Available:)(\s){0,10}([0-9.]{0,10})/g) ? $(this).text().match(/(Available:)(\s){0,10}([0-9.]{0,10})/g).toString().replace(/[^0-9]/g, '') : 'N/A';
          var topay  = $(this).text().match(/([0-9.]{4})(\s){0,10}(Gene)|(Pay:)(\s){0,10}([0-9.]{4})/g) ? $(this).text().match(/([0-9.]{4})(\s){0,10}(Gene)|(Pay:)(\s){0,10}([0-9.]{4})/g).toString().replace(/[^0-9.]/g, '') : 'N/A';
          var tolink = $(this).find('a[href*="turkopticon.ucsd.edu/"]').prop('href');
          var torevewiers = $(this).text().match(/(Reviews:)(\s){0,10}([0-9.]{0,10})/g) ? $(this).text().match(/(Reviews:)(\s){0,10}([0-9.]{0,10})/g).toString().replace(/[^0-9]/g, '') : 'N/A';

          var html =
              '<tr class="condensedhit">' +
              '<td><a href="' + reqlink + '" target="_blank">' + req + '</a></td>' +
              '<td><a href="' + titlelink + '" target="_blank" class="pandad">' + title + '</a></td>' +
              '<td><a href="' + acclink + '" target="_blank">$' + Number(reward).toFixed(2) + '</a></td>' +
              '<td>' + available + '</td>' +
              '<td><a href="' + tolink + '" target="_blank">' + Number(topay).toFixed(2) + '</a><span> (' + torevewiers + ')</span></td>'
          ;

          if ($(this).has('*:contains(Masters has been granted), *:contains(Masters Exists)').length){
            html += '<td><b style="color: red">M</b></td>';
          }

          $(this).children().append(html);
        }
      });
    }
    else {
      $('.condensedhit').remove();
      $('.condensed, .hidecondensed').removeClass('condensed hidecondensed');
    }
  }

  // Sends desktop notification and/or sound when new HITs are found
  function Notify_Sound () {
    var currenthits = $('.messageText').children('.ctaBbcodeTable').length;
    if (hits < currenthits) {
      if (settings.notify) {
        Notification.requestPermission();
        var n = new Notification((currenthits - hits) + ' HIT(s) posted on MturkCrowd.com', {
          icon : "https://www.mturk.com/media/favicon.png",
          body : "New HITs have been posted on MTurk Crowd.",
        });
        setTimeout(n.close.bind(n), 4000);
      }
      if (settings.sound) {
        audio.play();
      }
      hits = currenthits;
    }
  }

  // Runs all of the functions
  function Pulse () {
    var currentposts = $('.message').length;

    if (posts < currentposts) {
      Media();
      HITs();
      Masters();
      Fix();
      AddPanda();
      Condense();
      Notify_Sound();
      posts = currentposts;
    }
  }

  $(':checkbox').change(function () {
    settings = {
      media    : $('#media').prop('checked'),
      hits     : $('#hits').prop('checked'),
      condense : $('#condense').prop('checked'),
      masters  : $('#masters').prop('checked'),
      fix      : $('#fix').prop('checked'),
      notify   : $('#notify').prop('checked'),
      sound    : $('#sound').prop('checked')
    };
    localStorage.setItem('settings', JSON.stringify(settings));

    Media();
    HITs();
    Fix();
    Masters();
    Condense();
  });

  $('#content').on('click', 'button.nonhit > a', function () {
    $(this).parent().next().toggle();
    $(this).text($(this).text() === 'Show Non HIT Post' ? 'Hide Non HIT Post' : 'Show Non HIT Post');
  });

  $('#content').on('click', 'button.media', function () {
    $(this).parent().next().toggle();
  });

  $('#content').on('click', 'button.masters', function () {
    $(this).parent().next().toggle();
  });

  $('head').append('<style type="text/css"> .hidecondensed {display: none;} .condensed {width: 90%;} .nonhit:focus {outline:0;}');

  var audio = new Audio('data:audio/mp3;base64,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');
  audio.volume = 1;

  var prev = $('a:contains(< Prev):eq(0)').prop('href');
  var next = $('a:contains(Next >):eq(0)').prop('href');

  $(document).keydown(function (e) {
    if (!$('input, textarea').is(':focus')){
      switch (e.which) {
        case 37: // Left
          if (prev) { window.location.href = prev; }
          break;
        case 39: // Right
          if (next) { window.location.href = next; }
          break;
      }
    }
  });

  var posts = 0;
  var hits = $('.messageText').children('.ctaBbcodeTable').length;

  Pulse();

  if ($('label:contains(Live Update)').length) {
    if ($('label:contains(Live Update)').find('input')[0].checked){
      setInterval(Pulse, 5000);
    }
  }

});


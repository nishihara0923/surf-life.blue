jQuery(document).ready(function($){countField("#seo_description");});function countField(target) {jQuery(target).bind({keyup: function(){setCounter();},change: function() {setCounter();}});setCounter();function setCounter(){jQuery("span.counter-w").text("現在の文字数は "+jQuery(target).val().length);};}
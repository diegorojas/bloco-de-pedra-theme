// Display Latest Tweet

$(document).ready(function(){

$.getJSON('cache/twitter-json.txt', function(data){
        $.each(data, function(index, item){
                $('#tweet').append('<div><p>' + item.text.linkify() + '</p></div>' + '<div id="web_intent">' + '<span class="time">' + relative_time(item.created_at) + '</span>' + '<img src="images/retweet_mini.png" width="16" height="16" alt="Retweet">' + '<a href="http://twitter.com/intent/retweet?tweet_id=' + item.id_str + '">' + 'Retweet</a>' + '<img src="images/reply_mini.png" width="16" height="16" alt="Reply">' + '<a href="http://twitter.com/intent/tweet?in_reply_to=' + item.id_str + '">' + 'Reply</a>' + '<img src="images/favorite_mini.png" width="16" height="16" alt="Favorite">' + '<a href="http://twitter.com/intent/favorite?tweet_id=' + item.id_str + '">' + 'Favorite</a>' + '</div>' + '<hr />');
		});
});


// Convert Twitter API Timestamp to "Time Ago"

function relative_time(time_value) {
  var values = time_value.split(" ");
  time_value = values[1] + " " + values[2] + ", " + values[5] + " " + values[3];
  var parsed_date = Date.parse(time_value);
  var relative_to = (arguments.length > 1) ? arguments[1] : new Date();
  var delta = parseInt((relative_to.getTime() - parsed_date) / 1000);
  delta = delta + (relative_to.getTimezoneOffset() * 60);

  var r = '';
  if (delta < 60) {
        r = 'um minuto atras';
  } else if(delta < 120) {
        r = 'dois minutos atras';
  } else if(delta < (45*60)) {
        r = (parseInt(delta / 60)).toString() + ' minutos atras';
  } else if(delta < (90*60)) {
        r = 'uma hora atras';
  } else if(delta < (24*60*60)) {
        r = '' + (parseInt(delta / 3600)).toString() + ' horas atras';
  } else if(delta < (48*60*60)) {
        r = '1 dia atras';
  } else {
        r = (parseInt(delta / 86400)).toString() + ' dias atras';
  }

  	  return r;
	}

});	


// Create Usable Links

String.prototype.linkify = function() {
       return this.replace(/[A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&\?\/.=]+/, function(m) {
              return m.link(m);
      });
};
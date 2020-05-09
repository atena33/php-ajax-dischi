$(document).ready(function(){

  $.ajax ({
    url: "database.php",
    method: "GET",
    success: function (data) {
      var source = $("#entry-template").html();
      var template = Handlebars.compile(source);
      for (var i = 0; i < data.length; i++) {
        var album = data[i];
        console.log(album);
         var context = {
          immagine: album.poster,
          titolo: album.title,
          autore: album.author,
          anno: album.year
        }
        var dischi = template(context);
        $('main').append(dischi);
      }
    },
    error: function (error) {
      alert('è avvenuto un errore');
    }
  })
})

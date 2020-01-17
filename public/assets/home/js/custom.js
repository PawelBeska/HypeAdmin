
$(document).on({
    ajaxStart: function (e) {
        NProgress.start();
    },

    ajaxStop: function () {
        NProgress.done();

    }
});
const Item = ({ id, poster, title,rating,year }) => ` 
<div>
                                <div class="uk-overlay uk-overlay-hover">
                                    <img src="${poster}" alt="Image" >
                                    <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                                    <a class="uk-position-cover" href="${'/movie/'+title.split(' ').join('_')+'/'+id}"></a>
                                </div>
                                <div class="uk-panel" >
                                    
                                    <h5 class="uk-panel-title">${title}</h5>
                                    <p>
                                        <span class="rating">
                                            <i class="uk-icon-star"></i>
                                            <i class="uk-icon-star"></i>
                                            <i class="uk-icon-star"></i>
                                            <i class="uk-icon-star"></i>
                                            <i class="uk-icon-star"></i>
                                        </span>
                                        <span class="uk-float-right">${year}</span>
                                    </p>
                                </div>
                            </div>
   `;


$(document).ready(function () {
    $.ajax({
        url: location.href,
        type: 'POST',
        data: null,
        success: function (data) {
            console.log(data)
            NProgress.done();
            $('div.movies').html('').prepend(data['data'].map(Item).join(''));
            $.each(data['data'], function (heading, text) {
                $.each(text['movies_genre'], function (genre_head, genre_text) {
                    $('span#genres_' + text['id']).prepend('<a href="#">' + genre_text['name'] + '</a>');
                });
            });
            $('ul.paginator').html(data[0]);

        },
        error: function (data) {
            console.log('error');
        }
    });
});


import fetch from './../../fetch.js';
/**
 * Develop by Tomas B. Pajarillaga Jr, RMT, RN, MSIT(future|thesis)
 * QA: Thomas Emmanuel R. Pajarillaga (14y/o)
 * Enhanced Community Quarantine(COVID-19)
 *-----------------------------------------------
 * @param Model entity.name
 * @param Attributes entity.attribute(show on table)
 * @param Button attribute.actions.key
 * @param btn_attribute key:['icon','tooltip','color']
 * @param Base_URL entiry.url
 * @return GUI BREAD
 */

/**
 * JQuery DOM EventListener
 * Note : Update if necessary only
 */

const genre = {
    /* [Table] */
    entity: {
        name: 'genre',
        baseUrl: 'api'
    },
    models: [],
    /* [initialized] */
    init: () => {
        genre.ask();      
        fetch.option_list('genre');  
    },
    /* [ACTIONS] */
    ask: async() => {
        let baseUrl = 'api/genres/movies';
        var pathname = window.location.pathname;        
        let url = pathname.split('/');
        if(url.length == 4){
            baseUrl = '../../api/genres/movies';
        }
        genre.models = await fetch.ask(baseUrl);
        if (genre.models) {
            genre.models.forEach(genre.genreList);
        }        
    },
    genreList: (model) => {  
        let genre = $('<a>', { href: '#', class: 'list-group-item d-flex align-items-center justify-content-between' });
        $('<span>', { html: model.name }).appendTo(genre);
        $('<span>', { class: 'badge badge-primary badge-pill', html: model.movies.length }).appendTo(genre);
        $('#genres-list').append(genre);
    },
    genreDropdown: (model) => {

    }
};

window.addEventListener("load", genre.init);
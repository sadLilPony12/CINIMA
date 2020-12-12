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

$('body').on('click', '.btn-find', async(e) => state.onShow($(e.currentTarget).data('index')));
$('body').on('click', '.btn-delete', (e) => state.onDestroy($(e.currentTarget).data("index")));
$('body').on('click', '#btn-movie', (e) => state.onStore());
$('body').on('click', '.purchase-ticket-modal', (e) => state.onPurchaseTicket($(e.currentTarget).data('id')));
// $('body').on('click', '.seats', () => state.displaySeats());

// $(document).ready(function(){
//     $('.btn-group-toggle input[type="radio"]').click(function(){
//         var value = $(this).val();
//         var choice = value.split(',');
//         var count = 20;

//         if(choice[0] == 'orchestra'){
//             count = 30;
//         }

//         $('#seat-count').empty();
//         $('#seat-type').html(`${choice[0]} ${choice[1]}`)
//         for(let i = 0; i < count; i++){    
//             let label = $('<label>', { 
//                             class: 'btn btn btn-outline-primary', 
//                             html: $('<input>', { type: "checkbox", autocomplete: 'off' }) });
//             $('<span>', { class: 'icon-copy dw dw-chair' }).appendTo(label);

//             let button = $('<button>', { class: 'btn btn-outline-primary' });
//             $('<i>', { class: 'icon-copy dw dw-chair' }).appendTo(button);
//             $(`#seat-count`).append(label);
//         }
//     });
// });

const state = {
    /* [Table] */
    entity: {
        name: 'movie',
        baseUrl: 'api'
    },
    entity1: {
        name: 'movie',
        baseUrl: '../../api'
    },
    /* [Object Mapping] */
    models: [],
    /* [Tag object] */
    btnNew: document.getElementById("btn-new"),
    // btnLook: document.getElementById("look"),
    // inputKey: document.getElementById("key"),
    btnEngrave: document.getElementById("engrave"),
    activeIndex: 0,
    btnUpdate: null,
    btnDelete: null,
    pathname: window.location.pathname,
    /* [initialized] */
    init: () => {
        // Attach listeners
        // state.btnNew.addEventListener("click", state.onCreate);
        // state.btnNew.disabled = false;
        // state.btnLook.addEventListener("click", state.ask);
        // state.btnLook.disabled = false;
        // const loader = document.querySelector(".loader");
        // loader.className += " hidden";
        state.ask();   
        state.now_showing();  
        state.coming_soon();   
    },
    // displaySeats: () => {
    //     let seatType = $('.btn-group-toggle input[type="radio]"').val();
    //     alert(seatType);
    // },
    onPurchaseTicket: (e) => {
        //movie id is e
        $('#purchase-ticket-modal').modal('show'); 
    },
    now_showing: async() => {
        let now_showing_url = 'api/movies/showing';
        let url = state.pathname.split('/');
        if(url.length == 4){
            now_showing_url = '../../api/movies/showing';            
        }

        state.models = await fetch.ask(now_showing_url);
        if (state.models) {
            state.models.forEach(state.showing_list);
        }        
    },
    coming_soon: async() => {
        let coming_soon_url = 'api/movies/coming/soon';
        let url = state.pathname.split('/');
        if(url.length == 4){
            coming_soon_url = '../../api/movies/coming/soon';         
        }       

        state.models = await fetch.ask(coming_soon_url);
        if (state.models) {
            state.models.forEach(state.coming_soon_list);
        }        
    },
    /* [ACTIONS] */
    ask: async() => {
        // state.models = await fetch.translate(state.entity, { key: state.inputKey.value });
        if($('#movie-id').val()){
            state.models = await fetch.translate(state.entity1);
            if (state.models) {
                state.models.forEach(state.detailWriter);
            }
        }else{
            state.models = await fetch.translate(state.entity);
            if (state.models) {
                state.models.forEach(state.listWriter, state.activeIndex);
            }
        }        
    },
    onCreate: () => {
        state.btnEngrave.innerHTML = "Save";

        state.btnEngrave.removeEventListener("click", state.onUpdate);
        state.btnEngrave.addEventListener('click', state.onStore);
        fetch.showModal()
    },
    onShow: (i) => {
        state.activeIndex = i;
        state.btnEngrave.innerHTML = "Update";
        state.btnEngrave.removeEventListener("click", state.onStore);
        state.btnEngrave.addEventListener('click', state.onUpdate);
        state.btnEngrave.setAttribute('data-id', state.models[i].id);
        fetch.setModal(state.models[i]);
    },
    onStore: async() => {
        let params = $('#set-Model').serializeArray();
        let model = await fetch.store(state.entity, params);
        state.models.push(model)
        fetch.writer(state.entity, model);
        $('#movie-modal').modal('hide')
    },
    onUpdate: async() => {
        let params = $('#set-Model').serializeArray();
        let pk = state.btnEngrave.getAttribute('data-id');
        let model = await fetch.update(state.entity, pk, params);

        if (model) {
            //    console.log(model)
            state.models[state.activeIndex] = model
            fetch.writer(state.entity, model);

            $('#modal-main').modal('hide');
        }
    },
    onDestroy: async(i) => {
        let pkey = state.models[i].id;
        let ans = await fetch.destroy(state.entity, pkey);
        if (ans) {
            state.models.splice(i, 1);
        }
    },
    listWriter: (model) => {
        let li = $('<li>');

        let div1 = $('<div>', { class: 'row no-gutters' });
        let div11 = $('<div>', { class: 'col-lg-4 col-md-12 col-sm-12' });
        let div111 = $('<div>', { class: 'blog-img', style: 'background: url("./../../../images/img1.jpg") center center no-repeat;' });
        div111.appendTo(div11);
        div11.appendTo(div1);

        let div2 = $('<div>', { class: 'col-lg-8 col-md-12 col-sm-12', style: 'max-height: 300px; overflow: auto;' });
        let div21 = $('<div>', { class: 'blog-caption' });
        $('<h4>', { html: model.title }).appendTo(div21);
        let div211 = $('<div>', { class: 'blog-by' });
        $('<p>', { html: model.synopsis }).appendTo(div211);
        let divReadMore = $('<div>', { class: 'pt-10' });
        $('<a>', { href: '#', onclick: `location.replace("/${model.id}/${model.trailer_url}/movies")` , class: 'btn btn-outline-primary', html: 'Read More' }).appendTo(divReadMore);
        divReadMore.appendTo(div211);
        div211.appendTo(div21);
        div21.appendTo(div2);
        
        div2.appendTo(div1);
        div1.appendTo(li);

        $('#movies-list').append(li);
    },
    detailWriter: (model) => {
        if(model.id == $('#movie-id').val()){
            // console.log(model);            
            $('.movie-title').html(model.title);
            $('#movie-synopsis').html(model.synopsis);
            $('#movie-ticket-price').html(`₱ ${model.ticket_price}.00`);
            $('#movie-genre').html(model.genre_name);
            $('#movie-director').html(model.director);
            model.producers.split(', ').forEach(producer => {
                $('#movie-producers').append($('<li>', { html: producer }));
            })
            model.screenplay_by.split(', ').forEach(screenplay => {
                $('#movie-screenplays').append($('<li>', { html: screenplay }));
            })
            model.story_by.split(', ').forEach(story => {
                $('#movie-stories').append($('<li>', { html: story }));
            })
            model.starring.split(', ').forEach(star => {
                $('#movie-starring').append($('<li>', { html: star }));
            })
            $('#movie-music').html(model.music_by);
            $('#movie-cinematography').html(model.cinematography);
            model.edited_by.split(', ').forEach(edits => {
                $('#movie-edits').append($('<li>', { html: edits }));
            })

            if(model.production_company){
                model.production_company.split(', ').forEach(production_company => {
                    $('#movie-production-company').append($('<li>', { html: production_company }));
                })
            }else{
                $('#movie-production-company').append($('<li>', { html: 'There are no listed production company for this movie' }));
            }
            
            model.distributed_by.split(', ').forEach(distribution => {
                $('#movie-distribution').append($('<li>', { html: distribution }));
            })

            $('#movie-released').html(model.release_date);
            $('#movie-running-time').html(`${model.running_time} minutes`);
            $('#movie-language').html(`${model.language}`);
        }
    },
    showing_list: (model) => {
        let li = $('<li>');
        $('<h4>', { html: $('<a>', { href: '#', html: model.title, class: 'purchase-ticket-modal', 'data-id': model.id  }) }).appendTo(li);
        $('<span>', { html: `₱ ${model.ticket_price}.00 - per ticket` }).appendTo(li);
        $('#showing-list').append(li);      
    },
    coming_soon_list: (model) => {
        $('#coming-soon-list').append($('<a>', { href: '#', class: 'list-group-item d-flex align-items-center justify-content-between', html: model.title }));     
    }
};

window.addEventListener("load", state.init);
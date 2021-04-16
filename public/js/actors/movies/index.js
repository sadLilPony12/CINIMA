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
$('body').on('click', '#btn-movie', (e) => state.onStoreMovie());
$('body').on('click', '.purchase-ticket-modal', (e) => state.onPurchaseTicket($(e.currentTarget).data('index'), $(e.currentTarget).data('id')));
$('body').on('click', '.seats', (e) => state.displaySeats(e));
$('body').on('click', '.reserved', (e) => state.onReserve(e));
$('body').on('click', '#compute-price', () => state.onCompute());
$('body').on('change', '#view-date', () => state.onViewDate());
$('body').on('click', '#reserve-seat-submit', () => state.onStore());
$('body').on('click', '#save-seats', () => state.onSaveSeat());
// $('body').on('change', '#check-db', () => state.CheckDb());

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
    sub_entity: {
        name: 'seat',
        baseUrl: 'api'
    },
    /* [Object Mapping] */
    models: [],
    models1: [],
    reserved: [],
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
    onSaveSeat: () => {
        // let model = [];
        // state.reserved.forEach(reserve => {
        //     // model= reserve.splice(4, 1)
        //     model.push(reserve.splice(4, 1))
        //     console.log(model);
        // });
       
        $('#seat-position').val(state.reserved);
    },
     CheckDb: async() => {
       console.log(state.reserved);
       
       let view_date = $('#view-date').val();
       if (view_date) {
           let seat_position = $('#seat-position').val();
           console.log(seat_position);
          let view_time = $('#check-db').val()
          let model = await fetch.ask(`./api/seats/reserve`, {type:seat_position, time:view_time, date:view_date})
          if (model) {
              alert('The seat(s) you\'ve chosen are already reserved, please choose a different seat. ')
              location.reload();
          }
       }else{
           alert('Please choose a date first')
       }
    },
    onStoreMovie: async() => {
        let params = $('#set-Model').serializeArray();
        let model = await fetch.store(state.entity, params);
        state.models.push(model)
        fetch.writer(state.entity, model);
        $('#movie-modal').modal('hide')
    },
    onViewDate: () => {
        let index = $('#movie-index').val();
        let model = state.models[index];
        let view_date = $('#view-date').val();
        view_date = new Date(view_date);
        
        if(view_date >= new Date(model.showing_at) && view_date <= new Date(model.ending_at)){
            
        }else{
            alert('Oops, the date you\'ve entered isnt on the date range.')
            $('#view-date').val('');
        }
    },
    onCompute: () => {
        let index = $('#movie-index').val();
        let model = state.models[index];

        let total_price = model.ticket_price * state.reserved.length;

        $('#total-price').val(total_price);
    },
    displaySeats: (e) => {
        let seat_type = $(e.currentTarget).data('id');

        let row_count = 2;
       if(seat_type === 'orchestra,a' || seat_type === 'orchestra,b'){
            row_count = 3;
       }

       $('#seat-table').empty();
       for(let i = 1; i <= row_count; i++){
        let tr = $('<tr>');
        $('<td>', { html: i }).appendTo(tr);

           for(let x = 1; x < 8; x++){            
                let td = $('<td>');
                let button = $('<button>', { 
                                    type: 'button', 
                                    class: 'btn btn-outline-primary reserved', 
                                    'data-toggle': 'button',
                                    'aria-pressed': 'false',
                                    'data-seat': `${seat_type},${i},${x}`,
                                    autocomplete: 'off' });
                $('<span>', { class: 'icon-copy dw dw-chair' }).appendTo(button);
                button.appendTo(td);
                td.appendTo(tr);
           }
        $('#seat-table').append(tr);
       }
    },
    onPurchaseTicket: (e, id) => {
        let model = state.models[e];

        $('#purchase-ticket-modal').modal('show'); 
        $('#movie-index').val(e);
        $('#movie-id').val(id);
        $('#view-date').attr('placeholder', `From ${model.showing_at} to ${model.ending_at} only`);
        // alert(e)
    },
    now_showing: async() => {
        let now_showing_url = 'api/movies/showing';
        let url = state.pathname.split('/');
        if(url.length == 4){
            now_showing_url = '../../api/movies/showing';            
        }

        state.models = await fetch.ask(now_showing_url);
        if (state.models) {
            if(url[1] == 'home'){
                state.models.forEach((model, index) => {state.showing_list(model, index)});
            }else{
                state.models.forEach(state.showing_welcome);
            }           
        }        
    },
    coming_soon: async() => {
        let coming_soon_url = 'api/movies/coming/soon';
        let url = state.pathname.split('/');
        if(url.length == 4){
            coming_soon_url = '../../api/movies/coming/soon';         
        }       

        state.models1 = await fetch.ask(coming_soon_url);
        if (state.models1) {
            state.models1.forEach(state.coming_soon_list);
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
        let params = $('#reserve-seat').serializeArray();
        console.log(params);
        let model = await fetch.store(state.sub_entity, params);
        console.log(model);
        // state.models.push(model)
        // fetch.writer(state.entity, model);
        $('#purchase-ticket-modal').modal('hide')
        $('#success-modal').modal('hide')
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
        let div111 = $('<div>', { class: 'blog-img', style: `background: url("./../../../images/avatar/${model.avatar}") center center no-repeat;` });
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
    showing_list: (model, i) => {  
        let li = $('<li>');
        $('<h4>', { html: $('<a>', { href: '#', html: model.title, class: 'purchase-ticket-modal', 'data-id': model.id, 'data-index': i  }) }).appendTo(li);
        $('<span>', { html: `₱ ${model.ticket_price}.00 - per ticket` }).appendTo(li);
        $('#showing-list').append(li);      
    },
    coming_soon_list: (model) => {
        $('#coming-soon-list').append($('<a>', { href: '#', class: 'list-group-item d-flex align-items-center justify-content-between', html: model.title }));     
    },
    onReserve: (e) => {
        let will_remove = $(e.currentTarget).attr('aria-pressed') == 'false' ? false: true;
        let position = $(e.currentTarget).data('seat').split(',');
               
        $('#table-reserved').empty()
        const item= $(e.currentTarget).data('seat');
        if(will_remove){
           
            // console.log(state.reserved);

            state.reserved = jQuery.grep(state.reserved, function(value) {
                 return value[4] !== item;
            });
        }else{
            position.push(item);
            console.log(position);
            state.reserved.push(position);              
        }        

        state.reserved.forEach((seat, index) => {                
            let tr = $('<tr>', { id: $(e.currentTarget).data('seat') });
            $('<td>', { html: ++index }).appendTo(tr)
            $('<td>', { html: seat[0] }).appendTo(tr)
            $('<td>', { html: seat[1] }).appendTo(tr)
            $('<td>', { html: seat[2] }).appendTo(tr)
            $('<td>', { html: seat[3] }).appendTo(tr)
            $('#table-reserved').append(tr)
        })
        
        // alert($(e.currentTarget).data('seat'));
        // alert($(e.currentTarget).attr('aria-pressed'))
    },
    showing_welcome: (model) => {
        $('<li>', { class: 'list-group-item', html:`${model.title}` }).appendTo($('#showing-list'));
    }
};

window.addEventListener("load", state.init);
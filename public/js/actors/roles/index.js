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

$('body').on('click', '.btn-view', async(e) => state.onShow($(e.currentTarget).data('index')));
$('body').on('click', '.btn-delete', (e) => state.onDestroy($(e.currentTarget).data("id")));

const state = {
    /* [Table] */
    entity: {
        name: 'role',
        attributes: ['username', 'email'],
        actions: {
            view: ['fa fa-eye', 'View', 'info'],
            delete: ['fa fa-trash', 'Delete', 'danger']
        },
        baseUrl: '../api'
    },
    /* [Object Mapping] */
    models: [],
    /* [Tag object] */
    // btnNew: document.getElementById("btn-new"),
    // btnLook: document.getElementById("look"),
    inputKey: document.getElementById("key"),
    role: document.getElementById("list-role-id").value,
    btnEngrave: document.getElementById("engrave"),
    activeIndex: 0,
    btnUpdate: null,
    btnDelete: null,
    /* [initialized] */
    init: () => {
        // Attach listeners
        // state.btnNew.addEventListener("click", state.onCreate);
        // state.btnNew.disabled = false;
        // state.btnLook.addEventListener("click", state.ask);
        // state.btnNew.disabled = false;
        // const loader = document.querySelector(".loader");
        // loader.className += " hidden";

        state.ask();
    },
    /* [ACTIONS] */
    ask: async() => {
        // state.models = await fetch.translate(state.entity, { role: state.role, key: state.inputKey.value });
        state.models = await fetch.translate(state.entity, { role: state.role });
        if (state.models) {
            console.log(state.models);
            if(state.models.length == 0){
                let message = $('<tr>', { class: 'text-center' });
                $('<td>', { colspan: 5, html: `There are no registered ${state.role == 2 ? 'administrators' : 'customers' }` }).appendTo(message);

                $('#roles-table').append(message);
            }else{
                $('#roles-table').empty();
                state.models.forEach(state.writer, state.activeIndex);
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
    onStore: async(e) => {
        e.preventDefault();
        let params = $('#set-Model').serializeArray();
        let model = await fetch.store(state.entity, params);
        state.models.push(model)
        fetch.writer(state.entity, model);
        $('#modal-main').modal('hide')
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
        state.ask();
        if (ans) {            
            state.models.splice(i, 1);
        }
    },
    writer: (model, index) => {
        let tr = $('<tr>');
        $('<td>', { class: 'table-plus', html:  model.email}).appendTo(tr);
        $('<td>', { html: model.username }).appendTo(tr);
        $('<td>', { html: model.gender }).appendTo(tr);
        let action = $('<td>').appendTo(tr);
        let action_div = $('<div>', { class: 'dropdown' });
            $('<a>', { 
                class: 'btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle', 
                href: '#', 
                role: 'button', 
                'data-toggle': 'dropdown', 
                html: $('<i>', { class: 'dw dw-more' }) 
            }).appendTo(action_div);
        let action_div_dropdown = $('<div>', { class: 'dropdown-menu dropdown-menu-right dropdown-menu-icon-list' });

            let action_delete = $('<a>', { class: 'dropdown-item btn-delete', href: '#', 'data-id': index });
                $('<i>', { class: 'dw dw-delete-3' }).appendTo(action_delete);
                $('<span>', { html: 'Delete' }).appendTo(action_delete);  
            action_delete.appendTo(action_div_dropdown);            
            index++;
            
        action_div_dropdown.appendTo(action_div);
        action_div.appendTo(action);
        action.appendTo(tr);
        $('#roles-table').append(tr);
    }
};

window.addEventListener("load", state.init);
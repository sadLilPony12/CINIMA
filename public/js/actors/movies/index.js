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

const state = {
    /* [Table] */
    entity: {
        name: 'movie',
        baseUrl: 'api'
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
    },
    /* [ACTIONS] */
    ask: async() => {
        // state.models = await fetch.translate(state.entity, { key: state.inputKey.value });
        state.models = await fetch.translate(state.entity);
        if (state.models) {
            state.models.forEach(state.writer, state.activeIndex);
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
    writer: (model, index) => {

    }
};

window.addEventListener("load", state.init);
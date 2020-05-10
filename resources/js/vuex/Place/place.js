import axios from 'axios'
import { getField, updateField } from 'vuex-map-fields'

const place = {
    namespaced: true,
    state: {
        category: {},
        place: {},
        showResult: false,
        showLoading: false,
       
    },
    getters: {
        getField,
    },
    actions: {
        async getCategory({ commit}){
            let resApi = await axios.get('/api/place/category')
            commit('onOkGetCategory', resApi.data)
        },
        async getPlaces({commit},nearAndCategory){
            let str = nearAndCategory;
            let nearCategory = str.split("-");
            let resApi = await axios.get('/api/place/near/'+nearCategory[0]+'/'+nearCategory[1]);
            commit('onOkGetPlace', resApi)
        }
    },
    mutations: {
        updateField,
        onOkGetCategory(state, data){
            state.category = data
        },
        onOkGetPlace(state, data){
            state.place = data
        },

     
    }
}
export default place
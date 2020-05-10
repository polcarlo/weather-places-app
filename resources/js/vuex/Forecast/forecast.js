import axios from 'axios'
import { getField, updateField } from 'vuex-map-fields'

const forecast = {
    namespaced: true,
    state: {
        lists: {},
        showResult: false,
        showLoading: false,
       
    },
    getters: {
        getField,
    },
    actions: {
        async getForecast({ commit}, city){
            let resApi = await axios.post('/api/forecast/' + city)   
            commit('onOkGetList', resApi)
        },
    },
    mutations: {
        updateField,
        onOkGetList(state, data){
            state.lists = data
        },
    }
}
export default forecast
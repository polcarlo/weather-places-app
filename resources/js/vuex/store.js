import Vue from 'vue'
import Vuex from 'vuex'
import Forecast from './Forecast/forecast'
import Place from './Place/place'
Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        Forecast,
        Place
    }
});
